<?php

class DoctorType
{

    /**
     * @var string $DoctorName
     * @access public
     */
    public $DoctorName = null;

    /**
     * @var string $Speciality
     * @access public
     */
    public $Speciality = null;

    /**
     * @var RelantionshipT $Relantionship
     * @access public
     */
    public $Relantionship = null;

    /**
     * @var DoctorContactType $DoctorContact
     * @access public
     */
    public $DoctorContact = null;

    /**
     * @var anonymous21 $DoctorID
     * @access public
     */
    public $DoctorID = null;

    /**
     * @var IDREF $WorksIn
     * @access public
     */
    public $WorksIn = null;

    /**
     * @var IDREF $HeadOfDept
     * @access public
     */
    public $HeadOfDept = null;

    /**
     * @param string $DoctorName
     * @param string $Speciality
     * @param RelantionshipT $Relantionship
     * @param DoctorContactType $DoctorContact
     * @param anonymous21 $DoctorID
     * @param IDREF $WorksIn
     * @param IDREF $HeadOfDept
     * @access public
     */
    public function __construct($DoctorName, $Speciality, $Relantionship, $DoctorContact, $DoctorID, $WorksIn, $HeadOfDept)
    {
      $this->DoctorName = $DoctorName;
      $this->Speciality = $Speciality;
      $this->Relantionship = $Relantionship;
      $this->DoctorContact = $DoctorContact;
      $this->DoctorID = $DoctorID;
      $this->WorksIn = $WorksIn;
      $this->HeadOfDept = $HeadOfDept;
    }

}
