<?php

class HistoryType
{

    /**
     * @var RecordType $Record
     * @access public
     */
    public $Record = null;

    /**
     * @param RecordType $Record
     * @access public
     */
    public function __construct($Record)
    {
      $this->Record = $Record;
    }

}
