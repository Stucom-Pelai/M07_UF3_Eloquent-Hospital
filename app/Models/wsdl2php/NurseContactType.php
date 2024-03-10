<?php

class NurseContactType
{

    /**
     * @var string $NurseAddress
     * @access public
     */
    public $NurseAddress = null;

    /**
     * @var string[] $NursePhone
     * @access public
     */
    public $NursePhone = null;

    /**
     * @param string $NurseAddress
     * @param string[] $NursePhone
     * @access public
     */
    public function __construct($NurseAddress, $NursePhone)
    {
      $this->NurseAddress = $NurseAddress;
      $this->NursePhone = $NursePhone;
    }

}
