<?php

include_once('HospitalType.php');
include_once('InfrastructureType.php');
include_once('WingsType.php');
include_once('WingType.php');
include_once('DepartmentsType.php');
include_once('DepartmentType.php');
include_once('WardsType.php');
include_once('WardType.php');
include_once('RoomsType.php');
include_once('RoomType.php');
include_once('BedsType.php');
include_once('BedType.php');
include_once('StaffType.php');
include_once('DoctorsType.php');
include_once('DoctorType.php');
include_once('RelantionshipT.php');
include_once('DoctorContactType.php');
include_once('NursesType.php');
include_once('NurseType.php');
include_once('NurseContactType.php');
include_once('PatientsType.php');
include_once('PatientType.php');
include_once('SexType.php');
include_once('WeightType.php');
include_once('AgeType.php');
include_once('AttendedDeptType.php');
include_once('AttendedDoctorType.php');
include_once('BedToType.php');
include_once('RecoveryPeriodType.php');
include_once('PatientContactType.php');
include_once('HistoryType.php');
include_once('RecordType.php');
include_once('AffiliatedPatientType.php');
include_once('PatientStateType.php');
include_once('HistoryUpdateType.php');
include_once('UpdateDateType.php');
include_once('UpdateTimeType.php');
include_once('AffiliatedDoctorType.php');
include_once('AffiliatedDepartType.php');
include_once('PrescriptionType.php');
include_once('PillType.php');
include_once('ReceptionType.php');
include_once('AppointmentType.php');
include_once('AppointedDoctorType.php');
include_once('AppointedPatientType.php');
include_once('AppointedDateType.php');
include_once('AppointedTimeType.php');
include_once('AccountingType.php');
include_once('ExpendituresType.php');
include_once('SalariesType.php');
include_once('SalaryType.php');
include_once('PaymentType.php');
include_once('MiscellaneousOrdersType.php');
include_once('OrderType.php');
include_once('CostType.php');
include_once('IncomesType.php');
include_once('PatientBillType.php');
include_once('BillCostType.php');
include_once('GetDepartment.php');
include_once('GetDepartmentResponse.php');
include_once('GetPatient.php');
include_once('GetPatientResponse.php');

class HospitalService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'HospitalType' => '\HospitalType',
      'InfrastructureType' => '\InfrastructureType',
      'WingsType' => '\WingsType',
      'WingType' => '\WingType',
      'DepartmentsType' => '\DepartmentsType',
      'DepartmentType' => '\DepartmentType',
      'WardsType' => '\WardsType',
      'WardType' => '\WardType',
      'RoomsType' => '\RoomsType',
      'RoomType' => '\RoomType',
      'BedsType' => '\BedsType',
      'BedType' => '\BedType',
      'StaffType' => '\StaffType',
      'DoctorsType' => '\DoctorsType',
      'DoctorType' => '\DoctorType',
      'RelantionshipT' => '\RelantionshipT',
      'DoctorContactType' => '\DoctorContactType',
      'NursesType' => '\NursesType',
      'NurseType' => '\NurseType',
      'NurseContactType' => '\NurseContactType',
      'PatientsType' => '\PatientsType',
      'PatientType' => '\PatientType',
      'SexType' => '\SexType',
      'WeightType' => '\WeightType',
      'AgeType' => '\AgeType',
      'AttendedDeptType' => '\AttendedDeptType',
      'AttendedDoctorType' => '\AttendedDoctorType',
      'BedToType' => '\BedToType',
      'RecoveryPeriodType' => '\RecoveryPeriodType',
      'PatientContactType' => '\PatientContactType',
      'HistoryType' => '\HistoryType',
      'RecordType' => '\RecordType',
      'AffiliatedPatientType' => '\AffiliatedPatientType',
      'PatientStateType' => '\PatientStateType',
      'HistoryUpdateType' => '\HistoryUpdateType',
      'UpdateDateType' => '\UpdateDateType',
      'UpdateTimeType' => '\UpdateTimeType',
      'AffiliatedDoctorType' => '\AffiliatedDoctorType',
      'AffiliatedDepartType' => '\AffiliatedDepartType',
      'PrescriptionType' => '\PrescriptionType',
      'PillType' => '\PillType',
      'ReceptionType' => '\ReceptionType',
      'AppointmentType' => '\AppointmentType',
      'AppointedDoctorType' => '\AppointedDoctorType',
      'AppointedPatientType' => '\AppointedPatientType',
      'AppointedDateType' => '\AppointedDateType',
      'AppointedTimeType' => '\AppointedTimeType',
      'AccountingType' => '\AccountingType',
      'ExpendituresType' => '\ExpendituresType',
      'SalariesType' => '\SalariesType',
      'SalaryType' => '\SalaryType',
      'PaymentType' => '\PaymentType',
      'MiscellaneousOrdersType' => '\MiscellaneousOrdersType',
      'OrderType' => '\OrderType',
      'CostType' => '\CostType',
      'IncomesType' => '\IncomesType',
      'PatientBillType' => '\PatientBillType',
      'BillCostType' => '\BillCostType',
      'GetDepartment' => '\GetDepartment',
      'GetDepartmentResponse' => '\GetDepartmentResponse',
      'GetPatient' => '\GetPatient',
      'GetPatientResponse' => '\GetPatientResponse');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'Hospital.wsdl')
    {
      foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
  
  parent::__construct($wsdl, $options);
    }

    /**
     * @param UNKNOWN $parameters
     * @access public
     * @return UNKNOWN
     */
    public function getDepartment($parameters)
    {
      return $this->__soapCall('getDepartment', array($parameters));
    }

    /**
     * @param UNKNOWN $parameters
     * @access public
     * @return UNKNOWN
     */
    public function getPatient($parameters)
    {
      return $this->__soapCall('getPatient', array($parameters));
    }

}
