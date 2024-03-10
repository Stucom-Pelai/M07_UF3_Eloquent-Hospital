<?php

class BedsType
{

    /**
     * @var BedType $Bed
     * @access public
     */
    public $Bed = null;

    /**
     * @param BedType $Bed
     * @access public
     */
    public function __construct($Bed)
    {
      $this->Bed = $Bed;
    }

}
