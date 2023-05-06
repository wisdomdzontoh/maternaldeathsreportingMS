<?php
// insert data into the database
// Get the form data
$region = $_POST['Region'];
$otherRegion = $_POST['otherRegion'];
$District = $_POST['District'];
$otherDistrict = $_POST['otherDistrict'];
$Facility = $_POST['Facility'];
$otherFacility = $_POST['otherFacility'];
$nameOfDeceased = $_POST['nameOfDeceased'];
$dob = $_POST['dob'];
$education = $_POST['education'];
$occupation = $_POST['occupation'];
$maritalStatus = $_POST['maritalStatus'];
$Religion = $_POST['Religion'];
$Ethnicity = $_POST['Ethnicity'];
$Gravidity = $_POST['Gravidity'];
$Parity = $_POST['Parity'];
$ANC = $_POST['ANC'];
$numberOfAnc = $_POST['numberOfAnc'];
$placeOfAnc = $_POST['placeOfAnc'];
$gestationalAge = $_POST['gestationalAge'];
// $Identified_ANC_risk_factor = $_POST['Identified_ANC_risk_factor'];
$riskFactorsnone = $_POST['riskFactorsnone'];
$riskFactorsHypertension = $_POST['riskFactorsHypertension'];
$riskFactorsSickleCellDisease = $_POST['riskFactorsSickleCellDisease'];
$riskFactorsPreviousCaesareanSection = $_POST['riskFactorsPreviousCaesareanSection'];
$riskFactorsDiabetesMellitus = $_POST['riskFactorsDiabetesMellitus'];
$riskFactorsAnaemia = $_POST['riskFactorsAnaemia'];
$riskFactorsPreviousPPH = $_POST['riskFactorsPreviousPPH'];
$riskFactorsOther = $_POST['riskFactorsOther'];
//
$HIVStatus = $_POST['HIVStatus'];
$Patient_on_Antiretrovirals = $_POST['Patient_on_Antiretrovirals'];
$DateofArrival = $_POST['DateofArrival'];
$TimeofArrival = $_POST['TimeofArrival'];
$TimeTreatmentStarted = $_POST['TimeTreatmentStarted'];
$Referral = $_POST['Referral'];
$Referral_from_where = $_POST['Referral_from_where'];
$minutesToReachFacility = $_POST['minutesToReachFacility'];
$form_of_transport = $_POST['form_of_transport'];
$LabourOccur = $_POST['LabourOccur'];
$LabourInduced = $_POST['LabourInduced'];
$LabourAugmented = $_POST['LabourAugmented'];
$PatographUsed = $_POST['PatographUsed'];
$Activephase = $_POST['Activephase'];
$Second_stage = $_POST['Second_stage'];
$Third_stage = $_POST['Third_stage'];
$PatientDeliver = $_POST['PatientDeliver'];
$Location_of_delivery = $_POST['Location_of_delivery'];
$Delivered_by = $_POST['Delivered_by'];
$Mode_of_Delivery = $_POST['Mode_of_Delivery'];
$Delivery_outcome = $_POST['Delivery_outcome'];
$BirthWeight = $_POST['BirthWeight'];
$daysSinceTermination = $_POST['daysSinceTermination'];
$placeOfDeath = $_POST['placeOfDeath'];
$DateofDeath = $_POST['DateofDeath'];
$TimeofDeath = $_POST['TimeofDeath'];

/*boolen for early pregnancy */
$Antenatal_Evacuation = $_POST['Antenatal_Evacuation'];
$Antenatal_Laparotomy = $_POST['Antenatal_Laparotomy'];
$Antenatal_Hysterectomy = $_POST['Antenatal_Hysterectomy'];
$Antenatal_Transfusion1 = $_POST['Antenatal_Transfusion1'];
$EarlyAntenatal_AntiHypertensive = $_POST['EarlyAntenatal_AntiHypertensive'];

/*boolen for antenatal interventions */
$Antenatal_Transfusion2 = $_POST['Antenatal_Transfusion2'];
$Antenatal_ExternalVersion = $_POST['Antenatal_ExternalVersion'];
$Antenatal_MagnisiumSulphate = $_POST['Antenatal_MagnisiumSulphate'];
$Antenatal_Diazepam = $_POST['Antenatal_Diazepam'];
$Antenatal_AntiHypertensive = $_POST['Antenatal_AntiHypertensive'];
$Antenatal_Hysterotomy2 = $_POST['Antenatal_Hysterotomy2'];

