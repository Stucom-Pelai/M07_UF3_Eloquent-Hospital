<?php

class RoomType
{

    /**
     * @var BedsType $Beds
     * @access public
     */
    public $Beds = null;

    /**
     * @var anonymous12 $RoomID
     * @access public
     */
    public $RoomID = null;

    /**
     * @var anonymous13 $RoomSize
     * @access public
     */
    public $RoomSize = null;

    /**
     * @param BedsType $Beds
     * @param anonymous12 $RoomID
     * @param anonymous13 $RoomSize
     * @access public
     */
    public function __construct($Beds, $RoomID, $RoomSize)
    {
      $this->Beds = $Beds;
      $this->RoomID = $RoomID;
      $this->RoomSize = $RoomSize;
    }

}
