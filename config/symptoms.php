<?php

return [

    /*
    |--------------------------------------------------------------------------
    | All symptoms
    |--------------------------------------------------------------------------
    |
    */

    'symptoms' => [
      "Age",
      "BMI",
      "Temp",
      "HeartRate",
      "SBP",
      "DBP",
      "EdemaRos",
      "ElevatedSystolicBp",
      "ElevatedDiastolicBp",
      "VeryElevatedSystolicBp",
      "VeryElevatedDiastolicBp",
      "RR",
      "O2Sats",
      "Fio2",
      "WeightLoss",
      "WeightGain",
      "Chills",
      "HistoryFever",
      "GeneralizedFatigue",
      "DecreasedMood",
      "Ambulation",
      "NHLongTermResidency",
      "Fasting",
      "RecentHospitalStay",
      "Contacts",
      "Arrest",
      "HypoTension",
      "IndwellingCatheters",
      "MalariaTravel",
      "NewDetergents",
      "NewFoods",
      "GoutFoods",
      "VisualAcuityRos",
      "BlindnessRos",
      "DoubleVisionRos",
      "YellowScleraeRos",
      "EyesItchy",
      "Sneezing",
      "LossOfSmell",
      "LossOfTaste",
      "PostNasalDrainage",
      "RunnyNoseCongestion",
      "EasyBleedingFromGums",
      "SinusesPainRos",
      "Seasonal",
      "NotSoSeasonal",
      "Hoarseness",
      "Angioedema",
      "LarynxPain",
      "SoreThroatROS",
      "Trismus",
      "AphtousUlcers",
      "GlossitisOnROS",
      "PainBehindJawAngle",
      "EarPainRos",
      "DryMucusMembranes",
      "DryEyes",
      "HearingLossRos",
      "EarDCRos",
      "OrthopneaHx",
      "ParoxysmalNDHx",
      "ChestPainAnginaYesNo",
      "ChestPainSeverity",
      "ChestPainAginaStabilitySeverity",
      "ChestPainAginaStabilityFrequency",
      "ChestPainAginaStabilityLast",
      "ChestPainQuality",
      "ChestPainLasts",
      "ChestPainRadiation",
      "ChestPainAginaLocalized",
      "ChestPainReproducibleByPalpation",
      "ChestPainAssociatedWithCough",
      "ChestPainAginaNitro",
      "ChestPainAginaAntacid",
      "ChestPainAginaRest",
      "Arrhythmia",
      "ArrhythmiaSymptomsLightheadedness",
      "ArrhythmiaSymptomsChestPains",
      "ArrhythmiaSymptomsWeakness",
      "ArrhythmiaSymptomsHeadaches",
      "ArrhythmiaSymptomsSweats",
      "DVTSx",
      "DyspneaSeveritySubjective",
      "DyspneaProgressionSubjective",
      "DyspneaAnxiety",
      "DyspneaTingling",
      "DyspneaLightheadedness",
      "DyspneaBag",
      "MucousProduction",
      "MucousProductionInc",
      "MucusFeatures",
      "MucousCharacter",
      "SeverityCough",
      "WheezingH",
      "WheezingEpisodic",
      "HemoptysisTiming",
      "ChestPainPleuriticPulm",
      "ChestPainProgressionPulm",
      "Snoring",
      "DayTimeSleepiness",
      "SkinMoistureHx",
      "EasyBruising",
      "SkinSweatingHx",
      "JaundiceHx",
      "HyperpigmentationSkinHx",
      "HirsutismHx",
      "SkinErythemamaculesRashHx",
      "SkinErythemaNodosum",
      "SkinErythemapapulesRashHx",
      "SkinErythemapustulesRashHx",
      "SkinPetechiaeRashHx",
      "SkinUrticariaRashHx",
      "SkinFlushes",
      "SkinHerpesRashHx",
      "SkinItchinessHx",
      "PerineumItchinessHx",
      "PerianalItchinessHx",
      "FingersClubbing",
      "BreastGynecomastia",
      "Erythema",
      "SpiderAngioma",
      "Nausea",
      "Vomiting",
      "DryRetching",
      "HeartBurn",
      "UpperGIBleedSx",
      "LowerGIBleedSx",
      "DiarrheaSx",
      "FattyStool",
      "ChronicDiarrheaSx",
      "Constipation",
      "Stool",
      "StoolEvac",
      "VagueAbdSx",
      "AbdDiscomfortExacerbatedByStress",
      "AbdCramps",
      "FlatulenceAbdSx",
      "StomachPainSeveritySx",
      "StomachPainDistributionSx",
      "StomachPainResolvesPRDXSx",
      "PeriAnalPainSx",
      "PeriAnalSoilingSx",
      "StomachPainProgressionSubjective",
      "StomachPainLength",
      "StomachPainDuration",
      "RUQPain",
      "LUQPain",
      "RLQPain",
      "LLQPain",
      "RLFlankPain",
      "StomachPainPeriumbilicalArea",
      "StomachPainEpigastricArea",
      "RLInguinalPain",
      "BellowTheUmbAbdPain",
      "StomachPainPeriod",
      "AbdPainRadBack",
      "AbdPainImprovesLeaning",
      "AbdPainRadPerineum",
      "BackPainRadPerineum",
      "FastingPain",
      "EtohAbdPain",
      "EatingPain",
      "LayingdownPain",
      "StrainingPain",
      "FoodIntake",
      "Malnutrition",
      "EarlySatiety",
      "FluidIntake",
      "FluidNoLytesIntake",
      "SwallowPain",
      "SolidsSwallow",
      "FluidsSwallow",
      "ChokingSwallow",
      "RegurgFood",
      "FecalUrgency",
      "UrineSoilingSx",
      "BurningWithUrination",
      "UrinaryFrequency",
      "GrossHematuria",
      "DarkUrine",
      "FoamyUrine",
      "MicroscopicHematuriaRBCs",
      "UAProteinuria",
      "MicroscopicHematuriaOccult",
      "Nocturia",
      "UrinationRelieves",
      "WeakStream",
      "StrainStream",
      "UrinaryUrgency",
      "LessUrine",
      "Oliguria",
      "Polyuria",
      "Polydipsia",
      "StressIncoHx",
      "NonEmptyBladder",
      "UrgencyIncoHx",
      "ConstantIncoHx",
      "FemaleSpottingSx",
      "FemaleVaginalDryness",
      "MaleSpottingSx",
      "FemaleDCSx",
      "MaleDCSx",
      "VaginalSorenessSx",
      "VaginalItching",
      "PusMaleSpottingSx",
      "ScrotalPainSx",
      "HeavyPeriodsSx",
      "HematuriaAroundPeriod",
      "IrregularPeriodsSx",
      "LastPeriod",
      "DyspaureniaSx",
      "MaleProstatePainSx",
      "HxChildbirth",
      "AnyLocalNeuroFindings",
      "RestlessLegsSymptomsROS",
      "LocalizedSensoryDeficitHx",
      "LocalizedNeuroMotoLEHx",
      "LocalizedNeuroSensUEHx",
      "LocalizedNeuroSensLEHx",
      "LocalizedNeuroMotoUEHx",
      "GeneralizedWeakness",
      "AMS",
      "DecreasedLongTermMemory",
      "DecreasedLongTermMemoryOnExam",
      "DecreasedShortTermMemoryOnExam",
      "DecreasedShortTermMemory",
      "Seizure",
      "AphasiaHx",
      "AphasiaHxSensory",
      "LossOfConsciousness",
      "LossOfConsciousnessProdrome",
      "LossOfConsciousnessProdromePalpitations",
      "LossOfConsciousnessProdromeChestPain",
      "LossOfConsciousnessHeadache",
      "LossOfConsciousnessSeizures",
      "LossOfConsciousnessSphincter",
      "LossOfConsciousnessPostictall",
      "OrthostaticLightheadedness",
      "DizzinessWithPosition",
      "DizzinessWithExertion",
      "HeadacheFrontal",
      "HeadacheAssociatedWithHTN",
      "HeadacheAssociatedWithStress",
      "HeadacheAssociatedWithDecreasedCaffeineIntake",
      "HeadacheThunderclap",
      "HeadacheTemporal",
      "HeadacheOther",
      "HeadacheIntensity",
      "Photophobia",
      "Phonophobia",
      "HeadachePulsatile",
      "HeadacheSqueezing",
      "TearingOfEye",
      "HeadacheTiming",
      "HeadacheAssociatedWithNausea",
      "HeadacheAssociatedWithPhysicalActivity",
      "HeatIntolerance",
      "ColdIntolerance",
      "SaltCraving",
      "Pica",
      "HallucinationsROS",
      "NeckStiffn",
      "LowbackPain",
      "LowbackSeverity",
      "LowbackPainFlexion",
      "LowbackPainTrig",
      "LowbackPainSleep",
      "LowbackPainExercise",
      "BoneLocPain",
      "JointsPain",
      "BoneGenPain",
      "MuscleGenPain",
      "GoutyRosPain",
      "GoutyRosPainProgression",
      "SpinePain",
      "RestingPainInLowerExtremities",
      "TraumaToToesWithNoSkinBrake",
      "HeightDecreased",
      "PMHXChestTrauma",
      "PMHXMarfanSyndrom",
      "PMHXHeadTrauma",
      "PMHXCOPD",
      "PMHXAsthma",
      "PMHXAtopicDermatitis",
      "PMHXBPInf",
      "PMHXRiskFxDVT",
      "PMHXSpontanousAbortion",
      "PMHXofDVTorPE",
      "PMHXofSVT",
      "PMHXCHF",
      "PMHXCAD",
      "PMHXOfThoracicAorticAneurysmOrDissection",
      "PMHXPVD",
      "PMHXCVA",
      "PMHXICH",
      "ThyroidBruit",
      "PMHXAFib",
      "PMHXHTN",
      "ResistantHypertension",
      "EarlyOnsetOfHypertension",
      "AbruptOnsetOfHypertension",
      "LateOnsetOfHypertension",
      "PMHXDM1",
      "PMHXDM2",
      "PMHXHyperlipidemia",
      "PMHXPCDM",
      "PMHXKidneyStone",
      "PMHXPUD",
      "PMHXERCP",
      "PMHXAbdominalSurgery",
      "PMHXBowelObstruction",
      "PMHXRecentAngiography",
      "PMHXVeneral",
      "PMHXHIV",
      "PMHXHypo",
      "PMHXCKD",
      "PMHXGout",
      "PMHXBPH",
      "PMHXBladderCancer",
      "PMHXProstateCancer",
      "PMHXOvarianC",
      "PMHXChrons",
      "PMHXCU",
      "PMHXPancreatitis",
      "PMHXColonPolyp",
      "PMHXAbdominalRadiation",
      "PMHXAbdominalHernia",
      "PMHXAtypicalDuctalorLobularHyperplasiaOrLobularCarcinomaOnPriorBreastBiopsy",
      "PMHXBRCA12positivity",
      "AgeAtMenarche",
      "AgeAtMenopause",
      "AgeAtFirstBirth",
      "PMHXGE",
      "PMHXLiverCirrhosis",
      "PMHXVarices",
      "PMHXPeritionitis",
      "PMHXVGallStones",
      "PMHXDiverticulosisDiverticulitis",
      "PMHXDiverticulosisDiverticulosis",
      "PMHXColonCancer",
      "PMHXDepression",
      "PMHXSubstanceAbuse",
      "PMHXPsychOtherThanDepresion",
      "PMHXAspiration",
      "PMHXPneumonia",
      "PMHXURTI",
      "PMHXTonsillectomy",
      "PMHXDentalWork",
      "PMHXID",
      "PMHXAutoimmune",
      "PMHXMalNeo",
      "PMHXContactHospital",
      "PMHXContactDialysis",
      "PMHXContactWoundCare",
      "PMHXContactNursingHome",
      "PMHXWoundCurrent",
      "PMHXDialysisCurrent",
      "PMHXHepatitisC",
      "PMHXHepatitisB",
      "Anticoag",
      "CurrentUseOfHormonalReplacementTherapy",
      "BronchoDilators",
      "Diuretics",
      "DiureticsRecentlyStartedOrIncreased",
      "PatientOnDiuretics",
      "DiureticsOvert",
      "AllergicToDye",
      "WoundCareRecent",
      "PoAbxMed",
      "OpiatesMed",
      "IVAbxMed",
      "ACEARB",
      "ACEARBUseCausedAzotemia",
      "NSAIDSMed",
      "ContrastIodine",
      "TCAMed",
      "AntiCholinergicMed",
      "SerotoninergicMed",
      "BZDMed",
      "LithiumMed",
      "ThisSeasonsFluVaccineGiven",
      "CovidVaccineTaken",
      "AllergyMeds",
      "NeutropeniaMeds",
      "PancreatitisMeds",
      "NitratesMeds",
      "NitratesMedsRelatedToHeadaches",
      "MedsRecentChemotherapy",
      "HistoryOfChestRadiation",
      "FHCOPD",
      "FHAsthma",
      "FHAtopicDermatitis",
      "FHCAD",
      "FHHTN",
      "FHDM",
      "FHDVTPEParent",
      "FHIBDCD",
      "FHIBDCU",
      "FHMEN2",
      "FHProstateCa",
      "FHBreastCancer",
      "FHVHL",
      "FHNF1",
      "FHEarlyCC",
      "ExposurePneumonitis",
      "ExposureBladderCancer",
      "Smoker",
      "ETOH",
      "RecentIVDrugs",
      "RecentCocaineUse",
      "DustExposure",
      "TBExposure",
      "SexExposure",
      "SexActive",
      "PregnancyPossible",
      "UrinePregnancyTest",
      "ExposureToCovid",
      "Gender",
      "Race",
      "Anisocoria",
      "Pupils",
      "PupilsReaction",
      "Conjunctivas",
      "ConjunctivasPale",
      "Exophtalmos",
      "Acuity",
      "Blindness",
      "NoseCongestion",
      "SinusesTender",
      "ThroatExam",
      "DentalHygiene",
      "DryMMExam",
      "GlossitisOnExam",
      "HistoryOfHavingWetEar",
      "HistoryOfEarTraumaPriorToPain",
      "OtoscopicSerous",
      "OtoscopicPus",
      "DischargeFromEar",
      "MeatusTender",
      "MeatusEdematous",
      "MeatusErythematous",
      "OtoscopicErythema",
      "OtoscopicBulding",
      "NeckStiffness",
      "NeckSwollen",
      "ThyroidEnlarged",
      "ThyroidNodules",
      "AnteriorCervicalNodesExam",
      "Rales",
      "Rhonchi",
      "Wheezing",
      "DecreasedBreathSounds",
      "AccessoryMuscles",
      "ProlongedExpPhase",
      "RhythmRegular",
      "JVD",
      "OrthopneaExam",
      "EarlySystolicHolosystolicMurmurAtApexMR",
      "EarlySystolicHolosystolicMurmurAtApexRadiationMR",
      "EarlySystolicHolosystolicMurmurLeftSternalBorderTR",
      "EarlySystolicHolosystolicMurmurLeftSternalBorderRadiationTR",
      "EarlySystolicHolosystolicMurmurAtTheLeftLowerSternalBorderVSD",
      "EarlySystolicHolosystolicMurmurAtTheLeftLowerSternalRadiationVSD",
      "MidSystolicEjectionMurmurAtTheRightSternalBorderAS",
      "MidSystolicEjectionMurmurAtTheRightSternalBorderRadiationAS",
      "EarlyDiastolicMurmurAR",
      "EarlyDiastolicMurmurRadiationAR",
      "GrahamSteell",
      "PDAM",
      "PericardialFriction",
      "RS3Tone",
      "RS4Tone",
      "LS3Tone",
      "LS4Tone",
      "AsymmetricEdemaLE",
      "Edema",
      "TenderLE",
      "DVTSg",
      "LegsWarm",
      "LegsRed",
      "DistalPulsesLE",
      "ColdLowerLimbTips",
      "ClaudicationLowerExtremities",
      "ColdUpperLimbTips",
      "FemoralPulses",
      "BloodPressureDifference",
      "BloodPressureDifferenceLR",
      "PulseStrenghtDifferenceLR",
      "CarotidBruits",
      "RenalBruits",
      "EpigastricTender",
      "LowerMidAbdTender",
      "PeriumbilicaAbdTender",
      "RUQTender",
      "LUQTender",
      "RLLQTender",
      "ReboundTenderness",
      "AbdGuarding",
      "AbdAscites",
      "CaputMedusae",
      "MurphysSign",
      "BowelSounds",
      "PsoasSign",
      "RovsingSign",
      "CullenSign",
      "MalnutritionByExam",
      "GreyTurnersign",
      "BladderFull",
      "BladderEmpty",
      "RLInguinalAreaTender",
      "RLInguinalAreaCoughBulge",
      "InguinalLymphadenopathy",
      "AxillaryLymphadenopathy",
      "RectalExamHemorrhoids",
      "RectalExamRectalCancer",
      "RectalExamFissure",
      "RectalExamBlood",
      "HepatomegalyEx",
      "SplenomegalyEx",
      "IrregularLiverEx",
      "TestisTenderPE",
      "TestisEnlarged",
      "TestisIrregular",
      "GoldflamsSign",
      "RectalExamProstateTEnder",
      "RectalExamProstateEnlarged",
      "RectalExamProstateHardened",
      "RectalExamProstateIrregular",
      "PresenceOfPunctateHaemorrhagesOnVaginalExam",
      "PresenceOfThinAndDryMucosa",
      "PresenceOfVulvarInflamation",
      "Cyanosis",
      "SubcutaneousFatNecrosis",
      "Panniculitis",
      "SignsOfInfectionAtExitSitesOfCatheters",
      "SkinMoistureExam",
      "Jaundice",
      "SkinPetechiaeRashExam",
      "SkinExfoliativeRashExam",
      "SkinIschemicChanges",
      "SkinUrticariaRashExam",
      "CondylomataExam",
      "SkinHerpesRashExam",
      "SkinErythemamaculesRasExam",
      "SkinErythemaNodosumExam",
      "SkinErythemapapulesRashExam",
      "SkinErythemapustulesRashExam",
      "SkinFlushingExam",
      "AtaxiaLE",
      "AtaxiaUE",
      "Myoclonus",
      "Dysarthria",
      "Tremor",
      "PickingObjects",
      "MuscleRigidity",
      "LocalizedNeuroSensLEEx",
      "LocalizedNeuroMotoLEEx",
      "LocalizedNeuroSensUEEx",
      "LocalizedNeuroMotoUEEx",
      "LocalizedSensoryDeficitEx",
      "LocalizedMotorDeficitEx",
      "GeneralizedWeaknessExam",
      "AphasiaExam",
      "MeningealSigns",
      "RombergsSign",
      "BabinskiSign",
      "FeetClonus",
      "GeneralHyperreflexia",
      "StraightLegRaise",
      "CrossedStraightLegRaise",
      "WeakAnkle",
      "WeakKnee",
      "NystagmusEyeMovements",
      "GoutyExamTenderness",
      "GoutyExamWarmth",
      "GoutyExamEdema",
      "LumbarLordosis",
      "ParaspinalMuscles",
      "LimitedSpine",
      "TspineTenderEx",
      "LspineTenderEx",
      "SspineTenderEx",
      "HallucinationsOnExam",
      "CspineTenderEx",
      "MSVerbalContact",
      "MSOrientation",
      "MSFullyAwakens",
      "MSDrowsiness",
      "MSStimulusAwakens",
      "MSAgitated",
      "HGBlevel",
      "DropInHGBlevelWithinLast24Hours",
      "MCVlevel",
      "WBClevel",
      "LymphocyteLevel",
      "SerumCreatinine",
      "SerumCreatinineAtBaseline",
      "BaselineeGFR",
      "PlateletsLevel",
      "INR",
      "TSAT",
      "FerritinLab",
      "FolateLab",
      "B12 Lab",
      "MMALevel",
      "HomocysteineLevel",
      "IntrinsicFactorLab",
      "antiPLA2Rab",
      "antiGBM",
      "antiTHSD7Aab",
      "HepatitisCAntibodiesTotalIgGAndIgM",
      "Albuminlevel",
      "CRPlevel",
      "ESRlevel",
      "AldoRenin",
      "TSHFeature",
      "Aldosterone",
      "Potassium",
      "DDimer",
      "TroponinI",
      "PCT",
      "LDH",
      "HaptoglobinLab",
      "UricAcidLevel",
      "AST",
      "ALT",
      "Amylase",
      "Lipase",
      "TotalBilirubin",
      "AlkalinePhosphatase",
      "SerumCK",
      "BNP",
      "PSA",
      "Bicarb",
      "Calcium",
      "TriglyceridesLevel",
      "CholesterolLevel",
      "LacticAcid",
      "AnionGap",
      "BetaHydroxyButyrate",
      "Hba1c",
      "GAD65",
      "InsulinAA",
      "TyrosinePhosphatases",
      "IsletCellAA",
      "ZincTransporterZNT8",
      "FastingGlucose",
      "TwoHrPlasmaGlucoseDuringOGTT",
      "RandomBloodGlucose",
      "Proteinuria",
      "Albuminuria",
      "FeaturesOfHematuriaOnUA",
      "SerumbHCG",
      "PelvicUSForEctopicPregnancy",
      "PelvicUSForNlPregnancy",
      "gFOBT",
      "pCO2onABG",
      "pHonABG",
      "pHofVaginalDc",
      "HypercapniaOnAbg",
      "FeaturesOfInflamationOnUA",
      "GramStainUrineGonococcus",
      "WetMountResults",
      "WhiffTestResults",
      "BuddingYeastMyceliaAfterKOH",
      "RightVentricleStrainOnEcho",
      "DecreasedEFonECHO",
      "SegmentalDyskinesiaHypokinesiaAkinesiaECHO",
      "AorticDissectionTEE",
      "StressECGCAD",
      "StressEchoCAD",
      "StressNuke",
      "OSAOnSleepStudy",
      "FEV1toFVCRatio",
      "FEV1toFVCRatioImprovingBy12BeforeAndAfterBronchodilator",
      "CxrayFocalInfiltrate",
      "CxrayPTX",
      "ChestCTPTX",
      "XrayDoubleBariumEnemaForColonCa",
      "HydroOnCT",
      "GroundGlassOnChestCt",
      "IntersitialAbnormalitiesOnChestCt",
      "LocalPatchyInfiltratesOnChestCt",
      "DiverticulitisOnCt",
      "AppendicitsOnUS",
      "AppendicitsOnCT",
      "RenalArteriesDigitalSubstractionAngiography",
      "RenalArteriesMagneticResonanceAngiographyWithGadolinum",
      "RenalArteriesMagneticResonanceAngiographyWithoutGadolinum",
      "RenalArteriesCTAngiographyWithIVDye",
      "ThoracicAortaCTAngiographyWithIVDye",
      "PEonCTAngio",
      "PEonVQScan",
      "RVStrainOnCTAngio",
      "BiliaryColicOnCt",
      "BiliaryCollicOnUS",
      "BiliaryCollicOnEUS",
      "PeriNephricStrandingOnCT",
      "LBOOnAbdominalPlainRadiograph",
      "LBOonCTwDye",
      "LBOonCT",
      "SBOOnAbdominalPlainRadiograph",
      "PneumoperitoneumAbdXray",
      "PneumoperitoneumChestXray",
      "PneumoperitoneumChestCT",
      "PneumoperitoneumAbdCT",
      "SBOonCTwDye",
      "SBOonCT",
      "SBOOnBedsideUltrasound",
      "IschemicColitisOnUltrasound",
      "AMIOnAbdominalPlainRadiograph",
      "AMIODigitalSubstractionAngiography",
      "AMIonCTAngio",
      "AMIonCT",
      "IschemicColitis",
      "XrayBariumEnemaForLBO",
      "NephrolithiasisOnCT",
      "NephrolithiasisOnUS",
      "UreterolithiasisOnCT",
      "UreterolithiasisOnUS",
      "ColonMalignancyOnCTColonography",
      "DenseBreastTissueOnMammography",
      "HydroOnUS",
      "RenalArterieDuplexUltrasonography",
      "RenalAsymmetryOnUS",
      "USProstateEnlarged",
      "ElevatedPVR",
      "ThickenedBladderWall",
      "BladderMalignancyOnUS",
      "JugularVeinFacialVeinsThrombosis",
      "ArterialLowerExtremitiesDopplers",
      "FirstExtremitiesDopplersToRuleOutDVT",
      "SecondExtremitiesDopplersToRuleOutDVT",
      "ExtremitiesDopplersToRuleOutSVT",
      "JugularVeinFacialVeinsThrombosisonCT",
      "CxrayPleuralEffusion",
      "CxrayWidenedMediastinum",
      "CxrayBlInfilEdema",
      "CxrayBilInfiltrates",
      "BrainCTNonContrastForSAH",
      "CranialCTNonContrastForChronicSinusitis",
      "CranialCTNonContrastForAcuteSinusitis",
      "ParanasalSinusesTargetedXrayForSinusitis",
      "BrainCTNormal",
      "BrainMRINormal",
      "BrainMRIWithGadNormal",
      "BrainCTContrastNormal",
      "BrainCTNonContrastForICH",
      "BrainCTNonContrastForIschemicCVA",
      "BrainMRIForIschemicCVA",
      "MembranousNephropathyOnBiopsy",
      "GoodpastureSyndromeonKidneyBiopsy",
      "NephriticSyndromeonKidneyBiopsy",
      "NephroticSyndromeonKidneyBiopsy",
      "MSUInSynovialFluid",
      "LumbarPunctionFluidForSAH",
      "TransrectalProstateBiopsy",
      "CirrhosisOnLiverBiopsy",
      "BreastBiopsy",
      "BRCA12GeneticTesting",
      "PCRCovid",
      "PCRGonococcus",
      "PCRChlamydia",
      "PCRRNAHepC",
      "PCRFlu",
      "HIV1HIV2ElisaResults",
      "PCRHIVDNA",
      "HIVWesternBlot",
      "BloodCulturesx2",
      "CdiffStoolToxin",
      "StoolForOvasAndParasites",
      "LegionellaUrinaryAntigenFeature",
      "StreptococcusUrinaryAntigenFeature",
      "ThroatCulture",
      "StoolCulture",
      "ThroatCultureForFusobacteriumNecrophorum",
      "BloodCultureForFusobacteriumNecrophorum",
      "RapiStrepTest",
      "DeviceBloodCultures",
      "RapidFluAntigenTesting",
      "LactoseHydrogenTest",
      "UreaBreathTest",
      "StoolAntigenForHPylori",
      "RapidUreaseTestEGD",
      "UConColonoscopyPathology",
      "ColonMalignancyOnColonoscopy",
      "EsophagitisOnEGD",
      "AnalFissureOnCScope",
      "AnalFissureOnCSigmoidoscopy",
      "CrohnsOnColonoscopy",
      "CrohnsOnEGD",
      "CrohnsOnMRI",
      "CrohnsOnCT",
      "GastritisOnEGD",
      "GallStonesInCysticDuctMRIMRCP",
      "AcuteCholecystitisConfirmationByUS",
      "AcuteCholecystitisConfirmationByHIDA",
      "GallStonesInPancreaticDuctCT",
      "GallStonesInPancreaticDuctMRIMRCP",
      "GallStonesInCommonBileDuctMRIMRCP",
      "GallStonesInGallBladerMRIMRCP",
      "GallStonesERCP",
      "GallStonesEUS",
      "PUDOnEGD",
      "BleedingPUDOnEGD",
      "BleedingEsophagealVarices",
      "EsophagealVaricesOnEGD",
      "EsophagealVaricesOnCT",
      "CirrhosisOnCT",
      "UrogramCT",
      "UrineCytology",
      "PollenAllergyTesting",
      "DustMitesAllergyTesting",
      "CystoscopyWithBiopsies",
      "ChronicPancreatitisOnAbdXray",
      "ChronicPancreatitisOnCt",
      "AcutePancreatitisOnAbdCT",
      "CirrhosisOnFibroScan",
      "CirrhosisOnMRI",
      "CirrhosisOnUS",
      "ProstateMalignancy",
      "BreastMalignancy",
      "ElectrocardiogramIschemicChangesNSTEMI",
      "ElectrocardiogramNonsepcificSTChanges",
      "ElectrocardiogramIschemicChangesSTEMI",
      "ElectiveCoronaryAngiogram",
      "CTCoronaryAngiogram",
      "CoronaryAngiogram",
      "RHCRv",
      "RHCLv",
      "CoronaryAngiogramAorticDissectionFound",
      "ElectrocardiogramHeartBlock",
      "ElectrocardiogramPreExcitation",
      "ElectrocardiogramHyperkalemia",
      "ElectrocardiogramHypokalemia",
      "ElectrocardiogramHypocalcemia",
      "ElectrocardiogramHypercalcemia"
    ],
];
