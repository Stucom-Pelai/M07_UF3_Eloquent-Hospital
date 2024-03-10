<?php

class WardsType
{

    /**
     * @var WardType $Ward
     * @access public
     */
    public $Ward = null;

    /**
     * @param WardType $Ward
     * @access public
     */
    public function __construct($Ward)
    {
      $this->Ward = $Ward;
    }

}
