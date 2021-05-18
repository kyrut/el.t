<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([
            [
                'parent_id' => 0,
                'slug' => \Str::slug('Без категории','_'),
                'title' => 'Без категории',
                'description' => 'Без категории',
                'published' => 0,
                'created_at' => '2021-04-17 16:22:44'
            ],
            [
                'parent_id' => 1,
                'slug' => \Str::slug('Монтаж электропроводки','_'),
                'title' => 'Монтаж электропроводки',
                'description' => 'Монтаж электропроводки',
                'published' => 1,
                'created_at' => '2021-04-17 16:23:14'
            ],
            [
                'parent_id' => 1,
                'slug' => \Str::slug('Установка и замена','_'),
                'title' => 'Установка и замена',
                'description' => 'Установка и замена',
                'published' => 1,
                'created_at' => '2021-04-17 16:23:34'
            ],
        ]);
    }
}
