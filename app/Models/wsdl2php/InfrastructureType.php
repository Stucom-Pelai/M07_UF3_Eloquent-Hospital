<?php

class InfrastructureType
{

    /**
     * @var WingsType $Wings
     * @access public
     */
    public $Wings = null;

    /**
     * @param WingsType $Wings
     * @access public
     */
    public function __construct($Wings)
    {
      $this->Wings = $Wings;
    }

}
