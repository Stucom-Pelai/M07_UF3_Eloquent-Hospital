<?php

class AppointedDoctorType
{

    /**
     * @var IDREF $AppointedDoctorID
     * @access public
     */
    public $AppointedDoctorID = null;

    /**
     * @param IDREF $AppointedDoctorID
     * @access public
     */
    public function __construct($AppointedDoctorID)
    {
      $this->AppointedDoctorID = $AppointedDoctorID;
    }

}
