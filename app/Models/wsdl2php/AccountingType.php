<?php

class AccountingType
{

    /**
     * @var ExpendituresType $Expenditures
     * @access public
     */
    public $Expenditures = null;

    /**
     * @var IncomesType $Incomes
     * @access public
     */
    public $Incomes = null;

    /**
     * @param ExpendituresType $Expenditures
     * @param IncomesType $Incomes
     * @access public
     */
    public function __construct($Expenditures, $Incomes)
    {
      $this->Expenditures = $Expenditures;
      $this->Incomes = $Incomes;
    }

}
