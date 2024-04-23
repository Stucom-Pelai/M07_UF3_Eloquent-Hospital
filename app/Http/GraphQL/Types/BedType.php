<?php

namespace App\Http\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use Rebing\GraphQL\Support\Facades\GraphQL;

class BedType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Bed',
        'description' => 'A bed',
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The ID of the bed',
            ],
            'room_id' => [
                'type' => Type::int(),
                'description' => 'The ID of the room where the bed is located',
            ],
            'patient_id' => [
                'type' => Type::int(),
                'description' => 'The ID of the patient assigned to the bed',
            ],
            'status' => [
                'type' => Type::string(),
                'description' => 'The status of the bed',
            ],
            'size' => [
                'type' => Type::string(),
                'description' => 'The size of the bed',
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'The date the bed was created',
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'The date the bed was last updated',
            ],
        ];
    }
}
