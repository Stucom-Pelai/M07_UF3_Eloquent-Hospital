<?php

class ExpendituresType
{

    /**
     * @var SalariesType $Salaries
     * @access public
     */
    public $Salaries = null;

    /**
     * @var MiscellaneousOrdersType $MiscellaneousOrders
     * @access public
     */
    public $MiscellaneousOrders = null;

    /**
     * @param SalariesType $Salaries
     * @param MiscellaneousOrdersType $MiscellaneousOrders
     * @access public
     */
    public function __construct($Salaries, $MiscellaneousOrders)
    {
      $this->Salaries = $Salaries;
      $this->MiscellaneousOrders = $MiscellaneousOrders;
    }

}
