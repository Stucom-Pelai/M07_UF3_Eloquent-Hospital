<?php

class AffiliatedPatientType
{

    /**
     * @var IDREF $AffiliatedPatientID
     * @access public
     */
    public $AffiliatedPatientID = null;

    /**
     * @param IDREF $AffiliatedPatientID
     * @access public
     */
    public function __construct($AffiliatedPatientID)
    {
      $this->AffiliatedPatientID = $AffiliatedPatientID;
    }

}
