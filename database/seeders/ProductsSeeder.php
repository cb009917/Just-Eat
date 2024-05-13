<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

// sample products array with all the fields
        $dishes = array(
            array(
                'category_id' => 1,
                'name' => 'Family Feast Vegetarian Box',
                'slug' => 'family-feast-vegetarian-box',
                'price' => 29.99,
                'description' => 'A vegetarian meal kit perfect for a family of four. Includes fresh vegetables, grains, and spices.',
                'status' => 1,
                'meta_title' => 'Vegetarian Family Feast',
                'meta_description' => 'Enjoy a hearty vegetarian meal with our specially curated meal kit. Perfect for family dinners!',
                'meta_keywords' => 'meal kit, vegetarian, family box',

            ),
            array(
                'category_id' => 2,
                'name' => 'Classic Chicken Dinner',
                'slug' => 'classic-chicken-dinner',
                'price' => 24.99,
                'description' => 'Everything you need to cook a delicious chicken dinner with sides. Feeds 2-3 people.',
                'status' => 1,
                'meta_title' => 'Easy Chicken Dinner Meal Kit',
                'meta_description' => 'Whip up a quick and tasty chicken dinner with our easy-to-follow meal kit.',
                'meta_keywords' => 'chicken, meal kit, easy dinner'
            ),
            array(
                'category_id' => 3,
                'name' => 'Italian Pasta Night Kit',
                'slug' => 'italian-pasta-night-kit',
                'price' => 19.99,
                'description' => 'Create an authentic Italian pasta dish with high-quality ingredients sourced directly from Italy.',
                'status' => 1,
                'meta_title' => 'Italian Pasta Night',
                'meta_description' => 'Bring Italy to your table with our Italian Pasta Night Kit, complete with all ingredients and a recipe.',
                'meta_keywords' => 'pasta, Italian, meal kit'
            ),
            array(
                'category_id' => 4,
                'name' => 'Keto-Friendly Avocado Bowl',
                'slug' => 'keto-friendly-avocado-bowl',
                'price' => 21.99,
                'description' => 'A low-carb, keto-friendly meal featuring fresh avocados, lean proteins, and healthy fats.',
                'status' => 1,
                'meta_title' => 'Keto Avocado Bowl',
                'meta_description' => 'Stay on track with our delicious, keto-friendly avocado bowl meal kit.',
                'meta_keywords' => 'keto, healthy, meal kit'
            ),
            array(
                'category_id' => 5,
                'name' => 'Vegan Curry Delight Kit',
                'slug' => 'vegan-curry-delight-kit',
                'price' => 23.99,
                'description' => 'A vibrant, flavorful vegan curry kit with organic ingredients and exotic spices.',
                'status' => 1,
                'meta_title' => 'Vegan Curry Meal Kit',
                'meta_description' => 'Explore bold flavors with our Vegan Curry Delight Kit, easy to cook and utterly delicious.',
                'meta_keywords' => 'vegan, curry, meal kit'
            ),
        );










foreach ($dishes as $dish) {
  \App\Models\products::create([
      'name' => $dish['name'],
      'slug' => \Illuminate\Support\Str::slug($dish['name']),
      'description' => $dish['description'],
        'status' => $dish['status'],
        'meta_title' => $dish['meta_title'],
        'meta_description' => $dish['meta_description'],
        'meta_keywords' => $dish['meta_keywords'],
        'category_id' => $dish['category_id'],

      'price' => $dish['price'],
  ]);
}

    }
}



