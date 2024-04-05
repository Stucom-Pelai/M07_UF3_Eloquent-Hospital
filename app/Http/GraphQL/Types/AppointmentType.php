<?php
namespace App\Http\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use Rebing\GraphQL\Support\Facades\GraphQL;

class AppointmentType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Appointment',
        'description' => 'An appointment',
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The ID of the appointment',
            ],
            // Define other fields of the Appointment entity here
            'patient' => [
                'type' => GraphQL::type('Patient'),
                'description' => 'The patient associated with the appointment',
            ],
        ];
    }
}
