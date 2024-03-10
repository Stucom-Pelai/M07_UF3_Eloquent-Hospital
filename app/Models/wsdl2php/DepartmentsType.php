<?php

class DepartmentsType
{

    /**
     * @var DepartmentType $Department
     * @access public
     */
    public $Department = null;

    /**
     * @param DepartmentType $Department
     * @access public
     */
    public function __construct($Department)
    {
      $this->Department = $Department;
    }

}
