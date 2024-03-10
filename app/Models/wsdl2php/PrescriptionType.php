<?php

class PrescriptionType
{

    /**
     * @var PillType $Pill
     * @access public
     */
    public $Pill = null;

    /**
     * @param PillType $Pill
     * @access public
     */
    public function __construct($Pill)
    {
      $this->Pill = $Pill;
    }

}
