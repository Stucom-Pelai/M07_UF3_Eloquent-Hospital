<?php

class HistoryUpdateType
{

    /**
     * @var UpdateDateType $UpdateDate
     * @access public
     */
    public $UpdateDate = null;

    /**
     * @var UpdateTimeType $UpdateTime
     * @access public
     */
    public $UpdateTime = null;

    /**
     * @var AffiliatedDoctorType $AffiliatedDoctor
     * @access public
     */
    public $AffiliatedDoctor = null;

    /**
     * @var AffiliatedDepartType $AffiliatedDepart
     * @access public
     */
    public $AffiliatedDepart = null;

    /**
     * @var string $MedicalCase
     * @access public
     */
    public $MedicalCase = null;

    /**
     * @var string $DoctorComments
     * @access public
     */
    public $DoctorComments = null;

    /**
     * @var PrescriptionType $Prescription
     * @access public
     */
    public $Prescription = null;

    /**
     * @var anonymous49 $HistoryUpdateID
     * @access public
     */
    public $HistoryUpdateID = null;

    /**
     * @param UpdateDateType $UpdateDate
     * @param UpdateTimeType $UpdateTime
     * @param AffiliatedDoctorType $AffiliatedDoctor
     * @param AffiliatedDepartType $AffiliatedDepart
     * @param string $MedicalCase
     * @param string $DoctorComments
     * @param PrescriptionType $Prescription
     * @param anonymous49 $HistoryUpdateID
     * @access public
     */
    public function __construct($UpdateDate, $UpdateTime, $AffiliatedDoctor, $AffiliatedDepart, $MedicalCase, $DoctorComments, $Prescription, $HistoryUpdateID)
    {
      $this->UpdateDate = $UpdateDate;
      $this->UpdateTime = $UpdateTime;
      $this->AffiliatedDoctor = $AffiliatedDoctor;
      $this->AffiliatedDepart = $AffiliatedDepart;
      $this->MedicalCase = $MedicalCase;
      $this->DoctorComments = $DoctorComments;
      $this->Prescription = $Prescription;
      $this->HistoryUpdateID = $HistoryUpdateID;
    }

}
