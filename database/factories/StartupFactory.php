<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Startup>
 */
class StartupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'website' => $this->faker->url,
            'email' => $this->faker->unique()->safeEmail,
            'Startup_Description_Short' => $this->faker->sentence,
            'location' => $this->faker->city,
            'Overview_desc' => $this->faker->paragraph,
            'NB_customers' => $this->faker->numberBetween(0, 1000),
            'date_launch' => $this->faker->year,
            'Businessmodel_pricing' => $this->faker->sentence,
            'Competitors' => $this->faker->word,
            'target_customer' => $this->faker->word,
            'assets' => $this->faker->word,
            'Tech_Stack' => $this->faker->word,
            'ARR' => $this->faker->randomFloat(2, 100, 10000),
            'Expenses' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'Traffic_Metrics' => "https://res.cloudinary.com/dli4titxf/image/upload/Traffic/real-time-website-traffic-dashboard",
            'Revenue_Metrics' => "http://res.cloudinary.com/dli4titxf/image/upload/Traffic/real-time-website-traffic-dashboard",
            'Traffic_Metrics_blur' => "http://res.cloudinary.com/dli4titxf/image/upload/e_blur:2000/Traffic/real-time-website-traffic-dashboard",
            'Revenue_Metrics_blur' => "http://res.cloudinary.com/dli4titxf/image/upload/e_blur:2000/Traffic/real-time-website-traffic-dashboard",
            'Video' => $this->faker->url,
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'categorie_id' => function () {
                return \App\Models\Category::factory()->create()->id;
            },
        ];
    }
}
