<?php

namespace App\GraphQL\Queries\Gymnast;

use App\Models\Gymnast;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class GymnastsQuery extends Query
{
    protected $attributes = [
        'name' => 'gymnasts'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Gymnast'));
    }

    public function resolve($root, $args)
    {
        return Gymnast::all();
    }
}
