<?php

class GetDepartment
{

    /**
     * @var int $departmentId
     * @access public
     */
    public $departmentId = null;

    /**
     * @param int $departmentId
     * @access public
     */
    public function __construct($departmentId)
    {
      $this->departmentId = $departmentId;
    }

}
