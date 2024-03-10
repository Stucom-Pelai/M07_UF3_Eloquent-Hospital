<?php

class WingsType
{

    /**
     * @var WingType $Wing
     * @access public
     */
    public $Wing = null;

    /**
     * @param WingType $Wing
     * @access public
     */
    public function __construct($Wing)
    {
      $this->Wing = $Wing;
    }

}
