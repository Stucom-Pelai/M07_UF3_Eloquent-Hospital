<?php

class DoctorsType
{

    /**
     * @var DoctorType $Doctor
     * @access public
     */
    public $Doctor = null;

    /**
     * @param DoctorType $Doctor
     * @access public
     */
    public function __construct($Doctor)
    {
      $this->Doctor = $Doctor;
    }

}
