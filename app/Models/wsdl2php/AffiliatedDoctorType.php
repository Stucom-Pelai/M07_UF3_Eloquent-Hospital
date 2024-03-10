<?php

class AffiliatedDoctorType
{

    /**
     * @var IDREF $AffiliatedDoctorID
     * @access public
     */
    public $AffiliatedDoctorID = null;

    /**
     * @param IDREF $AffiliatedDoctorID
     * @access public
     */
    public function __construct($AffiliatedDoctorID)
    {
      $this->AffiliatedDoctorID = $AffiliatedDoctorID;
    }

}
