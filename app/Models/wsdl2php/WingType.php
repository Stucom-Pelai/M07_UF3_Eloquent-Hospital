<?php

class WingType
{

    /**
     * @var DepartmentsType $Departments
     * @access public
     */
    public $Departments = null;

    /**
     * @var WardsType $Wards
     * @access public
     */
    public $Wards = null;

    /**
     * @var anonymous4 $wingID
     * @access public
     */
    public $wingID = null;

    /**
     * @param DepartmentsType $Departments
     * @param WardsType $Wards
     * @param anonymous4 $wingID
     * @access public
     */
    public function __construct($Departments, $Wards, $wingID)
    {
      $this->Departments = $Departments;
      $this->Wards = $Wards;
      $this->wingID = $wingID;
    }

}
