<?php

namespace App\Http\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PatientCheckUpType extends GraphQLType
{
    protected $attributes = [
        'name' => 'PatientCheckUp',
        'description' => 'A check-up report for a patient',
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The ID of the patient check-up',
            ],
            'patient_id' => [
                'type' => Type::int(),
                'description' => 'The ID of the patient associated with the check-up',
            ],
            'doctor_id' => [
                'type' => Type::int(),
                'description' => 'The ID of the doctor associated with the check-up',
            ],
            'description' => [
                'type' => Type::string(),
                'description' => 'The description of the check-up',
            ],
            'status' => [
                'type' => Type::string(),
                'description' => 'The status of the check-up',
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'The date the check-up was created',
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'The date the check-up was last updated',
            ],
        ];
    }
}
