<?php

class SalariesType
{

    /**
     * @var SalaryType $Salary
     * @access public
     */
    public $Salary = null;

    /**
     * @param SalaryType $Salary
     * @access public
     */
    public function __construct($Salary)
    {
      $this->Salary = $Salary;
    }

}
