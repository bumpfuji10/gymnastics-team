<?php

namespace App\GraphQL\Queries\Team;

use App\Models\Team;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class TeamsQuery extends Query
{
    protected $attributes = [
        'name' => 'teams',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Team'));
    }

    public function resolve($root, $args)
    {
        return Team::all();
    }
}
