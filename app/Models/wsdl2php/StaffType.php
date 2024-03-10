<?php

class StaffType
{

    /**
     * @var DoctorsType $Doctors
     * @access public
     */
    public $Doctors = null;

    /**
     * @var NursesType $Nurses
     * @access public
     */
    public $Nurses = null;

    /**
     * @param DoctorsType $Doctors
     * @param NursesType $Nurses
     * @access public
     */
    public function __construct($Doctors, $Nurses)
    {
      $this->Doctors = $Doctors;
      $this->Nurses = $Nurses;
    }

}
