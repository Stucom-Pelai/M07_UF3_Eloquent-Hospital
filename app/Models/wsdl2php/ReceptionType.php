<?php

class ReceptionType
{

    /**
     * @var AppointmentType $Appointment
     * @access public
     */
    public $Appointment = null;

    /**
     * @param AppointmentType $Appointment
     * @access public
     */
    public function __construct($Appointment)
    {
      $this->Appointment = $Appointment;
    }

}
