<?php

class MiscellaneousOrdersType
{

    /**
     * @var OrderType $Order
     * @access public
     */
    public $Order = null;

    /**
     * @param OrderType $Order
     * @access public
     */
    public function __construct($Order)
    {
      $this->Order = $Order;
    }

}
