<?php

namespace App\GraphQL\Queries\Team;

use App\Models\Team;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class TeamQuery extends Query
{
    protected $attributes = [
        'name' => 'team',
    ];

    public function type(): Type
    {
        return GraphQL::type('Team');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        // 見つからなかった場合エラーを返したい
        return Team::findOrFail($args['id']);
    }
}
