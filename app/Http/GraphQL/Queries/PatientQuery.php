<?php
namespace App\Http\GraphQL\Queries;
use GraphQL\Type\Definition\Type;
use App\Models\Patient;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class PatientQuery extends Query
{

    protected $attributes = [
        'name' => 'patients'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Patient'));
    }

    public function args(): array
    {
        return [
            'id' => ['name' => 'id', 'type' => Type::int()],
            'name' => ['name' => 'name', 'type' => Type::string()]
        ];
    }

    public function resolve($args)
    {
        $query = Patient::query();

        if (isset($args['id'])) {
            $query->where('id', $args['id']);
        }

        if (isset($args['name'])) {
            $query->where('name', 'like', '%' . $args['name'] . '%');
        }

        return $query->get();
    }
}
