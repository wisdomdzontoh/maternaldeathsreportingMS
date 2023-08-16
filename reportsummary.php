
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="reports.css">

</head>
<body>


<button onclick="window.print()">Print</button>
<a href="maternalform.php" id = "dataentry-button" class="dataentry-btn" >Go to Data Entry Portal</a>
<form method="post">
  <label for="start-date">Start Date:</label>
  <input type="date" id="start-date" name="start-date">
  <label for="end-date">End Date:</label>
  <input type="date" id="end-date" name="end-date">
  <input type="submit" value="Generate Report">
</form>
<br>
    

</br>
    <h1 style="font-size:300%; text-align:center; color:blue;">Maternal Deaths Report</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the start and end dates from the form data
  $start_date = $_POST["start-date"];
  $end_date = $_POST["end-date"];

  // Connect to the database and execute the query
  $conn = mysqli_connect('sql109.epizy.com', 'epiz_33722902', 'DgRYDMrBI3RPg', 'epiz_33722902_maternal_deaths');
  $result = mysqli_query($conn, "SELECT District as District, Facility as Facility, COUNT(Facility), COUNT(otherFacility) as total_deaths 
                                 FROM maternal_deaths_entered 
                                 WHERE DateOfDeath BETWEEN '$start_date' AND '$end_date'
                                 GROUP BY District
                                 ORDER BY total_deaths DESC");

  // Display the results in an HTML table
    
  echo "<table>";
    echo '<div style="text-align:center; font-weight:bold;">
          Start date: ' . $start_date . '<br>
          End date: ' . $end_date . '<br>
      </div>';

  echo "<tr><th>District</th><th>Facility</th><th>Total Deaths</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row['District']."</td><td>".$row['Facility']."</td><td>".$row['total_deaths']."</td></tr>";
  }
  echo "</table>";

  // Add buttons to download the table as Excel or PDF
    echo "<br>";
    echo '<a href="download.php" download><button>Download Report as CSV</button></a>';
    // echo "<button><a href='download.php?format=excel&start_date=".$start_date."&end_date=".$end_date."'>Download as Excel</a></button>";
    // echo "<button><a href='download.php?format=pdf&start_date=".$start_date."&end_date=".$end_date."'>Download as PDF</a></button>";
  } else {
    echo "No records found.";
 
  
  // Close the database connection
  mysqli_close($conn);
}
?>
</body>

</html>
