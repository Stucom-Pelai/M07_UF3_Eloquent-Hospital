<?php

class UpdateDateType
{

    /**
     * @var date $UptDate
     * @access public
     */
    public $UptDate = null;

    /**
     * @param date $UptDate
     * @access public
     */
    public function __construct($UptDate)
    {
      $this->UptDate = $UptDate;
    }

}
