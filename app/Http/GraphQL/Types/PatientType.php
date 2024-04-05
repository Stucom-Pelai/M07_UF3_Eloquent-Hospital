<?php
namespace App\Http\GraphQL\Types;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PatientType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Patient',
        'description' => 'patients from hospital',
        'model' => \App\Models\patient::class
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
            ]
        ];
    }
}
