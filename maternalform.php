<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>GAR_MATERNAL DEATHS</title>
  <meta charset="utf-10">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="formstyle.css">
</head>

<body>
  <div class="container">
    <div class="jumbotron text-center bg-success text-white">
    <div class="logo-container">
    <a href="#">
      <img src="https://dhims.chimgh.org/dhims/api/staticContent/logo_front" alt="Logo">
    </a>
  </div>
      <b><h2>GREATER ACCRA REGIONAL HEALTH DIRECTORATE</h2></b>
      <h4> MATERNAL DEATHS REPORTING FORM </h4>
      <h4><b>NOTE:</b></h4><i><h6><span style="color:rgb(0, 0, 0)";>This audit form is strictly confidential and must be submitted to the head of the facility, the district and regional office. <br>
        The form must be completed for all deaths in pregnant woman or within 42 days after termination of pregnancy, including abortions, ectopic gestations and suicide related deaths irrespective of duration or site of pregnancy</h6></i></span> 
    </div>
    <div class="row pt-3">
      <div class="col-md-12 col-sm-12 col-12 p-2 ">
        <form id = "myForm" action="connect.php" method="post">
          
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputregion"><b><i>Region</b></i><span style="color:red;">*</span></label>
              <select id="dpdlregion" class="form-control" name ="Region"  autofocus>
                <option selected>--Select region--</option>
                <option value="Greater Accra">Greater Accra</option>
                <!--<option value="Us">United district</option>
                <option value="Other">Other</option>-->
              </select>
            </div>
            <div class="form-group col-md-2 other">
              <label class="divOtherregion ">Other region</label>
              <input type="text" class="form-control divOtherregion" name = "otherRegion"id="dpdlOtherregion"
                placeholder="Other region">
            </div>
            <div class="form-group col-md-3">
              <label for="inputdistrict"><b><i>district</b></i><span style="color:red;">*</span></label>
              <select id="dpdldistrict" class="form-control" name ="district" >
                <option selected>--choose district--</option>
              </select>
            </div>
            <div class="form-group col-md-2 other">
              <label class="divOtherdistrict ">Other district</label>
              <input type="text" class="form-control divOtherdistrict " id="dpdlOtherdistrict" name = "otherDistrict" placeholder="Other district">
            </div>
            <div class="form-group col-md-3">
              <label for="inputdistrict"><b><i>Facility</i></b><span style="color:red;">*</span></label>
              <select id="dpdlfacility" class="form-control" name ="Facility" >
                <option selected>--Choose facility--</option>
              </select>
            </div>
            <div class="form-group col-md-2 other">
              <label class="divOtherfacility ">Other facility</label>
              <input type="text" class="form-control divOtherfacility " id="dpdlOtherfacility" name = "otherFacility" placeholder="Other facility">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="nameOfDeceased">Name of Deceased</label>
                <input type="text" class="form-control" id="nameOfDeceased" placeholder="John Smith" name ="nameOfDeceased" >
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="dob">Date of Birth<span style="color:red;">*</span></label>
                <input type="date" class="form-control" id="dob" placeholder="DOB"  name ="dob" >
              </div>
              
             
            
            </div>
            <div class="form-group col-md-10">
              <label for="inputeducation"><b><i>Educational Status</b></i><span style="color:red;">*</span></label>
              <select id="dpdleducation" class="form-control" name ="education" >
                <option selected>--Select Education</option>
                <option value="Dont know">don't know</option>
                <option value="None">None</option>
                <option value="Primary">Primary</option>
                <option value="Middle/JHS">Middle/JHS</option>
                <option value="Secondary/SHS">Secondary/SHS</option>
                <option value="Tertiary">Tertiary</option>
              </select>
            </div>
          
            <div class="form-group col-md-10">
              <label for="inputoccupation"><b><i>Occupation</b></i><span style="color:red;">*</span></label>
              <select id="dpdloccupation" class="form-control" name ="occupation" >
                <option selected>--choose occupation--</option>
                <option value="Unemployed">Unemployed</option>
                <option value="House_wife">House wife</option>
                <option value="Farming">Farming</option>
                <option value="Trading">Trading</option>
                <option value="Artisan">Artisan(hairdresser, seamstress etc)</option>
                <option value="Civil_servant">Civil/Public servant</option>
              </select>
            </div>
            <!--<div class="form-group col-md-2 other">
              
            </div>-->
        <div>
          
          </div>
          <div class="form-group col-md-10">
            <label for="inputMarital_Status"><b><i>Marital Status</b></i><span style="color:red;">*</span></label>
            <select id="dpdlinputMarital_Status" class="form-control" name ="maritalStatus" >
              <option selected>--choose Marital Status--</option>
              <option value="NeverMarried">Never Married</option>
              <option value="Married">Married</option>
              <option value="LivingTogether">Living Together</option>
              <option value="Divorced">Divorced/Separated</option>
              <option value="Widowed">Widowed</option>
            </select>
        </div>

        <div class="form-group col-md-10">
          <label for="inputReligion"><b><i>Religion </b></i><span style="color:red;">*</span></label>
          <select id="dpdlReligion" class="form-control" name ="Religion" >
            <option selected>--choose Religion --</option>
            <option value="Christian">Christian</option>
            <option value="Muslem">Muslem</option>
            <option value="Traditionalist">Traditionalist/ Spiritualist</option>
            <option value="other">Other</option>
            
          </select>
        </div>
          <div class="form-group col-md-10">
            <label for="inputEthnifacility"><b><i>Ethnifacility</b></i><span style="color:red;">*</span></label>
            <select id="dpdlEthnifacility" class="form-control" name ="Ethnifacility" >
              <option selected>--choose Religion --</option>
              <option value="Akan">Akan</option>
              <option value="Ga/Dangbe">Ga/Dangbe</option>
              <option value="Ewe">Ewe</option>
              <option value="Guan">Guan</option>
              <option value="Mole">Mole/Dagbani</option>
              <option value="Grussi">Grussi</option>
              <option value="Gruma">Gruma</option>
              <option value="Other">Other (specify)</option>
            </select>
          </div>
          <div>
          <h1 class="center">OBSTETRIC INFORMATION</h1>
        </div>
        <div class="form-group col-md-10">
          <label for="Gravidity">Gravidity<span style="color:red;">*</span></label>
          <input type="text" class="form-control" id="Gravidity" placeholder="Gravidity" name ="Gravidity" />
        </div>
        <div class="form-group col-md-10">
          <label for="Parity">Parity </label>
          <input type="text" class="form-control" id="Parity" placeholder="Parity(include current delivery)" name ="Parity" />
        </div>
        <div class="form-group col-md-10">
          <label for="inputANC"><b><i>Antenatal care (ANC) during this pregnancy?</b></i><span style="color:red;">*</span></label>
          <select id="dpdlANC" class="form-control" name ="ANC" >
            <option selected>--choose ANC --</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="Dont_know">I don't know</option>
          </select>
        </div>
        <div class="form-group col-md-10">
          <label for="number_of_anc">Total Number of ANC<span style="color:red;">*</span></label>
          <input type="number" class="form-control" id="number_of anc" placeholder="Total Number of ANC" name ="numberOfAnc" />
        </div>

        <div class="form-group col-md-10">
          <label for="inputplace_of_anc"><b><i>Place of ANC (select all that apply)</b></i><span style="color:red;">*</span></label>
          <select id="dpdlplace_of_anc" style="background-color:rgb(255, 255, 255);"class="form-control" name ="placeOfAnc"  multiple>
            <option value="TeachingHospital">Teaching Hospital</option>
            <option value="RegionalHospital">Regional Hospital</option>
            <option value="districtHospital">district Hospital</option>
            <option value="Polyclinic">Polyclinic</option>
            <option value="HealthCentre">Health Centre</option>
            <option value="Clinic">Clinic</option>
            <option value="CHPSCompound">CHPS Compound</option>
            <option value="PrivateMaternityHome">Private Maternity Home</option>
            <option value="Other">Other (specify)</option>
          </select>
        </div>
        <div class="form-group col-md-10">
          <label for="gestationalAge">Gestational Age at booking (in weeks)</label>
          <input type="number" class="form-control" id="gestationalAge" placeholder="(in weeks)" name ="gestationalAge" />
        </div>
        <div class="form-group col-md-10"style="background-color:white;">
          <label><b><i>Identified ANC risk factor(s) [select all that apply]</b></i><span style="color:red;">*</span></label><br>
          <div class="form-check" name = "Identified_ANC_risk_factor">
            <input class="form-check-input" type="checkbox" name="riskFactorsnone" id="None" value="None">
            <label class="form-check-label" for="None">None</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="riskFactorsHypertension" id="Hypertension" value="Hypertension">
            <label class="form-check-label" for="Hypertension">Hypertension</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="riskFactorsSickleCellDisease" id="Sickle Cell Disease" value="Sickle Cell Disease">
            <label class="form-check-label" for="Sickle Cell Disease">Sickle Cell Disease</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="riskFactorsPreviousCaesareanSection" id="Previous Caesarean Section" value="Previous Caesarean Section">
            <label class="form-check-label" for="Previous Caesarean Section">Previous Caesarean Section</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="riskFactorsDiabetesMellitus" id="Diabetes Mellitus" value="Diabetes Mellitus">
            <label class="form-check-label" for="Diabetes Mellitus">Diabetes Mellitus</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="riskFactorsAnaemia" id="Anaemia (HB < 11 g/dl; most current)" value="Anaemia (HB < 11 g/dl; most current)">
            <label class="form-check-label" for="Anaemia (HB < 11 g/dl; most current)">Anaemia (HB < 11 g/dl; most current)</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="riskFactorsPreviousPPH" id="Previous PPH" value="Previous PPH">
            <label class="form-check-label" for="Previous PPH">Previous PPH</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="riskFactorsOther" id="other" value="Other">
            <label class="form-check-label" for="other">Other (specify)</label>
          </div>
        </div>
        <div class="form-group col-md-10">
          <label for="inputHIVStatus"><b><i>HIV Status</b></i><span style="color:red;">*</span></label>
          <select id="dpdlHIVStatus" class="form-control" name ="HIVStatus" >
            <option selected>--choose HIV Status --</option>
            <option value="Reactive">Reactive</option>
            <option value="Non_reactive">Non-reactive</option>
            <option value="Dont_know">Dont Know</option>
          </select>
        </div>
        <div class="form-group col-md-10">
          <label for="inputPatient_on_Antiretrovirals"><b><i>Patient on Antiretrovirals?</b></i><span style="color:red;">*</span></label>
          <select id="dpdlPatient_on_Antiretrovirals" class="form-control" name ="Patient_on_Antiretrovirals" >
            <option selected>--choose HIV Status --</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="Dont_know">Dont Know</option>
          </select>
        </div>
        <div class="form-group col-md-10">
          <label for="DateofArrival">Date of Arrival<span style="color:red;">*</span></label>
          <input type="date" class="form-control" id="DateofArrival" placeholder="Date of Arrival" name ="DateofArrival" />
        </div>
        <div class="form-group col-md-10">
          <label for="TimeofArrival">Time of arrival (24hrs)<span style="color:red;">*</span></label>
          <input type="time" class="form-control" id="TimeofArrival" placeholder="(24hrs time format)" name ="TimeofArrival" />
        </div>
        <div class="form-group col-md-10">
          <label for="TimeTreatmentStarted">Time treatment started (24hr)<span style="color:red;">*</span></label>
          <input type="time" class="form-control" id="TimeTreatmentStarted" placeholder="(24hrs time format)" name ="TimeTreatmentStarted" />
        </div><br>
        <div>
          <h1 class="center">ADMISSION/REFERRAL INFORMATION</h1>
        </div>
        <div class="form-group col-md-10">
          <label for="Referral"><b><i>Referral from another health facility?</b></i><span style="color:red;">*</span></label>
          <select id="Referral" class="form-control" placeholder="Referral" name ="Referral" >
            <option selected>--choose Referral --</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="Dont_know">Dont Know</option>
          </select>
        </div>
        <div class="form-group col-md-10">
          <label for="Referral_from_where">Referral from where?<span style="color:red;">*</span></label>
          <input type="text" class="form-control" id="Referral_from_where" placeholder="name of referral point" name ="Referral_from_where" />
        </div>
        <div class="form-group col-md-10">
          <label for="minutesToReachFacility">How long (in minutes) did it take patient to reach this facility from referral centre or home?<span style="color:red;">*</span></label>
          <input type="number" class="form-control" id="minutesToReachFacility" placeholder="(number of minutes)" name ="minutesToReachFacility" />
        </div>
        <div class="form-group col-md-10">
          <label for="form_of_transport"><b><i>What kind of transport did she arrive with?</b></i><span style="color:red;">*</span></label>
          <select id="form_of_transport" class="form-control" placeholder="eg:Ambulance" name ="form_of_transport" >
            <option selected>--choose kind of transport --</option>
            <option value="Ambulance">Ambulance</option>
            <option value="Hospital_vehicle">Hospital vehicle (not ambulance)</option>
            <option value="Public_Transport">Public Transport</option>
            <option value="Private_Transport">Private Transport</option>
            <option value="Other_(specify)">Other (specify)</option>
          </select>
        </div>
        <div>
          <h1 class="center">ADMISSION/REFERRAL INFORMATION</h1>
        </div>
        <div class="form-group col-md-10">
          <label for="LabourOccur"><b><i>Did labour occur?</b></i><span style="color:red;">*</span></label>
          <select id="LabourOccur" class="form-control" placeholder="LabourOccur" name ="LabourOccur" >
            <option selected>--choose labour Occur --</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="Dont_know">Dont Know</option>
          </select>
        </div>
        <div class="form-group col-md-10">
          <label for="LabourInduced"><b><i>Was labour induced?</b></i><span style="color:red;">*</span></label>
          <select id="LabourInduced" class="form-control" placeholder="LabourInduced" name ="LabourInduced" >
            <option selected>--choose labour induced --</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="Dont_know">Dont Know</option>
          </select>
        </div>
        <div class="form-group col-md-10">
          <label for="LabourAugmented"><b><i>Was labour augmented?</b></i><span style="color:red;">*</span></label>
          <select id="LabourAugmented" class="form-control" placeholder="eg.Yes" name ="LabourAugmented" >
            <option selected>--choose labour augmented --</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="Dont_know">Dont Know</option>
          </select>
        </div>
        <div class="form-group col-md-10">
          <label for="PatographUsed"><b><i>Was partograph used?</b></i><span style="color:red;">*</span></label>
          <select id="PatographUsed" class="form-control" placeholder="PatographUsed" name ="PatographUsed" >
            <option selected>--choose Patograph used --</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="Dont_know">Dont Know</option>
          </select>
        </div>
        <div>
          <h2 class="center">Duration of Labour</h2>
        </div>
        <div class="form-group col-md-10">
          <label for="Activephase">Active phase <span style="color:red;">*</span></label>
          <input type="number" class="form-control" id="Activephase" placeholder="number of (Hours)" name ="Activephase" />
        </div>
        <div class="form-group col-md-10">
          <label for="Second_stage">Second Stage  <span style="color:red;">*</span></label>
          <input type="number" class="form-control" id="Second_stage" placeholder="number of (mins)" name ="Second_stage" />
        </div>
        <div class="form-group col-md-10">
          <label for="Third_stage">Third Stage<span style="color:red;">*</span></label>
          <input type="number" class="form-control" id="Third_stage" placeholder="number of (mins)" name ="Third_stage" />
        </div>
        <div class="form-group col-md-10">
          <label for="PatientDeliver"><b><i>Did patient deliver?</b></i><span style="color:red;">*</span></label>
          <select id="PatientDeliver" class="form-control" placeholder="patient deliver" name ="PatientDeliver" >
            <option selected>--choose patient deliver --</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="Dont_know">Dont Know</option>
          </select>
        </div>
        <div class="form-group col-md-10">
          <label for="inputLocation_of_delivery"><b><i>Location of delivery</b></i><span style="color:red;">*</span></label>
          <select id="dpdlLocation_of_delivery" class="form-control" placeholder="eg:Ambulance" name ="Location_of_delivery" >
            <option selected>--choose kind of transport --</option>
            <option value="Teaching Hospital">Teaching Hospital</option>
            <option value="district Hospital">district Hospital</option>
            <option value="Health Centre">Health Centre</option>
            <option value="Clinic">Clinic</option>
            <option value="CHPS Compound">CHPS Compound</option>
            <option value="Private Maternity Home">Private Maternity Home</option>
            <option value="Home">Home</option>
            <option value="Other_(specify)">Other (specify)</option>
          </select>
        </div>
        <div class="form-group col-md-10">
          <label for="inputDelivered_by"><b><i>Delivered by</b></i><span style="color:red;">*</span></label>
          <select id="dpdlDelivered_by" class="form-control" placeholder="eg:Ambulance" name ="Delivered_by" >
            <option selected>--choose delivered by --</option>
            <option value="Doctor">Doctor</option>
            <option value="Midwife">Midwife</option>
            <option value="TBA">TBA</option>
            <option value="Other_(specify)">Other (specify)</option>
          </select>
        </div>
        <div class="form-group col-md-10">
          <label for="inputMode_of_Delivery"><b><i>Mode of Delivery</b></i><span style="color:red;">*</span></label>
          <select id="dpdlMode_of_Delivery" class="form-control" placeholder="eg:Ambulance" name ="Mode_of_Delivery" >
            <option selected>--choose mode of delivery --</option>
            <option value="Spontaneous Vaginal Delivery">Spontaneous Vaginal Delivery</option>
            <option value="Vacuum/forceps">Vacuum/forceps</option>
            <option value="Caesarian section">Caesarian section</option>
          </select>
        </div>
        <div class="form-group col-md-10">
          <label for="Delivery_outcome"><b><i>Delivery Outcome </b></i><span style="color:red;">*</span></label>
          <select id="Delivery_outcome" class="form-control" placeholder="eg:Ambulance" name ="Delivery_outcome" >
            <option selected>--choose Delivery outcome --</option>
            <option value="Live Birth">Live Birth (irrespective of gestation)</option>
            <option value="Fresh Stillbirth">Fresh Stillbirth</option>
            <option value="Macerated Stillbirth">Macerated Stillbirth</option>
            <option value="Early Neonatal Death">Early Neonatal Death (within 24 hours)</option>
          </select>
        </div>
        <div class="form-group col-md-10">
          <label for="BirthWeight">Birth weight<span style="color:red;">*</span></label>
          <input type="number" class="form-control" id="BirthWeight" placeholder="2.5" step="0.01" name ="BirthWeight" />
        </div>
        <div class="form-group col-md-10">
          <label for="daysSinceTermination">Days since termination (delivery/abortion/ectopic)<span style="color:red;">*</span></label>
          <input type="number" class="form-control" id="daysSinceTermination" placeholder="(999=Died with pregnancy)"  name ="daysSinceTermination" />
        </div>
        <div class="form-group col-md-10">
          <label for="inputplaceOfDeath"><b><i>Place of Death  </b></i><span style="color:red;">*</span></label>
          <select id="dpdlplaceOfDeath" class="form-control" placeholder="eg:Ambulance" name ="placeOfDeath" >
            <option selected>--choose place of death --</option>
            <option value="Teaching Hospital">Teaching Hospital</option>
            <option value="Regional Hospital">Regional Hospital</option>
            <option value="district Hospital">district Hospital</option>
            <option value="Polyclinic">Polyclinic</option>
            <option value="Health Centre">Health Centre</option>
            <option value="Clinic">Clinic</option>
            <option value="CHPS Compound">CHPS Compound</option>
            <option value="Private Maternity Home">Private Maternity Home</option>
            <option value="Other">Other (specify)</option>
          </select>
        </div>
        <div class="form-group col-md-10">
          <label for="DateofDeath">Date of death<span style="color:red;">*</span></label>
          <input type="date" class="form-control" id="DateofDeath" placeholder="02/02/2022" name ="DateofDeath" />
        </div>
        <div class="form-group col-md-10">
          <label for="TimeofDeath">Time of Death<span style="color:red;">*</span></label>
          <input type="time" class="form-control" id="TimeofDeath" placeholder="(24hrs time format)" name ="TimeofDeath" />
        </div>
        <div>
          <h1 class="center">INTERVENTIONS (Tick appropriate boxes)</h1>
        </div>
        <div class="form-group col-md-10"style="background-color:white;">
          <label><b><i>Early Pregnancy</b></i><span style="color:red;">*</span></label><br>
          <div class="form-check" name = "EarlyPregnancy">
            <input class="form-check-input" type="checkbox" name="Antenatal_Evacuation" id="Evacuation" value="Evacuation">
            <label class="form-check-label" for="Evacuation">Evacuation</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Antenatal_AntibioticTherapy" id="AntibioticTherapy" value="AntibioticTherapy">
            <label class="form-check-label" for="AntibioticTherapy">Antibiotic Therapy</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Antenatal_Laparotomy" id="Laparotomy" value="Laparotomy">
            <label class="form-check-label" for="Laparotomy">Laparotomy</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Antenatal_Hysterectomy" id="Hysterectomy" value="Hysterectomy">
            <label class="form-check-label" for="Hysterectomy">Hysterectomy </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Antenatal_Transfusion1" id="Transfusion " value="Transfusion">
            <label class="form-check-label" for="Transfusion ">Transfusion</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="EarlyAntenatal_AntiHypertensive" id="Anti Hypertensive" value="Anti Hypertensive">
            <label class="form-check-label" for="Anti Hypertensive">Anti Hypertensive</label>
          </div>
        </div>
          <!--antenatal checlist-->
          <div class="form-group col-md-10"style="background-color:white;">
            <label><b><i>Antenatal</b></i><span style="color:red;">*</span></label><br>
            <div class="form-check" name = "Antenatal">
              <input class="form-check-input" type="checkbox" name="Antenatal_Transfusion2" id="Transfusion" value="Transfusion">
              <label class="form-check-label" for="Transfusion">Transfusion</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="Antenatal_ExternalVersion" id="External version" value="External version">
              <label class="form-check-label" for="External version">External version</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="Antenatal_MagnisiumSulphate" id="MagnisiumSulphate" value="MagnisiumSulphate">
              <label class="form-check-label" for="MagnisiumSulphate">MagnisiumSulphate</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="Antenatal_Diazepam" id="Diazepam" value="Diazepam">
              <label class="form-check-label" for="Diazepam">Diazepam</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="Antenatal_AntiHypertensive" id="Anti Hypertensive" value="Anti Hypertensive">
              <label class="form-check-label" for="Anti Hypertensive">Anti Hypertensive</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="Antenatal_Hysterotomy2" id="Hysterotomy" value="Hysterotomy">
              <label class="form-check-label" for="Hysterotomy">Hysterotomy</label>
            </div>
            
            <!--Intrapartum checklist-->

        </div>
        <div class="form-group col-md-10"style="background-color:white;">
          <label><b><i>Intrapartum</b></i><span style="color:red;">*</span></label><br>
          <div class="form-check" name = "Intrapartum">
            <input class="form-check-input" type="checkbox" name="Intrapartum_Instrumental_delivery" id="Instrumental delivery" value="Instrumental delivery">
            <label class="form-check-label" for="Instrumental delivery">Instrumental delivery</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Intrapartum_Antibiotic_therapy" id="Antibiotic therapy" value="Antibiotic therapy">
            <label class="form-check-label" for="Antibiotic therapy">Antibiotic therapy</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Intrapartum_Caesarian_section" id="Caesarian section" value="Caesarian section">
            <label class="form-check-label" for="Caesarian section">Caesarian section</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Intrapartum_Hysterectomy" id="Hysterectomy" value="Hysterectomy">
            <label class="form-check-label" for="Hysterectomy">Hysterectomy</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Intrapartum_Transfusion" id="Transfusion" value="Transfusion">
            <label class="form-check-label" for="Transfusion">Transfusion</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Intrapartum_MagnisiumSulphate" id="MagnisiumSulphate" value="MagnisiumSulphate">
            <label class="form-check-label" for="MagnisiumSulphate">MagnisiumSulphate</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Intrapartum_Diazepam" id="Diazepam" value="Diazepam">
            <label class="form-check-label" for="Diazepam">Diazepam</label>
          </div>
        </div> 
        <!--Postpartum checklist-->
        <div class="form-group col-md-10"style="background-color:white;">
          <label><b><i>Postpartum</b></i><span style="color:red;">*</span></label><br>
          <div class="form-check" name = "Postpartum">
            <input class="form-check-input" type="checkbox" name="Postpartum_Evacuation" id="Evacuation" value="Evacuation">
            <label class="form-check-label" for="Evacuation">Evacuation</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Postpartum_Antibiotic_therapy" id="Antibiotic therapy" value="Antibiotic therapy">
            <label class="form-check-label" for="Antibiotic therapy">Antibiotic therapy</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Postpartum_Laparotomy" id="Laparotomy" value="Laparotomy">
            <label class="form-check-label" for="Laparotomy">Laparotomy</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Postpartum_Hysterectomy" id="Hysterectomy" value="Hysterectomy">
            <label class="form-check-label" for="Hysterectomy">Hysterectomy</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Postpartum_Transfusion" id="Transfusion" value="Transfusion">
            <label class="form-check-label" for="Transfusion">Transfusion</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Postpartum_Manual_removal_of_placenta" id="Manual removal of placenta" value="Manual removal of placenta">
            <label class="form-check-label" for="Manual removal of placenta">Manual removal of placenta</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Postpartum_Anti_Hypertensive" id="Anti Hypertensive" value="Anti Hypertensive">
            <label class="form-check-label" for="Anti Hypertensive">Anti Hypertensive</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Postpartum_Diazepam" id="Diazepam" value="Diazepam">
            <label class="form-check-label" for="Diazepam">Diazepam</label>
          </div>
        </div> 
        <!--other interventios checklist-->
        <div class="form-group col-md-10"style="background-color:white;">
          <label><b><i>Others</b></i><span style="color:red;">*</span></label><br>
          <div class="form-check" name = "otherInterventions">
            <input class="form-check-input" type="checkbox" name="otherInterventions_Anaesthesia_GA" id="Anaesthesia-GA" value="Anaesthesia-GA">
            <label class="form-check-label" for="Anaesthesia-GA">Anaesthesia-GA</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="otherInterventions_Epidural" id="Epidural" value="Epidural">
            <label class="form-check-label" for="Epidural">Epidural</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="otherInterventions_Spinal" id="Spinal" value="Spinal">
            <label class="form-check-label" for="Spinal">Spinal</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="otherInterventions_Local" id="Local" value="Local">
            <label class="form-check-label" for="otherLocal">Local</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="otherInterventions_Invasive_monitoring" id="Invasive monitoring" value="Invasive monitoring">
            <label class="form-check-label" for="Invasive monitoring">Invasive monitoring</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="otherInterventions_Anti_Hypertensive" id="Anti Hypertensive" value="Anti Hypertensive">
            <label class="form-check-label" for="Anti Hypertensive">Anti Hypertensive</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="otherInterventions_ICU_ventilation" id="ICU ventilation" value="ICU ventilation">
            <label class="form-check-label" for="ICU ventilation">ICU ventilation</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="otherInterventions_Diazepam" id="Diazepam" value="Diazepam">
            <label class="form-check-label" for="Diazepam">Diazepam</label>
          </div>
          <div class="form-group col-md-5">
            <label for="Other">Other (specify)</label>
            <input type="text" class="form-control" id="Other" name = "otherInterventions_other" placeholder="other interventions" autocomplete="on" autofocus>
          </div>
        </div> 
        <!-- <h1 class="center">INTERVENTIONS (Tick appropriate boxes)</h1>-->
        <h1 class="center">MORTALITY DETAILS</h1>
        <div class="form-group col-md-10">
          <label for="AutopsyPerformed"><b><i>Autopsy performed</b></i><span style="color:red;">*</span></label>
          <select id="AutopsyPerformed" class="form-control" placeholder="AutopsyPerformed" name ="AutopsyPerformed" >
            <option selected>--choose Autopsy Performed --</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
        </div>
        <div class="form-group col-md-10">
          <label for="DateAutopsyPerformed">Date Autopsy Performed<span style="color:red;">*</span></label>
          <input type="date" class="form-control" id="DateAutopsyPerformed" placeholder="Date Autopsy Performed" name ="DateAutopsyPerformed" />
        </div>
        <div class="form-group col-md-10">
          <label for="PlaceAutopsyPerformed">Place Autopsy Performed<span style="color:red;">*</span></label>
          <input type="text" class="form-control" id="PlaceAutopsyPerformed" placeholder="Place Autopsy Performed" name ="PlaceAutopsyPerformed" />
        </div>
        <div class="form-group col-md-10">
          <label for="inputAutopsyPerformedby"><b><i>Autopsy Performed by</b></i><span style="color:red;">*</span></label>
          <select id="dpdlAutopsyPerformedby" class="form-control" placeholder="AutopsyPerformedby" name ="AutopsyPerformedby" >
            <option selected>--choose Autopsy Performed by --</option>
            <option value="Pathologist">Pathologist</option>
            <option value="Medical Officer">Medical Officer</option>
          </select>
          <div class="form-group col-md-5">
            <label for="OtherAutopsyPerformedBy">Other (specify)</label>
            <input type="text" class="form-control" id="OtherAutopsyPerformedBy" name = "OtherAutopsyPerformedBy" placeholder="other Autopsy Performed by" autocomplete="on" >
          </div>
        </div>
        
        <!--CAUSE OF DEATH-->
        <h1 class="center">CAUSE OF DEATH</h1>
        <div class="form-group col-md-10">
          <label for="FinalCOD">Final (Pathological) Cause of Death</label>
          <input type="text" class="form-control" id="FinalCOD" name = "FinalCOD" placeholder="final COD" autocomplete="on" >
        </div>
        <!--PRIMARY UNDERLYING OBSTETRIC COD-->
        <div class="form-group col-md-10"style="background-color:white;">
          <label><b><i>Primary (Underlying) Obstetric Cause of Death</b></i><span style="color:red;">*</span></label><br>
          <div class="form-check" name = "PrimaryUnderlyingCOD">
            <input class="form-check-input" type="checkbox" name="Haemorrhage" id="Haemorrhage" value="Haemorrhage">
            <label class="form-check-label" for="Haemorrhage">Haemorrhage</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="UnsafeAbortion" id="Unsafe abortion" value="Unsafe abortion">
            <label class="form-check-label" for="Unsafe abortion">Unsafe abortion</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="RupturedUterus" id="Ruptured Uterus" value="Ruptured Uterus">
            <label class="form-check-label" for="Ruptured Uterus">Ruptured Uterus</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="ObstructedLabour" id="Obstructed Labour" value="Obstructed Labour">
            <label class="form-check-label" for="Obstructed Labour">Obstructed Labour</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Malaria" id="Malaria" value="Malaria">
            <label class="form-check-label" for="Malaria">Malaria</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="HypertensiveDisease" id="Hypertensive disease" value="Hypertensive disease">
            <label class="form-check-label" for="Hypertensive disease">Hypertensive disease</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="GenitalTractSepsis" id="Genital Tract Sepsis" value="Genital Tract Sepsis">
            <label class="form-check-label" for="Genital Tract Sepsis">Genital Tract Sepsis</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="EctopicPregnancy" id="Ectopic Pregnancy" value="Ectopic Pregnancy">
            <label class="form-check-label" for="Ectopic Pregnancy">Ectopic Pregnancy</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="SickleCellDisease" id="Sickle Cell disease" value="Sickle Cell disease">
            <label class="form-check-label" for="Sickle Cell disease">Sickle Cell disease</label>
          </div>
          <div class="form-group col-md-5">
            <label for="Other">Other (specify)</label>
            <input type="text" class="form-control" id="Other" name = "PrimaryUnderlyingCODOther" placeholder="(eg anaesthesia)" autocomplete="on" autofocus>
          </div>
        </div> 
        <h4 class="center">IN YOUR OPINION DID ANY OF THE FOLLOWING FACTORS CONTRIBUTE TO THE DEATH OF THIS PATIENT</h4>
        <h3 class="center">Personal/Family /Community Factors</h3>
        <div class="form-group col-md-10">
          <label for="inputDelay_in_woman_seeking_help"><b><i>Delay in woman seeking help</b></i><span style="color:red;">*</span></label>
          <select id="dpdlDelay_in_woman_seeking_help" class="form-control" placeholder="patient deliver" name ="Delay_in_woman_seeking_help" >
            <option selected>--choose Delay_in_woman_seeking_help --</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="Dont_know">Dont Know</option>
          </select>
          <div class="form-group col-md-5">
            <label for="OtherFactorsDelay">Other (specify)</label>
            <input type="text" class="form-control" id="OtherFactorsDelay" name = "OtherFactorsDelay" placeholder="DO NOT LEAVE BLANK" autocomplete="on" >
          </div>
        </div>
        
        <div class="form-group col-md-10">
          <label for="inputDeclined_treatment_or_admission"><b><i>Declined treatment or admission</b></i><span style="color:red;">*</span></label>
          <select id="dpdlDeclined_treatment_or_admission" class="form-control" placeholder="patient deliver" name ="Declined_treatment_or_admission" >
            <option selected>--choose Declined_treatment_or_admission --</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="Dont_know">Dont Know</option>
          </select>
          <div class="form-group col-md-5">
            <label for="OtherDeclined_treatment_or_admission">Other (specify)</label>
            <input type="text" class="form-control" id="OtherDeclined_treatment_or_admission" name = "OtherDeclined_treatment_or_admission" placeholder="DO NOT LEAVE BLANK" autocomplete="on" >
          </div>
        </div>
        
        <!--transport-->
        <h3 class="center">Transport and Communication Systems</h3>
        <div class="form-group col-md-10">
          <label for="inputLack_of_Transport_from_home_to_reach_facility"><b><i>Lack of Transport from home to reach facility</b></i><span style="color:red;">*</span></label>
          <select id="dpdlLack_of_Transport_from_home_to_reach_facility" class="form-control" placeholder="patient deliver" name ="Lack_of_Transport_from_home_to_reach_facility" >
            <option selected>--Lack_of_Transport_from_home_to_reach_facility--</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="Dont_know">Dont Know</option>
          </select>
          <div class="form-group col-md-5">
            <label for="OtherLack_of_Transport">Other (specify)</label>
            <input type="text" class="form-control" id="OtherLack_of_Transport" name = "OtherLack_of_Transport1" placeholder="DO NOT LEAVE BLANK" autocomplete="on" >
          </div>
        </div>
        <div class="form-group col-md-10">
          <label for="inputLack_of_Transport_between_Health_Care_Facilities"><b><i>Lack of Transport between Health Care Facilities</b></i><span style="color:red;">*</span></label>
          <select id="dpdlLack_of_Transport_between_Health_Care_Facilities" class="form-control" placeholder="patient deliver" name ="Lack_of_Transport_between_Health_Care_Facilities" >
            <option selected>--Lack_of_Transport_between_Health_Care_Facilities--</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="Dont_know">Dont Know</option>
          </select>
          <div class="form-group col-md-5">
            <label for="OtherLack_of_Transport">Other (specify)</label>
            <input type="text" class="form-control" id="OtherLack_of_Transport" name = "OtherLack_of_Transport2" placeholder="DO NOT LEAVE BLANK" autocomplete="on" >
          </div>
        </div>
        <div class="form-group col-md-10">
          <label for="inputHealth_Service_to_Health_Service_Communication_breakdown"><b><i>Health Service to Health Service Communication breakdown</b></i><span style="color:red;">*</span></label>
          <select id="dpdlHealth_Service_to_Health_Service_Communication_breakdown" class="form-control" placeholder="patient deliver" name ="Health_Service_to_Health_Service_Communication_breakdown" >
            <option selected>--Health_Service_to_Health_Service_Communication_breakdown--</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="Dont_know">Dont Know</option>
          </select>
          <div class="form-group col-md-5">
            <label for="OtherHealth_Service_Breakdown">Other (specify)</label>
            <input type="text" class="form-control" id="OtherHealth_Service_Breakdown" name = "OtherHealth_Service_Breakdown" placeholder="DO NOT LEAVE BLANK" autocomplete="on" >
          </div>
        </div>
        <div class="form-group col-md-10">
          <label for="Summary">Summary of potential avoidable factors, missed opportunities and substandard care</label>
          <textarea id="Summary" class="form-control" name="Summary" rows="4" cols="50" placeholder="(Please note that substandard care includes inadequate monitoring as well as substandard monitoring)" autocomplete="on"></textarea>
        </div>
        <div class="form-group col-md-10">
          <label for="Lesson">What has your facility learnt from this case and what changes have been instituted?</label>
          <textarea id="Lesson" class="form-control" name="Lesson" rows="4" cols="50" placeholder="district lessons" autocomplete="on"></textarea>
        </div>
        <div class="form-group col-md-10">
          <label for="Recommendations">Recommendations and Further Actions to be Taken</label>
          <textarea id="Recommendations" class="form-control" name="Recommendations" rows="4" cols="50" placeholder="Recommendations" autocomplete="on"></textarea>
        </div>
        <h3 class="center">DETAILS OF REPORTERS</h3>
        <br>
      </br>
          <div class="col-md-12 col-sm-12 col-12 p-2 ">
            <form>
              <div class="form-row">
                <div class="form-group col-md-10">
                  <label for="NameOfMembers">Names Designations of Audit Team Members</label>
                  <textarea id="NameOfMembers" class="form-control" name="NameOfMembers" rows="4" cols="50" placeholder="Name Of Members" autocomplete="on"></textarea>
                </div>
                </div>
                <!--data entry officer details-->
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="fullNameDataOficer">Name of data entry officer</label>
                  <input type="text" class="form-control" id="fullNameDataOficer" name = "fullNameDataOficer" placeholder="eg.John Smith" autocomplete="on" autofocus>
                </div>
                <!--<div class="form-group col-md-3 offset-md-1">-->
                  <div class="form-group col-md-3">
                  <label for="mobileDataOfficer">Mobile</label>
                  <input type="tel" class="form-control" id="mobile" placeholder="0245887799" maxlength="10" pattern="\d{10}" title="Please enter a correct phone number" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="RankDataOfficer">Rank</label>
                  <input type="text" class="form-control" id="RankDataOfficer" name = "RankDataOfficer" placeholder="eg.Health Information Officer" autocomplete="on" autofocus >
                </div>
                <div class="form-group col-md-3">
                  <label for="DateofDataEntry">Date of data entry<span style="color:red;">*</span></label>
                  <input type="date" class="form-control" id="DateofDataEntry" placeholder="eg.05/18/1999" name ="DateofDataEntry" />
                </div>
                </div>
                <!--committee chairman info-->
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="fullNameCommitteeChairman">Name of Committee Chairman</label>
                    <input type="text" class="form-control" id="fullNameCommitteeChairman" name = "fullNameCommitteeChairman" placeholder="eg.John Smith" autocomplete="on" autofocus>
                  </div>
                  <!--<div class="form-group col-md-3 offset-md-1">-->
                    <div class="form-group col-md-3">
                    <label for="mobileCommitteeChairman">Mobile</label>
                    <input type="tel" class="form-control" id="mobileCommitteeChairman" placeholder="0558749735"name = "mobileCommitteeChairman" maxlength="10" pattern="\d{10}" title="Please enter a correct phone number" />
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="RankCommitteeChairman">Rank</label>
                    <input type="text" class="form-control" id="RankCommitteeChairman" name = "RankCommitteeChairman" placeholder="eg.Med Sup" autocomplete="on" autofocus >
                  </div>
                  <div class="form-group col-md-3">
                    <label for="DateofCommitteeChairman">Date<span style="color:red;">*</span></label>
                    <input type="date" class="form-control" id="DateofCommitteeChairman" placeholder="eg.05/18/1999" name ="DateofCommitteeChairman" />
                  </div>

        </div>
      <div class="btn">
          <button type="submit" class="btn btn-primary" onclick="return confirmSubmit();" >Submit</button> 
       
          <button type="submit" class="btn btn-secondary">Cancel</button>
          
          <!--<button type="submit"  href="logout.php">Logout</button>-->
          <!--<a href="logout.php">Logout</a>-->
          <a href="logout.php" id = "logout-button" class="logout-btn" onclick="return confirmlogout();">Logout</a>

    
      </div>
        </form>
      </div>
      
    </div>
    
  </div>
  <div class="btn">
  <a button type="submit" class="btn btn-primary"  href="reportsummary.php">View reports</a></button>
    </div>
