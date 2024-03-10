<?php

class PatientType
{

    /**
     * @var string $PatientName
     * @access public
     */
    public $PatientName = null;

    /**
     * @var SexType $Sex
     * @access public
     */
    public $Sex = null;

    /**
     * @var WeightType $Weight
     * @access public
     */
    public $Weight = null;

    /**
     * @var AgeType $Age
     * @access public
     */
    public $Age = null;

    /**
     * @var AttendedDeptType $AttendedDept
     * @access public
     */
    public $AttendedDept = null;

    /**
     * @var AttendedDoctorType $AttendedDoctor
     * @access public
     */
    public $AttendedDoctor = null;

    /**
     * @var BedToType $BedTo
     * @access public
     */
    public $BedTo = null;

    /**
     * @var RecoveryPeriodType $RecoveryPeriod
     * @access public
     */
    public $RecoveryPeriod = null;

    /**
     * @var PatientContactType $PatientContact
     * @access public
     */
    public $PatientContact = null;

    /**
     * @var anonymous31 $PatientID
     * @access public
     */
    public $PatientID = null;

    /**
     * @var anonymous32 $PatientType
     * @access public
     */
    public $PatientType = null;

    /**
     * @param string $PatientName
     * @param SexType $Sex
     * @param WeightType $Weight
     * @param AgeType $Age
     * @param AttendedDeptType $AttendedDept
     * @param AttendedDoctorType $AttendedDoctor
     * @param BedToType $BedTo
     * @param RecoveryPeriodType $RecoveryPeriod
     * @param PatientContactType $PatientContact
     * @param anonymous31 $PatientID
     * @param anonymous32 $PatientType
     * @access public
     */
    public function __construct($PatientName, $Sex, $Weight, $Age, $AttendedDept, $AttendedDoctor, $BedTo, $RecoveryPeriod, $PatientContact, $PatientID, $PatientType)
    {
      $this->PatientName = $PatientName;
      $this->Sex = $Sex;
      $this->Weight = $Weight;
      $this->Age = $Age;
      $this->AttendedDept = $AttendedDept;
      $this->AttendedDoctor = $AttendedDoctor;
      $this->BedTo = $BedTo;
      $this->RecoveryPeriod = $RecoveryPeriod;
      $this->PatientContact = $PatientContact;
      $this->PatientID = $PatientID;
      $this->PatientType = $PatientType;
    }

}
