<?php

class AffiliatedDepartType
{

    /**
     * @var IDREF $AffiliatedDepartID
     * @access public
     */
    public $AffiliatedDepartID = null;

    /**
     * @param IDREF $AffiliatedDepartID
     * @access public
     */
    public function __construct($AffiliatedDepartID)
    {
      $this->AffiliatedDepartID = $AffiliatedDepartID;
    }

}
