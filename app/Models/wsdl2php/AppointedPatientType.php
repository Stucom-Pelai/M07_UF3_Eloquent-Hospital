<?php

class AppointedPatientType
{

    /**
     * @var IDREF $AppointedPatientID
     * @access public
     */
    public $AppointedPatientID = null;

    /**
     * @param IDREF $AppointedPatientID
     * @access public
     */
    public function __construct($AppointedPatientID)
    {
      $this->AppointedPatientID = $AppointedPatientID;
    }

}
