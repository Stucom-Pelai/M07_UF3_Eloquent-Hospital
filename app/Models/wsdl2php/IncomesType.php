<?php

class IncomesType
{

    /**
     * @var PatientBillType $PatientBill
     * @access public
     */
    public $PatientBill = null;

    /**
     * @param PatientBillType $PatientBill
     * @access public
     */
    public function __construct($PatientBill)
    {
      $this->PatientBill = $PatientBill;
    }

}
