<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommoditiesCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'          =>  fake()->word,
            'description'   =>  fake()->realText($maxNbChars = 15, $indexSize = 2),
            'parent_id'     =>  rand(1, 100),
            'image'         =>  'public\images\placeholder1.png',
        ];
    }
}
