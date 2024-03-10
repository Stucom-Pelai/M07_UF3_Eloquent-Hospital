<?php

class UpdateTimeType
{

    /**
     * @var time $UptTime
     * @access public
     */
    public $UptTime = null;

    /**
     * @param time $UptTime
     * @access public
     */
    public function __construct($UptTime)
    {
      $this->UptTime = $UptTime;
    }

}
