<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
            'status'=>0,
            'delivery_date'=>now(),
            'total'=>0,
            'user_id' => User::all()->random()->id,//lấy danh sách user rồi chọn ngẫu nhiên id để thêm vào bảng articles
        ];
    }
}
