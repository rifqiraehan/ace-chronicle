<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(public_path("data/categories-data.json"));
        $categories = json_decode($json);

        foreach ($categories->categories as $key => $value) {
            Category::create([
                'name' => $value->name,
                'slug' => $value->slug,
                'image' => $value->image
            ]);
        }
    }
}
