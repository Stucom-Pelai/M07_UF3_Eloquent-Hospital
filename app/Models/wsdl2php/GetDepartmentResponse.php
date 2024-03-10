<?php

class GetDepartmentResponse
{

    /**
     * @var DepartmentType $department
     * @access public
     */
    public $department = null;

    /**
     * @param DepartmentType $department
     * @access public
     */
    public function __construct($department)
    {
      $this->department = $department;
    }

}
