<?php

class GetPatientResponse
{

    /**
     * @var PatientType $patient
     * @access public
     */
    public $patient = null;

    /**
     * @param PatientType $patient
     * @access public
     */
    public function __construct($patient)
    {
      $this->patient = $patient;
    }

}
