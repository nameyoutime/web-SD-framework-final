<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $input = array("cate_a", "cate_b", "cate_c",'cate_d','cate_e','cate_f');
        $temp = $this->faker->unique()->numberBetween(1, 6);
        return [
            //
            'name' => $input[$temp],
            'description' => $this->faker->paragraph(rand(3, 5))
        ];
    }
}
