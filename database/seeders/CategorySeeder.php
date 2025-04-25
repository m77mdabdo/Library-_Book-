<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("categories")->insert([

            //"name"=>Str::random(20),  // insert in to 20 row in data base 
            "name" => "category one",
            "desc" => "category desc",
        ]);

        Category::create([

            "name" => "category tow",
            "desc" => "category desc tow",
        ]);
    }
}