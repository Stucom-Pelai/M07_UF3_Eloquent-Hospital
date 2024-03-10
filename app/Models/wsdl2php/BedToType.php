<?php

class BedToType
{

    /**
     * @var IDREF $assignedBed
     * @access public
     */
    public $assignedBed = null;

    /**
     * @param IDREF $assignedBed
     * @access public
     */
    public function __construct($assignedBed)
    {
      $this->assignedBed = $assignedBed;
    }

}
