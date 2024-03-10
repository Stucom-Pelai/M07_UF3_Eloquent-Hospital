<?php

class GetPatient
{

    /**
     * @var int $patientId
     * @access public
     */
    public $patientId = null;

    /**
     * @param int $patientId
     * @access public
     */
    public function __construct($patientId)
    {
      $this->patientId = $patientId;
    }

}
