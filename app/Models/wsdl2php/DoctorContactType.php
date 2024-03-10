<?php

class DoctorContactType
{

    /**
     * @var string $DoctorAddress
     * @access public
     */
    public $DoctorAddress = null;

    /**
     * @var string $DoctorPhone
     * @access public
     */
    public $DoctorPhone = null;

    /**
     * @param string $DoctorAddress
     * @param string $DoctorPhone
     * @access public
     */
    public function __construct($DoctorAddress, $DoctorPhone)
    {
      $this->DoctorAddress = $DoctorAddress;
      $this->DoctorPhone = $DoctorPhone;
    }

}
