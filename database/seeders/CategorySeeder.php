<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $electronics = Category::create([
            'name' => 'Điện tử',
            'slug' => Str::slug('Điện tử'),
        ]);

        $fashion = Category::create([
            'name' => 'Thời trang',
            'slug' => Str::slug('Thời trang'),
        ]);

        // Tạo danh mục con cho Điện tử
        $electronics->children()->create([
            'name' => 'Điện thoại',
            'slug' => Str::slug('Điện thoại'),
        ]);

        $electronics->children()->create([
            'name' => 'Máy tính',
            'slug' => Str::slug('Máy tính'),
        ]);

        // Tạo danh mục con cho Thời trang
        $fashion->children()->create([
            'name' => 'Áo thun',
            'slug' => Str::slug('Áo thun'),
        ]);
    }
}
