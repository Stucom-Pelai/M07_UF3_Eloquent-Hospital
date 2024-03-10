<?php

class AppointedTimeType
{

    /**
     * @var time $AptTime
     * @access public
     */
    public $AptTime = null;

    /**
     * @param time $AptTime
     * @access public
     */
    public function __construct($AptTime)
    {
      $this->AptTime = $AptTime;
    }

}
