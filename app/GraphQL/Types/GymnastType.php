<?php

namespace App\GraphQL\Types;

use App\Models\Gymnast;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class GymnastType extends GraphQLType
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
                'type' => Type::nonNull(Type::string()),
            ],
            'age' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'team' => [
                'type' => GraphQL::type('Team'),
            ]
        ];
    }
}
