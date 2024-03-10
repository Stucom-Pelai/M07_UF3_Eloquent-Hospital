<?php

class PatientsType
{

    /**
     * @var PatientType $Patient
     * @access public
     */
    public $Patient = null;

    /**
     * @param PatientType $Patient
     * @access public
     */
    public function __construct($Patient)
    {
      $this->Patient = $Patient;
    }

}
