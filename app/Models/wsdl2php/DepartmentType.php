<?php
namespace App\Models\wsdl2php;

class DepartmentType
{

    /**
     * @var string $DepartmentName
     * @access public
     */
    public $DepartmentName = null;

    /**
     * @var string $DepartmentPhone
     * @access public
     */
    public $DepartmentPhone = null;

    /**
     * @var int $DeptartID
     * @access public
     */
    public $DeptartID = null;

    /**
     * @var int $useWard
     * @access public
     */
    public $useWard = null;

    /**
     * @param string $DepartmentName
     * @param string $DepartmentPhone
     * @param int $DeptartID
     * @param int $useWard
     * @access public
     */
    public function __construct($DepartmentName, $DepartmentPhone, $DeptartID, $useWard)
    {
      $this->DepartmentName = $DepartmentName;
      $this->DepartmentPhone = $DepartmentPhone;
      $this->DeptartID = $DeptartID;
      $this->useWard = $useWard;
    }

}
