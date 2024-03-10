<?php

class WeightType
{

    /**
     * @var string $PatientWeight
     * @access public
     */
    public $PatientWeight = null;

    /**
     * @param string $PatientWeight
     * @access public
     */
    public function __construct($PatientWeight)
    {
      $this->PatientWeight = $PatientWeight;
    }

}
