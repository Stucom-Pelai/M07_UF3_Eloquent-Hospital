<?php

class OrderType
{

    /**
     * @var CostType $Cost
     * @access public
     */
    public $Cost = null;

    /**
     * @var anonymous72 $OrderID
     * @access public
     */
    public $OrderID = null;

    /**
     * @var IDREFS $ForDepartment
     * @access public
     */
    public $ForDepartment = null;

    /**
     * @var date $OrderDate
     * @access public
     */
    public $OrderDate = null;

    /**
     * @param CostType $Cost
     * @param anonymous72 $OrderID
     * @param IDREFS $ForDepartment
     * @param date $OrderDate
     * @access public
     */
    public function __construct($Cost, $OrderID, $ForDepartment, $OrderDate)
    {
      $this->Cost = $Cost;
      $this->OrderID = $OrderID;
      $this->ForDepartment = $ForDepartment;
      $this->OrderDate = $OrderDate;
    }

}
