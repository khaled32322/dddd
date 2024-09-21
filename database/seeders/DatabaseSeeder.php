<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run() 
    {
        // \App\Models\Brand::factory(6)->create();
        // \App\Models\category::factory(6)->create();
        // \App\Models\Product::factory(24)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //
        \App\Models\Brand::factory(6)->create();
        \App\Models\category::factory(6)->create();
        \App\Models\Product::factory(24)->create();


    }
}