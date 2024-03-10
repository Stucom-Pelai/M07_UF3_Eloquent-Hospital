<?php

class HospitalType
{

    /**
     * @var InfrastructureType $Infrastructure
     * @access public
     */
    public $Infrastructure = null;

    /**
     * @var StaffType $Staff
     * @access public
     */
    public $Staff = null;

    /**
     * @var PatientsType $Patients
     * @access public
     */
    public $Patients = null;

    /**
     * @var HistoryType $History
     * @access public
     */
    public $History = null;

    /**
     * @var ReceptionType $Reception
     * @access public
     */
    public $Reception = null;

    /**
     * @var AccountingType $Accounting
     * @access public
     */
    public $Accounting = null;

    /**
     * @param InfrastructureType $Infrastructure
     * @param StaffType $Staff
     * @param PatientsType $Patients
     * @param HistoryType $History
     * @param ReceptionType $Reception
     * @param AccountingType $Accounting
     * @access public
     */
    public function __construct($Infrastructure, $Staff, $Patients, $History, $Reception, $Accounting)
    {
      $this->Infrastructure = $Infrastructure;
      $this->Staff = $Staff;
      $this->Patients = $Patients;
      $this->History = $History;
      $this->Reception = $Reception;
      $this->Accounting = $Accounting;
    }

}
