<?php

class PatientBillType
{

    /**
     * @var BillCostType $BillCost
     * @access public
     */
    public $BillCost = null;

    /**
     * @var anonymous76 $BillID
     * @access public
     */
    public $BillID = null;

    /**
     * @var IDREF $BilledPatient
     * @access public
     */
    public $BilledPatient = null;

    /**
     * @param BillCostType $BillCost
     * @param anonymous76 $BillID
     * @param IDREF $BilledPatient
     * @access public
     */
    public function __construct($BillCost, $BillID, $BilledPatient)
    {
      $this->BillCost = $BillCost;
      $this->BillID = $BillID;
      $this->BilledPatient = $BilledPatient;
    }

}
