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
            'doctor_id' => [
                'type' => Type::INT(),
                'description' => 'The patient associated with the appointment',
            ],
            'intime' => [
                'type' => Type::string(),
                'description' => 'intime'
            ],
            'outtime' => [
                'type' => Type::string(),
                'description' => 'out time'
            ],
            'status' => [
                'type' => Type::string(),
                'description' => 'status appointment'
            ],
            'description' => [
                'type' => Type::string(),
                'description' => 'description appointment'
            ],
            'prescription' => [
                'type' => Type::string(),
                'description' => 'prescription appointment'
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'created date'
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'updated date'
            ],
        ];
    }
}
