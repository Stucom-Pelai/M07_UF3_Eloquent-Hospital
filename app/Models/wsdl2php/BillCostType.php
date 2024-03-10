<?php

class BillCostType
{

    /**
     * @var float $amount
     * @access public
     */
    public $amount = null;

    /**
     * @param float $amount
     * @access public
     */
    public function __construct($amount)
    {
      $this->amount = $amount;
    }

}
