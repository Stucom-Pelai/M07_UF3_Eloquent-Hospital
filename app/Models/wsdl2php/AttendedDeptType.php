<?php

class AttendedDeptType
{

    /**
     * @var IDREF $AttendedIn
     * @access public
     */
    public $AttendedIn = null;

    /**
     * @param IDREF $AttendedIn
     * @access public
     */
    public function __construct($AttendedIn)
    {
      $this->AttendedIn = $AttendedIn;
    }

}
