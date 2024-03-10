<?php

class RoomsType
{

    /**
     * @var RoomType $Room
     * @access public
     */
    public $Room = null;

    /**
     * @param RoomType $Room
     * @access public
     */
    public function __construct($Room)
    {
      $this->Room = $Room;
    }

}
