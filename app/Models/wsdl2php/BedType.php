<?php

class BedType
{

    /**
     * @var anonymous16 $BedID
     * @access public
     */
    public $BedID = null;

    /**
     * @var anonymous17 $BedSize
     * @access public
     */
    public $BedSize = null;

    /**
     * @param anonymous16 $BedID
     * @param anonymous17 $BedSize
     * @access public
     */
    public function __construct($BedID, $BedSize)
    {
      $this->BedID = $BedID;
      $this->BedSize = $BedSize;
    }

}
