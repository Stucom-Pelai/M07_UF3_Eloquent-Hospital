<?php

class PatientContactType
{

    /**
     * @var string $PatientAddress
     * @access public
     */
    public $PatientAddress = null;

    /**
     * @var string $PatientPhone
     * @access public
     */
    public $PatientPhone = null;

    /**
     * @param string $PatientAddress
     * @param string $PatientPhone
     * @access public
     */
    public function __construct($PatientAddress, $PatientPhone)
    {
      $this->PatientAddress = $PatientAddress;
      $this->PatientPhone = $PatientPhone;
    }

}
