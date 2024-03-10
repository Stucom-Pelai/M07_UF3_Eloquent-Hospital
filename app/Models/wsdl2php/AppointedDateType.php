<?php

class AppointedDateType
{

    /**
     * @var date $Aptdate
     * @access public
     */
    public $Aptdate = null;

    /**
     * @param date $Aptdate
     * @access public
     */
    public function __construct($Aptdate)
    {
      $this->Aptdate = $Aptdate;
    }

}
