<?php

class AttendedDoctorType
{

    /**
     * @var IDREFS $AttendedBy
     * @access public
     */
    public $AttendedBy = null;

    /**
     * @param IDREFS $AttendedBy
     * @access public
     */
    public function __construct($AttendedBy)
    {
      $this->AttendedBy = $AttendedBy;
    }

}
