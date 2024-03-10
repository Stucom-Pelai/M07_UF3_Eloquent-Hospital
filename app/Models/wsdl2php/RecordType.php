<?php

class RecordType
{

    /**
     * @var AffiliatedPatientType $AffiliatedPatient
     * @access public
     */
    public $AffiliatedPatient = null;

    /**
     * @var PatientStateType $PatientState
     * @access public
     */
    public $PatientState = null;

    /**
     * @var HistoryUpdateType $HistoryUpdate
     * @access public
     */
    public $HistoryUpdate = null;

    /**
     * @var anonymous44 $HistoryRecID
     * @access public
     */
    public $HistoryRecID = null;

    /**
     * @param AffiliatedPatientType $AffiliatedPatient
     * @param PatientStateType $PatientState
     * @param HistoryUpdateType $HistoryUpdate
     * @param anonymous44 $HistoryRecID
     * @access public
     */
    public function __construct($AffiliatedPatient, $PatientState, $HistoryUpdate, $HistoryRecID)
    {
      $this->AffiliatedPatient = $AffiliatedPatient;
      $this->PatientState = $PatientState;
      $this->HistoryUpdate = $HistoryUpdate;
      $this->HistoryRecID = $HistoryRecID;
    }

}
