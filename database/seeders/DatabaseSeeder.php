<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Role;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();
        Role::factory(3)->create();
//        User::factory(10)->create();
        Category::factory(3)->create();
        Profile::factory(10)->create();
        Tag::factory(10)->create();
        Article::factory(10)->create()->each(function ($article) {
            $ids = range(1, 10);
            shuffle($ids);//trộn
            $sliced = array_slice($ids, 1, 3);
            $article->tags()->attach($sliced);

        });
        Order::factory(10)->create();
        Product::factory(10)->create()->each(function ($product) {
//            $product = factory(Product::class);
//            $product = Product::factory(10)->create();
            $ids = range(1, 10);
            shuffle($ids);//trộn
            $sliced = array_slice($ids, 1, 1);

            $product->orders()->attach($sliced);


        });


    }
}
