<?php

class NurseType
{

    /**
     * @var string $NurseName
     * @access public
     */
    public $NurseName = null;

    /**
     * @var NurseContactType $NurseContact
     * @access public
     */
    public $NurseContact = null;

    /**
     * @var anonymous27 $NurseID
     * @access public
     */
    public $NurseID = null;

    /**
     * @var IDREF $WorksIn
     * @access public
     */
    public $WorksIn = null;

    /**
     * @var IDREF $InspectWard
     * @access public
     */
    public $InspectWard = null;

    /**
     * @param string $NurseName
     * @param NurseContactType $NurseContact
     * @param anonymous27 $NurseID
     * @param IDREF $WorksIn
     * @param IDREF $InspectWard
     * @access public
     */
    public function __construct($NurseName, $NurseContact, $NurseID, $WorksIn, $InspectWard)
    {
      $this->NurseName = $NurseName;
      $this->NurseContact = $NurseContact;
      $this->NurseID = $NurseID;
      $this->WorksIn = $WorksIn;
      $this->InspectWard = $InspectWard;
    }

}
