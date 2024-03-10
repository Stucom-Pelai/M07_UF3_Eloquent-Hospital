<?php

class AgeType
{

    /**
     * @var int $PatientAge
     * @access public
     */
    public $PatientAge = null;

    /**
     * @param int $PatientAge
     * @access public
     */
    public function __construct($PatientAge)
    {
      $this->PatientAge = $PatientAge;
    }

}
