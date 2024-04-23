<?php

namespace App\Http\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class StayType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Stay',
        'description' => 'A stay of a patient in a hospital room',
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The ID of the stay',
            ],
            'patient_id' => [
                'type' => Type::int(),
                'description' => 'The ID of the patient associated with the stay',
            ],
            'room_id' => [
                'type' => Type::int(),
                'description' => 'The ID of the room where the patient stayed',
            ],
            'start_time' => [
                'type' => Type::string(),
                'description' => 'The start time of the stay',
            ],
            'end_time' => [
                'type' => Type::string(),
                'description' => 'The end time of the stay',
            ],
            'status' => [
                'type' => Type::string(),
                'description' => 'The status of the stay',
            ],
            'amount' => [
                'type' => Type::float(),
                'description' => 'The amount charged for the stay',
            ],
            'discount' => [
                'type' => Type::float(),
                'description' => 'The discount applied to the stay',
            ],
            'total' => [
                'type' => Type::float(),
                'description' => 'The total amount paid for the stay',
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'The date the stay was created',
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'The date the stay was last updated',
            ],
        ];
    }
}