<script>
  var districtList = [
      { region: 'Greater Accra', district: 'Ablekuma West' },
      { region: 'Greater Accra', district: 'Ablekuma North' },
      { region: 'Greater Accra', district: 'Ablekuma South' },
      { region: 'Greater Accra', district: 'Accra Metro' },
      { region: 'Greater Accra', district: 'Ada East' },
      { region: 'Greater Accra', district: 'Ada West' },
      { region: 'Greater Accra', district: 'Adentan' },
      { region: 'Greater Accra', district: 'Ashaiman' },
      { region: 'Greater Accra', district: 'Ayawaso Central' },
      { region: 'Greater Accra', district: 'Ayawaso East' },
      { region: 'Greater Accra', district: 'Ayawaso North' },
      { region: 'Greater Accra', district: 'Ayawaso West' },
      { region: 'Greater Accra', district: 'Ga Central' },
      { region: 'Greater Accra', district: 'Ga East' },
      { region: 'Greater Accra', district: 'Ga North' },
      { region: 'Greater Accra', district: 'Ga South' },
      { region: 'Greater Accra', district: 'Ga West' },
      { region: 'Greater Accra', district: 'Korle-Klottey' },
      { region: 'Greater Accra', district: 'Kpone-Katamanso' },
      { region: 'Greater Accra', district: 'Krowor' },
      { region: 'Greater Accra', district: 'La-Dade-Kotopon' },
      { region: 'Greater Accra', district: 'La-Nkwantanang-Madina' },
      { region: 'Greater Accra', district: 'Ledzokuku' },
      { region: 'Greater Accra', district: 'Ningo Prampram' },
      { region: 'Greater Accra', district: 'Okai Koi North' },
      { region: 'Greater Accra', district: 'Shai-Osudoku' },
      { region: 'Greater Accra', district: 'Tema' },
      { region: 'Greater Accra', district: 'Tema West' },
      { region: 'Greater Accra', district: 'Weija-Gbawe' }
    ];
    var facilityList = [
      { district: 'Ablekuma West', facility: 'Sukura Comm Clinic' },
      { district: 'Ablekuma North', facility: 'New gen Maternity Home' },
      { district: 'Ablekuma North', facility: 'MABS hospital' },
      { district: 'Ablekuma West', facility: 'Dansoman Polyclinic ' },
      { district: 'Accra Metro',  facility: 'Mamprobi Polyclinic' },
      { district: 'Accra Metro', facility: 'PML Hopital' },
      { district: 'Accra Metro', facility: 'Usher Hospital' },
      { district: 'Ada East', facility: 'Healthstar Clinic' },
      { district: 'Ada East', facility: 'Ada East Hospital' },
      { district: 'Ada East', facility: 'District Hospital' },
      { district: 'Ada West', facility: 'Sege Polyclinic' },
      { district: 'Adentan', facility: 'St John Of God' },
      { district: 'Adentan', facility: 'Ogbojo Polyclinic' },
      { district: 'Ashaiman', facility: 'Darbem' },
      { district: 'Ashaiman', facility: 'Trinity Comm Hospital' },
      { district: 'Ashaiman', facility: 'Ashaiman Polyclinic' },
      { district: 'Ayawaso Central', facility: 'Malata Clinic' },
      { district: 'Ayawaso East', facility: 'Nima Government clinic' },
      { district: 'Ayawaso East', facility: '37 Military Hospital' },
      { district: 'Ayawaso North', facility: 'Maamobi Hospital' },
      { district: 'Ayawaso West', facility: 'Legon Hospital' },
      { district: 'Ga Central', facility: 'Ga Central Clinic' },
      { district: 'Ga Central', facility: 'Israel Health Centre' },
      { district: 'Ga Central', facility: 'Ablekuma HC' },
      { district: 'Ga East', facility: 'Taifa Polyclinic' },
      { district: 'Ga East', facility: 'Ga East Municipal Hospital' },
      { district: 'Ga East', facility: 'Abokobi Health Centre' },
      { district: 'Ga North', facility: 'Ga North Municopal Hospital' },
      { district: 'Ga North', facility: 'Pokuase Health Centre' },
      { district: 'Ga South', facility: 'Amanfro Polyclinic' },
      { district: 'Ga South', facility: 'Bortianor Health Centre' },
      { district: 'Ga West', facility: 'Oduman Polyclinic' },
      { district: 'Ga West', facility: 'GA West Municipal Hospital' },
      { district: 'Korle-Klottey', facility: 'Civil service Polyclinic' },
      { district: 'Korle-Klottey', facility: 'Adabraka PC' },
      { district: 'Korle-Klottey', facility: 'Ridge Hospital' },
      { district: 'Kpone-Katamanso', facility: 'Zenu Polyclinic' },
      { district: 'Kpone-Katamanso', facility: 'Kpone Polyclinic' },
      { district: 'Krowor', facility: 'Lekma Polyclinic' },
      { district: 'Krowor', facility: 'Danpong medical center' },
      { district: 'La-Dade-Kotopon', facility: 'Accra Police Hospital' },
      { district: 'La-Dade-Kotopon', facility: 'Akai House Clinic' },
      { district: 'La-Nkwantanang-Madina', facility: 'Madina Polyclinic Rawlings circle' },
      { district: 'La-Nkwantanang-Madina', facility: 'Madina Kekele Polyclinic' },
      { district: 'La-Nkwantanang-Madina', facility: 'Pentecost Hospital' },
      { district: 'Ledzokuku', facility: 'Manna Mission ' },
      { district: 'Ledzokuku', facility: 'Lekma Hospital' },
      { district: 'Ningo Prampram', facility: 'Prampram Polyclinic' },
      { district: 'Ningo Prampram', facility: 'Ningo Health Centre' },
      { district: 'Okai Koi North', facility: 'Achimota Hospital' },
      { district: 'Okai Koi North', facility: 'Prince of peace maternity' },
      { district: 'Shai-Osudoku', facility: 'Shai-Osudoku District Hospital' },
      { district: 'Shai-Osudoku', facility: 'St Andrews Catholic Hospital' },
      { district: 'Tema', facility: 'Rapha Medical' },
      { district: 'Tema', facility: 'Tema General Hospital' },
      { district: 'Tema', facility: 'Bengali Hospital' },
      { district: 'Shai-Osudoku', facility: 'St Andrews Catholic Hospital' },
      { district: 'Tema West', facility: 'Tema Polyclinic' },
      { district: 'Tema West', facility: 'Sakumono Health Centre'},
      { district: 'Weija-Gbawe', facility: 'Weija  Gbawe Municipal Hospital' },
      { district: 'Weija-Gbawe', facility: 'Ga SDA Hospital' },
      { district: 'Other', facility: 'Other' }
    ];
    $(document).ready(function () {
      debugger;
      $(".divOtherregion").hide();
      $(".divOtherdistrict").hide();
      $(".divOtherfacility").hide();
      $("#dpdlregion").change(function () {
        debugger;
        if ($("#dpdlregion").val() == "Other") {
          $(".divOtherregion").show();
          const option = "<option val='Other'>Other</option>";
          $("#dpdldistrict").append(option);
        } else {
          $(".divOtherregion").hide();
          $(".divOtherdistrict").hide();
          $(".divOtherfacility").hide();
          $("#dpdldistrict").html("<option selected>Choose district</option>");
          $("#dpdlfacility").html("<option selected>Choose facility</option>");
          const districts = districtList.filter(m => m.region == $("#dpdlregion").val() || m.region == "Other");
          districts.forEach(element => {
            const option = "<option val='" + element.district + "'>" + element.district + "</option>";
            $("#dpdldistrict").append(option);
          });
        }
      });

      $("#dpdldistrict").change(function () {
        debugger;
        if ($("#dpdldistrict").val() == "Other") {
          $(".divOtherdistrict").show();
          const option = "<option val='Other'>Other</option>";
          $("#dpdlfacility").append(option);
        } else {
          $(".divOtherdistrict").hide();
          $(".divOtherfacility").hide();
          $("#dpdlfacility").html("<option selected>Choose facility</option>");
          debugger;
          const districts = facilityList.filter(m => m.district == $("#dpdldistrict").val() || m.district == "Other");
          districts.forEach(element => {
            const option = "<option val='" + element.facility + "'>" + element.facility + "</option>";
            $("#dpdlfacility").append(option);
          });
        }
      });

      $("#dpdlfacility").change(function () {
        debugger;
        if ($("#dpdlfacility").val() == "Other") {
          $(".divOtherfacility").show();
        } else {
          $(".divOtherfacility").hide();
        }
      });
    });


    $(".input_text").focus(function(){
    $(this).prev('.fa').addclass('glowIcon')
})
$(".input_text").focusout(function(){
    $(this).prev('.fa').removeclass('glowIcon')
})

 function confirmSubmit() {
    var confirmation = confirm("Are you sure you want to submit the form?");
     if (!confirmation) {
      event.preventDefault();
    }
    return confirmation;
  }


// get a reference to the logout button element
const logoutButton = document.getElementById('logout-button');

// add a click event listener to the button
logoutButton.addEventListener('click', function(event) {
  // prevent the default behavior of the button click event
  event.preventDefault();

  // show a confirmation dialog to the user
  const confirmLogout = confirm('Are you sure you want to logout?');

  // if the user confirms the logout, redirect to the login page
  if (confirmLogout) {
    window.location.href = 'index.php';
  }
});

</script>

  </body>
</html>
