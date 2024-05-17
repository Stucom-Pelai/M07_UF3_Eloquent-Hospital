<?php

namespace App\Http\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PaymentType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Payment',
        'description' => 'A payment made by a patient',
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The ID of the payment',
            ],
            'patient_id' => [
                'type' => Type::int(),
                'description' => 'The ID of the patient associated with the payment',
            ],
            'bill_id' => [
                'type' => Type::int(),
                'description' => 'The ID of the bill associated with the payment',
            ],
            'amount' => [
                'type' => Type::float(),
                'description' => 'The amount of the payment',
            ],
            'status' => [
                'type' => Type::string(),
                'description' => 'The status of the payment',
            ],
            'mode' => [
                'type' => Type::string(),
                'description' => 'The mode of payment',
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'The date the payment was created',
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'The date the payment was last updated',
            ],
        ];
    }
}
