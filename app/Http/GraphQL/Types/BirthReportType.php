<?php

namespace App\Http\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class BirthReportType extends GraphQLType
{
    protected $attributes = [
        'name' => 'BirthReport',
        'description' => 'A type for birth reports',
        'model' => \App\Models\BirthReport::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The ID of the birth report',
            ],
            'description' => [
                'type' => Type::string(),
                'description' => 'The description of the birth report',
            ],
            'patient_id' => [
                'type' => Type::string(),
                'description' => 'patient id',
            ],
            'doctor_id' => [
                'type' => Type::string(),
                'description' => 'doctor id',
            ],
            'gender' => [
                'type' => Type::string(),
                'description' => 'The gender recorded in the birth report',
            ],
            'patient' => [
                'type' => GraphQL::type('Patient'),
                'description' => 'The patient associated with the birth report',
                'resolve' => function ($root, $args) {
                    return $root->patient;
                },
            ],
        ];
    }
}
