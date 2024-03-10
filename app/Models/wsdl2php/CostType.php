<?php

class CostType
{

    /**
     * @var float $TotalCost
     * @access public
     */
    public $TotalCost = null;

    /**
     * @param float $TotalCost
     * @access public
     */
    public function __construct($TotalCost)
    {
      $this->TotalCost = $TotalCost;
    }

}
