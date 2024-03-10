<?php

class PaymentType
{

    /**
     * @var anonymous69 $amount
     * @access public
     */
    public $amount = null;

    /**
     * @param anonymous69 $amount
     * @access public
     */
    public function __construct($amount)
    {
      $this->amount = $amount;
    }

}
