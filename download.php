<?php
// Define database connection parameters
$host = 'sql109.epizy.com';
$username = 'epiz_33722902';
$password = 'DgRYDMrBI3RPg';
$database = 'epiz_33722902_maternal_deaths';

// Create a new database connection
$conn = new mysqli($host, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
  die('Failed to connect to the database: ' . $conn->connect_error);
}

// Handle POST requests
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // Retrieve the start and end dates from the form data
  $start_date = $_POST["start-date"];
  $end_date = $_POST["end-date"];

  // Prepare the SQL query
  $stmt = $conn->prepare("SELECT District, Facility, COUNT(Facility), COUNT(otherFacility) as Total_Deaths
                        FROM maternal_deaths_entered 
                        WHERE DateOfDeath BETWEEN ? AND ?
                        GROUP BY District, Facility
                        ORDER BY Total_Deaths DESC");

  $stmt->bind_param("ss", $start_date, $end_date);
  $stmt->execute();
  $result = $stmt->get_result();

  // Initialize empty array to store data
  $data = array();

  // Loop through query result and add each row to the data array
  while ($row = $result->fetch_assoc()) {
    $data[] = $row;
  }

  // Close database connection
  $conn->close();

  // Set headers for CSV file download
  header('Content-Type: text/csv');
  header('Content-Disposition: attachment; filename="maternal_deaths_report.csv"');

  // Open output stream for CSV file
  $output = fopen('php://output', 'w');

  // Write headers to CSV file
  fputcsv($output, array('District', 'Facility', 'Total Deaths'));

  // Write data to CSV file
  foreach ($data as $row) {
    fputcsv($output, $row);
  }

  // Close output stream
  fclose($output);
}
?>
