<?php

class SalaryType
{

    /**
     * @var PaymentType $Payment
     * @access public
     */
    public $Payment = null;

    /**
     * @var anonymous67 $SalaryID
     * @access public
     */
    public $SalaryID = null;

    /**
     * @var IDREF $staffID
     * @access public
     */
    public $staffID = null;

    /**
     * @param PaymentType $Payment
     * @param anonymous67 $SalaryID
     * @param IDREF $staffID
     * @access public
     */
    public function __construct($Payment, $SalaryID, $staffID)
    {
      $this->Payment = $Payment;
      $this->SalaryID = $SalaryID;
      $this->staffID = $staffID;
    }

}
