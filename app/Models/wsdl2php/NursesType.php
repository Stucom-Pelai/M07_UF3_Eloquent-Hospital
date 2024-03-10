<?php

class NursesType
{

    /**
     * @var NurseType $Nurse
     * @access public
     */
    public $Nurse = null;

    /**
     * @param NurseType $Nurse
     * @access public
     */
    public function __construct($Nurse)
    {
      $this->Nurse = $Nurse;
    }

}