/* intrapartum interventions */
$Intrapartum_Instrumental_delivery = $_POST['Intrapartum_Instrumental_delivery'];
$Intrapartum_Antibiotic_therapy = $_POST['Intrapartum_Antibiotic_therapy'];
$Intrapartum_Caesarian_section = $_POST['Intrapartum_Caesarian_section'];
$Intrapartum_Hysterectomy = $_POST['Intrapartum_Hysterectomy'];
$Intrapartum_Transfusion = $_POST['Intrapartum_Transfusion'];
$Intrapartum_MagnisiumSulphate = $_POST['Intrapartum_MagnisiumSulphate'];
$Intrapartum_Diazepam = $_POST['Intrapartum_Diazepam'];

/* postpartum interventions */
$Postpartum_Evacuation = $_POST['Postpartum_Evacuation'];
$Postpartum_Antibiotic_therapy = $_POST['Postpartum_Antibiotic_therapy'];
$Postpartum_Laparotomy = $_POST['Postpartum_Laparotomy'];
$Postpartum_Hysterectomy = $_POST['Postpartum_Hysterectomy'];
$Postpartum_Transfusion = $_POST['Postpartum_Transfusion'];
$Postpartum_Manual_removal_of_placenta = $_POST['Postpartum_Manual_removal_of_placenta'];
$Postpartum_Anti_Hypertensive = $_POST['Postpartum_Anti_Hypertensive'];
$Postpartum_Diazepam = $_POST['Postpartum_Diazepam'];

/* other interventions */
$otherInterventions_Anaesthesia_GA = $_POST['otherInterventions_Anaesthesia_GA'];
$otherInterventions_Epidural = $_POST['otherInterventions_Epidural'];
$otherInterventions_Spinal = $_POST['otherInterventions_Spinal'];
$otherInterventions_Local = $_POST['otherInterventions_Local'];
$otherInterventions_Invasive_monitoring = $_POST['otherInterventions_Invasive_monitoring'];
$otherInterventions_Anti_Hypertensive = $_POST['otherInterventions_Anti_Hypertensive'];
$otherInterventions_ICU_ventilation = $_POST['otherInterventions_ICU_ventilation'];
$otherInterventions_Diazepam = $_POST['otherInterventions_Diazepam'];
$otherInterventions_other = $_POST['otherInterventions_other'];
/* other questions */
$AutopsyPerformed = $_POST['AutopsyPerformed'];
$DateAutopsyPerformed = $_POST['DateAutopsyPerformed'];
$AutopsyPerformedby = $_POST['AutopsyPerformedby'];
$OtherAutopsyPerformedBy = $_POST['OtherAutopsyPerformedBy'];
$FinalCOD = $_POST['FinalCOD'];
$Haemorrhage = $_POST['Haemorrhage'];
$UnsafeAbortion = $_POST['UnsafeAbortion'];
$RupturedUterus = $_POST['RupturedUterus'];
$ObstructedLabour = $_POST['ObstructedLabour'];
$Malaria = $_POST['Malaria'];
$HypertensiveDisease = $_POST['HypertensiveDisease'];
$GenitalTractSepsis = $_POST['GenitalTractSepsis'];
$EctopicPregnancy = $_POST['EctopicPregnancy'];
$SickleCellDisease = $_POST['SickleCellDisease'];
$PrimaryUnderlyingCODOther = $_POST['PrimaryUnderlyingCODOther'];
$Delay_in_woman_seeking_help = $_POST['Delay_in_woman_seeking_help'];
$OtherFactorsDelay = $_POST['OtherFactorsDelay'];
$Declined_treatment_or_admission = $_POST['Declined_treatment_or_admission'];
$OtherDeclined_treatment_or_admission = $_POST['OtherDeclined_treatment_or_admission'];
$Lack_of_Transport_from_home_to_reach_facility = $_POST['Lack_of_Transport_from_home_to_reach_facility'];
$OtherLack_of_Transport1 = $_POST['OtherLack_of_Transport1'];
$Lack_of_Transport_between_Health_Care_Facilities = $_POST['Lack_of_Transport_between_Health_Care_Facilities'];
$OtherLack_of_Transport2 = $_POST['OtherLack_of_Transport2'];
$Health_Service_to_Health_Service_Communication_breakdown = $_POST['Health_Service_to_Health_Service_Communication_breakdown'];
$OtherHealth_Service_Breakdown = $_POST['OtherHealth_Service_Breakdown'];
$Summary = $_POST['Summary'];
$Lesson = $_POST['Lesson'];
$Recommendations = $_POST['Recommendations'];
$NameOfMembers = $_POST['NameOfMembers'];
$fullNameDataOficer = $_POST['fullNameDataOficer'];
$mobileDataOfficer = $_POST['mobileDataOfficer'];
$RankDataOfficer = $_POST['RankDataOfficer'];
$DateofDataEntry = $_POST['DateofDataEntry'];
$fullNameCommitteeChairman = $_POST['fullNameCommitteeChairman'];
$mobileCommitteeChairman = $_POST['mobileCommitteeChairman'];
$RankCommitteeChairman = $_POST['RankCommitteeChairman'];
$DateofCommitteeChairman = $_POST['DateofCommitteeChairman'];

