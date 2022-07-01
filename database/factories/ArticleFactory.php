<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
//        $tag =  factory(Product::class)->create();
        return [
            'user_id' => User::all()->random()->id,//lấy danh sách user rồi chọn ngẫu nhiên id để thêm vào bảng articles
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph(rand(3, 5)),

        ];
    }
}
