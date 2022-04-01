<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // Personal Information
            'Full_Name' => $this->faker->name(),
            'DOB' => $this->faker->date(),
            'Birth_Certificate_No' => $this->faker->numberBetween(1000000000, 9999999999),

            'Fathers_Name' => $this->faker->name(),
            'Fathers_NID' => $this->faker->numberBetween(1000000000, 9999999999),
            'Fathers_Phone_No' => $this->faker->phoneNumber(),
            
            'Mothers_Name' => $this->faker->name(),
            'Mothers_NID' => $this->faker->numberBetween(1000000000, 9999999999),
            'Mothers_Phone_No' => $this->faker->phoneNumber(),

            'Religion' => $this->faker->randomElement(['Hindu', 'Muslim', 'Buddha', 'Christian']),
            'Address' => $this->faker->address(),
            'Gender' => $this->faker->randomElement(['male', 'female']),
            'Photo' => $this->faker->url(),


            // Academic Information
            'Roll' => $this->faker->numberBetween(1, 100),
            'Class' => $this->faker->numberBetween(1, 10),
            'Department' => $this->faker->randomElement(['Science', 'Business Studies', 'Arts', 'N/A']),
        ];
    }
}