// Connect to the database
$host = "sql109.epizy.com";
$username = "epiz_33722902";
$password = "DgRYDMrBI3RPg";
$dbname = "epiz_33722902_maternal_deaths";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Insert the data into the database
$sql = "INSERT INTO maternal_deaths_entered (Region, otherRegion,
District,
otherDistrict,
Facility, 
otherFacility, 
nameOfDeceased, 
dob, 
education, 
occupation, 
maritalStatus, 
Religion, 
Ethnicity, 
Gravidity, 
Parity, 
ANC, 
numberOfAnc, 
placeOfAnc, 
gestationalAge, 
riskFactorsnone, 
riskFactorsHypertension, 
riskFactorsSickleCellDisease, 
riskFactorsPreviousCaesareanSection, 
riskFactorsDiabetesMellitus, 
riskFactorsAnaemia, 
riskFactorsPreviousPPH, 
riskFactorsOther, 
HIVStatus, 
Patient_on_Antiretrovirals, 
DateofArrival, 
TimeofArrival, 
TimeTreatmentStarted, 
Referral, 
Referral_from_where, 
minutesToReachFacility, 
form_of_transport, 
LabourOccur, 
LabourInduced, 
LabourAugmented, 
PatographUsed, 
Activephase, 
Second_stage, 
Third_stage, 
PatientDeliver, 
Location_of_delivery, 
Delivered_by, 
Mode_of_Delivery, 
Delivery_outcome, 
BirthWeight, 
daysSinceTermination, 
placeOfDeath, 
DateofDeath, 
TimeofDeath, 
Antenatal_Evacuation, 
Antenatal_Laparotomy, 
Antenatal_Hysterectomy, 
Antenatal_Transfusion1, 
EarlyAntenatal_AntiHypertensive, 
Antenatal_Transfusion2, 
Antenatal_ExternalVersion, 
Antenatal_MagnisiumSulphate, 
Antenatal_Diazepam, 
Antenatal_AntiHypertensive, 
Antenatal_Hysterotomy2, 
Intrapartum_Instrumental_delivery, 
Intrapartum_Antibiotic_therapy, 
Intrapartum_Caesarian_section, 
Intrapartum_Hysterectomy, 
Intrapartum_Transfusion, 
Intrapartum_MagnisiumSulphate, 
Intrapartum_Diazepam, 
Postpartum_Evacuation,
Postpartum_Antibiotic_therapy, 
Postpartum_Laparotomy, 
Postpartum_Hysterectomy, 
Postpartum_Transfusion, 
Postpartum_Manual_removal_of_placenta, 
Postpartum_Anti_Hypertensive, 
Postpartum_Diazepam, 
otherInterventions_Anaesthesia_GA, 
otherInterventions_Epidural, 
otherInterventions_Spinal, 
otherInterventions_Local, 
otherInterventions_Invasive_monitoring, 
otherInterventions_Anti_Hypertensive, 
otherInterventions_ICU_ventilation, 
otherInterventions_Diazepam, 
otherInterventions_other, 
AutopsyPerformed, 
DateAutopsyPerformed, 
AutopsyPerformedby, 
OtherAutopsyPerformedBy, 
FinalCOD, 
Haemorrhage,
UnsafeAbortion,
RupturedUterus,
ObstructedLabour,
Malaria,
HypertensiveDisease,
GenitalTractSepsis,
EctopicPregnancy,
SickleCellDisease,
PrimaryUnderlyingCODOther,
Delay_in_woman_seeking_help, 
OtherFactorsDelay, 
Declined_treatment_or_admission, 
OtherDeclined_treatment_or_admission, 
Lack_of_Transport_from_home_to_reach_facility, 
OtherLack_of_Transport1, 
Lack_of_Transport_between_Health_Care_Facilities, 
OtherLack_of_Transport2, 
Health_Service_to_Health_Service_Communication_breakdown, 
OtherHealth_Service_Breakdown, 
Summary, 
Lesson, 
Recommendations, 
NameOfMembers, 
fullNameDataOficer, 
mobileDataOfficer, 
RankDataOfficer, 
DateofDataEntry, 
fullNameCommitteeChairman, 
mobileCommitteeChairman, 
RankCommitteeChairman, 
DateofCommitteeChairman) VALUES ('$region', 
'$otherRegion',
'$District',
'$otherDistrict',
'$Facility', 
'$otherFacility', 
'$nameOfDeceased', 
'$dob', 
'$education', 
'$occupation', 
'$maritalStatus', 
'$Religion', 
'$Ethnicity', 
'$Gravidity', 
'$Parity', 
'$ANC', 
'$numberOfAnc', 
'$placeOfAnc', 
'$gestationalAge', 
'$riskFactorsnone', 
'$riskFactorsHypertension', 
'$riskFactorsSickleCellDisease', 
'$riskFactorsPreviousCaesareanSection', 
'$riskFactorsDiabetesMellitus', 
'$riskFactorsAnaemia', 
'$riskFactorsPreviousPPH', 
'$riskFactorsOther', 
'$HIVStatus', 
'$Patient_on_Antiretrovirals', 
'$DateofArrival', 
'$TimeofArrival', 
'$TimeTreatmentStarted', 
'$Referral', 
'$Referral_from_where', 
'$minutesToReachFacility', 
'$form_of_transport', 
'$LabourOccur', 
'$LabourInduced', 
'$LabourAugmented', 
'$PatographUsed', 
'$Activephase', 
'$Second_stage', 
'$Third_stage', 
'$PatientDeliver', 
'$Location_of_delivery', 
'$Delivered_by', 
'$Mode_of_Delivery', 
'$Delivery_outcome', 
'$BirthWeight', 
'$daysSinceTermination', 
'$placeOfDeath', 
'$DateofDeath', 
'$TimeofDeath', 
'$Antenatal_Evacuation', 
'$Antenatal_Laparotomy', 
'$Antenatal_Hysterectomy', 
'$Antenatal_Transfusion1', 
'$EarlyAntenatal_AntiHypertensive', 
'$Antenatal_Transfusion2', 
'$Antenatal_ExternalVersion', 
'$Antenatal_MagnisiumSulphate', 
'$Antenatal_Diazepam', 
'$Antenatal_AntiHypertensive', 
'$Antenatal_Hysterotomy2', 
'$Intrapartum_Instrumental_delivery', 
'$Intrapartum_Antibiotic_therapy', 
'$Intrapartum_Caesarian_section', 
'$Intrapartum_Hysterectomy', 
'$Intrapartum_Transfusion', 
'$Intrapartum_MagnisiumSulphate', 
'$Intrapartum_Diazepam', 
'$Postpartum_Evacuation',
'$Postpartum_Antibiotic_therapy', 
'$Postpartum_Laparotomy', 
'$Postpartum_Hysterectomy', 
'$Postpartum_Transfusion', 
'$Postpartum_Manual_removal_of_placenta', 
'$Postpartum_Anti_Hypertensive', 
'$Postpartum_Diazepam', 
'$otherInterventions_Anaesthesia_GA', 
'$otherInterventions_Epidural', 
'$otherInterventions_Spinal', 
'$otherInterventions_Local', 
'$otherInterventions_Invasive_monitoring', 
'$otherInterventions_Anti_Hypertensive', 
'$otherInterventions_ICU_ventilation', 
'$otherInterventions_Diazepam', 
'$otherInterventions_other', 
'$AutopsyPerformed', 
'$DateAutopsyPerformed', 
'$AutopsyPerformedby', 
'$OtherAutopsyPerformedBy',
'$FinalCOD', 
'$Haemorrhage',
'$UnsafeAbortion',
'$RupturedUterus',
'$ObstructedLabour',
'$Malaria',
'$HypertensiveDisease',
'$GenitalTractSepsis',
'$EctopicPregnancy',
'$SickleCellDisease',
'$PrimaryUnderlyingCODOther', 
'$Delay_in_woman_seeking_help', 
'$OtherFactorsDelay', 
'$Declined_treatment_or_admission', 
'$OtherDeclined_treatment_or_admission', 
'$Lack_of_Transport_from_home_to_reach_facility', 
'$OtherLack_of_Transport1', 
'$Lack_of_Transport_between_Health_Care_Facilities', 
'$OtherLack_of_Transport2', 
'$Health_Service_to_Health_Service_Communication_breakdown', 
'$OtherHealth_Service_Breakdown', 
'$Summary', 
'$Lesson', 
'$Recommendations', 
'$NameOfMembers', 
'$fullNameDataOficer', 
'$mobileDataOfficer', 
'$RankDataOfficer', 
'$DateofDataEntry', 
'$fullNameCommitteeChairman', 
'$mobileCommitteeChairman', 
'$RankCommitteeChairman', 
'$DateofCommitteeChairman'
)";


if (mysqli_query($conn, $sql)) {
	echo "Data inserted successfully";
} else {
	echo "Error inserting data: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
<script>
 function confirmSubmit() {
    var confirmation = confirm("Are you sure you want to submit the form?");
    return confirmation;
  }
</script>