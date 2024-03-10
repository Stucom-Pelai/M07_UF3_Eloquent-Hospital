<?php

class WardType
{

    /**
     * @var RoomsType $Rooms
     * @access public
     */
    public $Rooms = null;

    /**
     * @var anonymous9 $WardID
     * @access public
     */
    public $WardID = null;

    /**
     * @param RoomsType $Rooms
     * @param anonymous9 $WardID
     * @access public
     */
    public function __construct($Rooms, $WardID)
    {
      $this->Rooms = $Rooms;
      $this->WardID = $WardID;
    }

}
