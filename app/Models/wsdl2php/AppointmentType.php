<?php

class AppointmentType
{

    /**
     * @var AppointedDoctorType $AppointedDoctor
     * @access public
     */
    public $AppointedDoctor = null;

    /**
     * @var AppointedPatientType $AppointedPatient
     * @access public
     */
    public $AppointedPatient = null;

    /**
     * @var AppointedDateType $AppointedDate
     * @access public
     */
    public $AppointedDate = null;

    /**
     * @var AppointedTimeType $AppointedTime
     * @access public
     */
    public $AppointedTime = null;

    /**
     * @var string $comments
     * @access public
     */
    public $comments = null;

    /**
     * @var anonymous58 $AppointmentID
     * @access public
     */
    public $AppointmentID = null;

    /**
     * @param AppointedDoctorType $AppointedDoctor
     * @param AppointedPatientType $AppointedPatient
     * @param AppointedDateType $AppointedDate
     * @param AppointedTimeType $AppointedTime
     * @param string $comments
     * @param anonymous58 $AppointmentID
     * @access public
     */
    public function __construct($AppointedDoctor, $AppointedPatient, $AppointedDate, $AppointedTime, $comments, $AppointmentID)
    {
      $this->AppointedDoctor = $AppointedDoctor;
      $this->AppointedPatient = $AppointedPatient;
      $this->AppointedDate = $AppointedDate;
      $this->AppointedTime = $AppointedTime;
      $this->comments = $comments;
      $this->AppointmentID = $AppointmentID;
    }

}
