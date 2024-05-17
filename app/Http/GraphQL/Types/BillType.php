<?php

namespace App\Http\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use Rebing\GraphQL\Support\Facades\GraphQL;

class BillType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Bill',
        'description' => 'A bill for a patient',
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The ID of the bill',
            ],
            'patients_id' => [
                'type' => Type::int(),
                'description' => 'The ID of the patient associated with the bill',
            ],
            'amount' => [
                'type' => Type::float(),
                'description' => 'The amount of the bill',
            ],
            'status' => [
                'type' => Type::string(),
                'description' => 'The status of the bill',
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'The date the bill was created',
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'The date the bill was last updated',
            ],
        ];
    }
}
