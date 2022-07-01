<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $input = array("iphone 3", "iphone 4", "iphone 5",'samsung a01','samsung a02','samsung a03','samsung a04');

        return [
            //
            'name'=>$input[array_rand($input,1)],
            'description' => $this->faker->paragraphs(3, 5),
            'quantity' => $this->faker->numberBetween(1, 99),
            'price'=>$this->faker->numberBetween(1000,10000),
            'status'=>0,
            'image'=>'/img/default-product-image.png',
            'cate_id'=>Category::all()->random()->id,


        ];
    }
}
