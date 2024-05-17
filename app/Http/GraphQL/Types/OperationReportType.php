<?php

namespace App\Http\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class OperationReportType extends GraphQLType
{
    protected $attributes = [
        'name' => 'OperationReport',
        'description' => 'An operation report for a patient',
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The ID of the operation report',
            ],
            'patient_id' => [
                'type' => Type::int(),
                'description' => 'The ID of the patient associated with the operation report',
            ],
            'description' => [
                'type' => Type::string(),
                'description' => 'The description of the operation report',
            ],
            'doctor_id' => [
                'type' => Type::int(),
                'description' => 'The ID of the doctor associated with the operation report',
            ],
            'status' => [
                'type' => Type::string(),
                'description' => 'The status of the operation report',
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'The date the operation report was created',
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'The date the operation report was last updated',
            ],
        ];
    }
}
