USE epiz_33722902_maternal_deaths;

CREATE TABLE maternal_deaths_entered (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Region ENUM('Greater Accra'),
    otherRegion VARCHAR(255),
    District ENUM('Ablekuma West',
       'Ablekuma North',
       'Ablekuma South',
       'Accra Metro',
       'Ada East',
       'Ada West',
       'Adentan',
       'Ashaiman',
       'Ayawaso Central',
       'Ayawaso East',
       'Ayawaso North',
       'Ayawaso West',
       'Ga Central',
       'Ga East',
       'Ga North',
       'Ga South',
       'Ga West',
       'Korle-Klottey',
       'Kpone-Katamanso',
       'Krowor',
       'La-Dade-Kotopon',
       'La-Nkwantanang-Madina',
       'Ledzokuku',
       'Ningo Prampram',
       'Okai Koi North',
       'Shai-Osudoku',
       'Tema',
       'Tema West',
       'Weija-Gbawe'),
    otherDistrict VARCHAR(255),
    Facility ENUM('Sukura Comm Clinic',
        'New gen Maternity Home',
        'MABS hospital',
        'Dansoman Polyclinic',
        'Mamprobi Polyclinic',
        'PML Hopital',
        'Usher Hospital',
        'Healthstar Clinic',
        'Ada East Hospital',
        'District Hospital',
        'Sege Polyclinic',
        'St John Of God',
        'Ogbojo Polyclinic',
        'Darbem',
        'Trinity Comm Hospital',
        'Ashaiman Polyclinic',
        'Malata Clinic',
        'Nima Government clinic',
        '37 Military Hospital',
        'Maamobi Hospital',
        'Legon Hospital',
        'Ga Central Clinic',
        'Israel Health Centre',
        'Ablekuma HC',
        'Taifa Polyclinic',
        'Ga East Municipal Hospital',
        'Abokobi Health Centre',
        'Ga North Municopal Hospital',
        'Pokuase Health Centre',
        'Amanfro Polyclinic',
        'Bortianor Health Centre',
        'Oduman Polyclinic',
        'GA West Municipal Hospital',
        'Civil service Polyclinic',
        'Adabraka PC',
        'Ridge Hospital',
        'Zenu Polyclinic',
        'Kpone Polyclinic',
        'Lekma Polyclinic',
        'Danpong medical center',
        'Accra Police Hospital',
        'Akai House Clinic',
        'Madina Polyclinic Rawlings circle',
        'Madina Kekele Polyclinic',
        'Pentecost Hospital',
        'Manna Mission ',
        'Lekma Hospital',
        'Prampram Polyclinic',
        'Ningo Health Centre',
        'Achimota Hospital',
        'Prince of peace maternity',
        'Shai-Osudoku District Hospital',
        'St Andrews Catholic Hospital',
        'Rapha Medical',
        'Tema General Hospital',
        'Bengali Hospital',
        'St Andrews Catholic Hospital',
        'Tema Polyclinic',
        'Sakumono Health Centre',
        'Weija  Gbawe Municipal Hospital',
        'Ga SDA Hospital',
        'Other'),
    otherFacility VARCHAR(255),
    nameOfDeceased VARCHAR(255),
    dob DATE,
    education ENUM('Dont know', 'None', 'Primary', 'Middle/JHS', 'Secondary', 'Tertiary'),
    Occupation ENUM('Unemployed', 'House wife', 'Farming', 'Trading', 'Artisan', 'Civil_servant'),
    maritalStatus ENUM('NeverMarried', 'Married', 'LivingTogether', 'Divorced', 'Widowed'),
    Religion ENUM('Christian', 'Muslem', 'Traditionalist', 'other'),
    Ethnicity ENUM('Akan', 'Ga/Dangbe', 'Ewe', 'Guan', 'Mole', 'Grussi', 'Gruma', 'Other'),
    Gravidity VARCHAR(255),
    Parity VARCHAR(255),
    ANC ENUM('yes', 'no', 'Dont_know'),
    numberOfAnc INT,
    placeOfAnc ENUM('TeachingHospital', 'RegionalHospital', 'DistrictHospital', 'Polyclinic', 'HealthCentre', 'Clinic', 'CHPSCompound', 'PrivateMaternityHome', 'Other'),
    gestationalAge INT,
    -- Identified_ANC_risk_factor TEXT,
    riskFactorsnone VARCHAR(255),
    riskFactorsHypertension VARCHAR(255),
    riskFactorsSickleCellDisease VARCHAR(255),
    riskFactorsPreviousCaesareanSection VARCHAR(255),
    riskFactorsDiabetesMellitus VARCHAR(255),
    riskFactorsAnaemia VARCHAR(255),
    riskFactorsPreviousPPH VARCHAR(255),
    riskFactorsOther VARCHAR(255),
    --

    HIVStatus ENUM('Reactive', 'Non_reactive', 'Dont_know'),
    Patient_on_Antiretrovirals ENUM('yes', 'no', 'Dont_know'),
    DateofArrival DATE,
    TimeofArrival TIME,
    TimeTreatmentStarted TIME,
    Referral ENUM('yes', 'no', 'Dont_know'),
    Referral_from_where VARCHAR(50),
    minutesToReachFacility INT,
    form_of_transport ENUM('Ambulance', 'Hospital_vehicle', 'Public_Transport', 'Private_Transport', 'Other_(specify)'),
    LabourOccur ENUM('yes', 'no', 'Dont_know'),
    LabourInduced ENUM('yes', 'no', 'Dont_know'),
    LabourAugmented ENUM('yes', 'no', 'Dont_know'),
    PatographUsed ENUM('yes', 'no', 'Dont_know'),
    Activephase INT ,
    Second_stage INT ,
    Third_stage INT ,
    PatientDeliver ENUM('yes', 'no', 'Dont_know'),
    Location_of_delivery ENUM('Teaching Hospital', 'District Hospital', 'Health Centre', 'Clinic', 'Private Maternity Home', 'Home','Other_(specify)'),
    Delivered_by ENUM('Doctor', 'Midwife', 'TBA', 'Other_(specify)'),
    Mode_of_Delivery ENUM('Spontaneous Vaginal Delivery', 'Vacuum/forceps', 'Caesarian section'),
    Delivery_outcome ENUM('Live Birth', 'Fresh Stillbirth', 'Macerated Stillbirth', 'Early Neonatal Death'),
    BirthWeight FLOAT ,
    daysSinceTermination INT ,
    placeOfDeath ENUM('Teaching Hospital', 'District Hospital', 'Health Centre', 'Clinic', 'Private Maternity Home', 'Home','Other_(specify)'),
    DateofDeath DATE,
    TimeofDeath TIME,
    -- interventions (should be VARCHAR(50)) early pregnancy
    Antenatal_Evacuation ENUM('Evacuation'),
    Antenatal_AntibioticTherapy ENUM('AntibioticTherapy'),
    Antenatal_Laparotomy ENUM('Laparotomy'),
    Antenatal_Hysterectomy ENUM('Hysterectomy'),
    Antenatal_Transfusion1 ENUM('Transfusion'),
    EarlyAntenatal_AntiHypertensive ENUM('Anti Hypertensive'),
    -- antenatal
    Antenatal_Transfusion2 ENUM('Transfusion'),
    Antenatal_ExternalVersion ENUM('External version'),
    Antenatal_MagnisiumSulphate ENUM('MagnisiumSulphate'),
    Antenatal_Diazepam ENUM('Diazepam'),
    Antenatal_AntiHypertensive ENUM('Anti Hypertensive'),
    Antenatal_Hysterotomy2 ENUM('Hysterotomy'),
    -- 2nd interventions should be VARCHAR(50) (intrapostpartum)
    Intrapartum_Instrumental_delivery ENUM('Instrumental delivery'),
    Intrapartum_Antibiotic_therapy ENUM('Antibiotic therapy'),
    Intrapartum_Caesarian_section ENUM('Caesarian sectiony'),
    Intrapartum_Hysterectomy ENUM('Hysterectomy'),
    Intrapartum_Transfusion ENUM('Transfusion'),
    Intrapartum_MagnisiumSulphate ENUM('MagnisiumSulphate'),
    Intrapartum_Diazepam ENUM('Diazepam'),
    -- postpartum
    Postpartum_Evacuation ENUM('Evacuation'),
    Postpartum_Antibiotic_therapy ENUM('Antibiotic therapy'),
    Postpartum_Laparotomy ENUM('Laparotomy'),
    Postpartum_Hysterectomy ENUM('Hysterectomy'),
    Postpartum_Transfusion ENUM('Transfusion'),
    Postpartum_Manual_removal_of_placenta ENUM('Manual removal of placenta'),
    Postpartum_Anti_Hypertensive ENUM('Anti Hypertensive'),
    Postpartum_Diazepam ENUM('Diazepam'),
    
    -- other interventions
    otherInterventions_Anaesthesia_GA ENUM('Anaesthesia-GA'),
    otherInterventions_Epidural ENUM('Epidural'),
    otherInterventions_Spinal ENUM('Spinal'),
    otherInterventions_Local ENUM('Local'),
    otherInterventions_Invasive_monitoring ENUM('Invasive monitoring'),
    otherInterventions_Anti_Hypertensive ENUM('Anti Hypertensive'),
    otherInterventions_ICU_ventilation ENUM('ICU ventilation'),
    otherInterventions_Diazepam ENUM('Diazepam'),
    otherInterventions_other varchar(255),
    -- mortality data
    AutopsyPerformed ENUM('yes', 'no'),
    DateAutopsyPerformed date,
    PlaceAutopsyPerformed varchar(255),
    AutopsyPerformedby ENUM('Pathologist', 'Medical Officer'),
    OtherAutopsyPerformedBy varchar(255),
    FinalCOD VARCHAR(255),
    -- primary underlying obsetric COD
    Haemorrhage ENUM('Haemorrhage'),
    UnsafeAbortion ENUM('Unsafe abortion'),
    RupturedUterus ENUM('Ruptured Uterus'),
    ObstructedLabour ENUM('Obstructed Labour'),
    Malaria ENUM('Malaria'),
    HypertensiveDisease ENUM('Hypertensive disease'),
    GenitalTractSepsis ENUM('Genital Tract Sepsis'),
    EctopicPregnancy ENUM('Ectopic Pregnancy'),
    SickleCellDisease ENUM('Sickle Cell disease'),
    PrimaryUnderlyingCODOther VARCHAR(255),
    --
    Delay_in_woman_seeking_help ENUM('yes', 'no', 'Dont_know'),
    OtherFactorsDelay VARCHAR(50),
    Declined_treatment_or_admission ENUM('yes', 'no', 'Dont_know'),
    OtherDeclined_treatment_or_admission VARCHAR(50),
    Lack_of_Transport_from_home_to_reach_facility ENUM('yes', 'no', 'Dont_know'),
    OtherLack_of_Transport1 VARCHAR(255),
    Lack_of_Transport_between_Health_Care_Facilities ENUM('yes', 'no', 'Dont_know'),
    OtherLack_of_Transport2 VARCHAR(255),
    Health_Service_to_Health_Service_Communication_breakdown ENUM('yes', 'no', 'Dont_know'),
    OtherHealth_Service_Breakdown VARCHAR(50),
    --
    Summary TEXT,
	Lesson TEXT,
    Recommendations TEXT,
    NameOfMembers TEXT,
    fullNameDataOficer TEXT,
    mobileDataOfficer TEXT,
    RankDataOfficer TEXT,
    DateofDataEntry DATE,
    fullNameCommitteeChairman TEXT,
    mobileCommitteeChairman VARCHAR(10),
    RankCommitteeChairman VARCHAR(255),
    DateofCommitteeChairman DATE

);

CREATE TABLE IF NOT EXISTS registration (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(100) NOT NULL,
  confirmPass VARCHAR(255) NOT NULL,
  Fullname VARCHAR(255) NOT NULL,
  nameoffacility VARCHAR(255) NOT NULL,
  cadre VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);





