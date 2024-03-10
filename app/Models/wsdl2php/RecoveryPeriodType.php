<?php

class RecoveryPeriodType
{

    /**
     * @var date $dateAdmitted
     * @access public
     */
    public $dateAdmitted = null;

    /**
     * @var date $dateDischarged
     * @access public
     */
    public $dateDischarged = null;

    /**
     * @param date $dateAdmitted
     * @param date $dateDischarged
     * @access public
     */
    public function __construct($dateAdmitted, $dateDischarged)
    {
      $this->dateAdmitted = $dateAdmitted;
      $this->dateDischarged = $dateDischarged;
    }

}
