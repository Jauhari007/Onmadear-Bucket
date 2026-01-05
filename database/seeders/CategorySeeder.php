<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Wisuda',
                'slug' => 'wisuda',
                'description' => 'Bucket untuk moment wisuda yang istimewa',
                'is_active' => true,
            ],
            [
                'name' => 'Anniversary',
                'slug' => 'anniversary',
                'description' => 'Bucket untuk merayakan anniversary bersama pasangan',
                'is_active' => true,
            ],
            [
                'name' => 'Birthday',
                'slug' => 'birthday',
                'description' => 'Bucket untuk ulang tahun yang berkesan',
                'is_active' => true,
            ],
            [
                'name' => 'Custom',
                'slug' => 'custom',
                'description' => 'Bucket custom sesuai keinginan',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
