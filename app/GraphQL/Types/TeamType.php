<?php

namespace App\GraphQL\Types;

use App\Models\Team;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class TeamType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Team',
        'model' => Team::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'country' => [
                'type' => Type::nonNull(Type::string()),
            ],
            'gymnasts' => [
                'type' => Type::listOf(GraphQL::type('Gymnast')),
            ]
        ];
    }
}
