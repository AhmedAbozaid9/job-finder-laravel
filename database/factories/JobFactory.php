<?php
namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'            => $this->faker->jobTitle(),
            'description'      => $this->faker->paragraphs(3, true),
            'location'         => $this->faker->city(),
            'category'         => $this->faker->randomElement(['IT', 'Finance', 'Healthcare', 'Education', 'Marketing']),
            'salary'           => $this->faker->numberBetween(40_000, 120_000),
            'type'             => $this->faker->randomElement(Job::$types),
            'status'           => $this->faker->randomElement(Job::$statuses),
            'experience_level' => $this->faker->randomElement(Job::$experience_levels),
        ];
    }
}
