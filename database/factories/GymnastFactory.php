<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\Gymnast;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gymnast>
 */
class GymnastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Gymnast::class;

    public function definition()
    {
        $teamIDs = Team::all()->pluck('id')->toArray();
        // pluck(); Laravelの組み込みメソッド。指定したvalueのコレクションを生成できる。
        // ここではTeamモデルを全て取得し、valueが'id'のコレクションをarrayにぶち込んでいる。

        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(18, 28),
            'team_id' => $this->faker->randomElement($teamIDs)
        ];
    }
}
