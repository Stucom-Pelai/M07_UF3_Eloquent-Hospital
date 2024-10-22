<?php
namespace App\Http\GraphQL\Types;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;
use App\Models\Patient;

class PatientType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Patient',
        'description' => 'patients from hospital',
        'model' => Patient::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'id of patient'
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'name of patient'
            ],
            'email' => [
                'type' => Type::string(),
                'description' => 'email of patient'
            ],
            'phone' => [
                'type' => Type::string(),
                'description' => 'phone of patient'
            ],
            'address' => [
                'type' => Type::string(),
                'description' => 'address of patient'
            ],
            'gender' => [
                'type' => Type::string(),
                'description' => 'gender of patient'
            ],
            'age' => [
                'type' => Type::string(),
                'description' => 'age of patient'
            ],
            'bloodgroup' => [
                'type' => Type::string(),
                'description' => 'bloodgroup patient'
            ],
            'photo_path' => [
                'type' => Type::string(),
                'description' => 'url'
            ],
            'status' => [
                'type' => Type::string(),
                'description' => 'ENUM(admitted,discharge,pending)'
            ],
            'image' => [
                'type' => Type::string(),
                'description' => 'url image'
            ],
            'description' => [
                'type' => Type::string(),
                'description' => 'description of patient'
            ],
            'disease' => [
                'type' => Type::string(),
                'description' => 'disease of patient'
            ],
            'doctor' => [
                'type' => Type::string(),
                'description' => 'doctor from patient'
            ],
            'admit_date' => [
                'type' => Type::string(),
                'description' => 'admit date patient'
            ],
            'discharge_date' => [
                'type' => Type::string(),
                'description' => 'discharge date patient'
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'The date the patient was created',
                'resolve' => function ($model) {
                    return $model->created_at;
                }
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'The date the patient was last updated',
                'resolve' => function ($model) {
                    return $model->updated_at;
                }
            ],
            'delete_at' => [
                'type' => Type::string(),
                'description' => 'deleted patient date',
                'resolve' => function ($model) {
                    return $model->delete_at;
                }
            ],
            'appointments' => [
                'type' => Type::listOf(GraphQL::type('Appointment')),
                'description' => 'The appointments associated with the patient',
                'resolve' => function ($patient) {
                    return $patient->appointments;
                },
            ],
            'birth_reports' => [
                'type' => Type::listOf(GraphQL::type('BirthReport')),
                'description' => 'Birth reports associated with the patient',
                'resolve' => function ($patient) {
                    return $patient->birthReports;
                },
            ],
            'beds' => [
                'type' => Type::listOf(GraphQL::type('Bed')),
                'description' => 'beds associated with the patient',
                'resolve' => function ($patient) {
                    return $patient->beds;
                }
            ],
            'bills' => [
                'type' => Type::listOf(GraphQL::type('Bill')),
                'description' => 'bills associated with the patient',
                'resolve' => function ($patient){
                    return $patient->bills;
                }
            ],
            'operation_reports' => [
                'type' => Type::listOf(GraphQL::type('OperationReport')),
                'description' => 'operation reports associated with the patient',
                'resolve' => function($patient){
                    return $patient->operationReports;
                }
            ],
            'patient_check_up' => [
                'type' => Type::listOf(GraphQL::type('PatientCheckUp')),
                'description' => 'patient check up associated with the patient',
                'resolve' => function($patient){
                    return $patient->PatientCheckUp;
                }
            ],
            'payment' => [
                'type' => Type::listOf(GraphQL::type('Payment')),
                'description' => 'payment associeted with the pacient',
                'resolve' => function($patient){
                    return $patient->Payment;
                }
            ],
            'stay' => [
                'type' => Type::listOf(GraphQL::type('Stay')),
                'description' => 'stay associated with pacient',
                'resolve' => function($patient){
                    return $patient->Stay;
                }
            ]
        ];
    }
}
