<?php

class PillType
{

    /**
     * @var string $PillName
     * @access public
     */
    public $PillName = null;

    /**
     * @var string $Instructions
     * @access public
     */
    public $Instructions = null;

    /**
     * @param string $PillName
     * @param string $Instructions
     * @access public
     */
    public function __construct($PillName, $Instructions)
    {
      $this->PillName = $PillName;
      $this->Instructions = $Instructions;
    }

}
