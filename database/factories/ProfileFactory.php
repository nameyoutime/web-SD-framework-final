<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            //
            'full_name' => $this->faker->name(),
            'address' => $this->faker->paragraphs(3, 5),
            'birthday' => $this->faker->date(),
//            'avatar' => $this->faker->name(),
            'avatar' => 'https://i.pinimg.com/736x/16/b2/e2/16b2e2579118bf6fba3b56523583117f.jpg',


            'user_id' => User::factory()->create()->id
        ];
    }
}
