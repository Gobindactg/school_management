<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Marks>
 */
class student_markFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'st_roll'=>$this->faker->numberBetween(1, 999),
            'name'=>$this->faker->name(),
            'class' => $this->faker->numberBetween(1, 10),
            'st_group' => $this->faker->randomElement(['a', 'b', 'c']),
            'st_year' => $this->faker->numberBetween(2019, 2022),
            'user_id' => $this->faker->numberBetween(100,300),
            'student_info_id' => $this->faker->numberBetween(100,300),
        ];
    }
}
