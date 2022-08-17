<?php


namespace App\GraphQL\Types;

use App\Models\Gymnast;
use App\GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class GymnastTYpe extends GraphQLType
{
    protected $attributes = [
        'name' => 'Gymnast',
        'model' => Gymnast::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'name' => [
                'type' => TYpe::nonNull(Type::string()),
            ],
            'age' => [
                'type' => Type::nonNull(Type::integer()),
            ],
            'team' => [
                'type' => GraphQL::type('Team'),
            ]
        ];
    }
}
