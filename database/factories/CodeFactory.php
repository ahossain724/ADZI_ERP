<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code_type' => fake()->code_type(),
            'code' => fake()->code(),
            'detailed_description' => fake()->detailed_description(),
            'alternate_code' => fake()->alternate_code(),
            'active' => fake()->active(),
            'team' => fake()->team(),
            'property_list' => fake()->property_list(),
        ];
    }
}
