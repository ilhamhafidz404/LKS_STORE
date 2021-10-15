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
        \App\Models\Category::insert([
            ['name' => 'laptop'],
            ['name' => 'PC'],
            ['name' => 'phone']
        ]);
    }
}
