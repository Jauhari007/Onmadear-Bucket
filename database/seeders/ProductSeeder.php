<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wisudaCategory = Category::where('slug', 'wisuda')->first();
        $anniversaryCategory = Category::where('slug', 'anniversary')->first();
        $birthdayCategory = Category::where('slug', 'birthday')->first();

        $products = [
            [
                'category_id' => $wisudaCategory->id,
                'name' => 'Bucket Wisuda Special',
                'slug' => 'bucket-wisuda-special',
                'description' => "Bucket bunga wisuda yang elegan dengan kombinasi warna pilihan.\n\nIsi:\n- Bunga segar pilihan\n- Boneka wisuda\n- Snack pilihan\n- Kartu ucapan custom\n\nBisa custom warna dan isi sesuai keinginan!",
                'price' => 150000,
                'is_best_seller' => true,
                'is_new' => false,
                'is_active' => true,
            ],
            [
                'category_id' => $wisudaCategory->id,
                'name' => 'Bucket Wisuda Premium',
                'slug' => 'bucket-wisuda-premium',
                'description' => "Bucket wisuda premium dengan dekorasi mewah.\n\nIsi:\n- Bunga premium\n- Boneka wisuda besar\n- Coklat premium\n- Snack favorit\n- Kartu ucapan custom\n\nPerfect untuk momen spesial wisuda!",
                'price' => 250000,
                'is_best_seller' => false,
                'is_new' => true,
                'is_active' => true,
            ],
            [
                'category_id' => $anniversaryCategory->id,
                'name' => 'Bucket Anniversary Love',
                'slug' => 'bucket-anniversary-love',
                'description' => "Bucket romantis untuk merayakan anniversary bersama pasangan.\n\nIsi:\n- Bunga mawar\n- Coklat premium\n- Snack favorit\n- Kartu ucapan romantic\n\nWarna bisa disesuaikan dengan keinginan!",
                'price' => 180000,
                'is_best_seller' => true,
                'is_new' => false,
                'is_active' => true,
            ],
            [
                'category_id' => $birthdayCategory->id,
                'name' => 'Bucket Birthday Surprise',
                'slug' => 'bucket-birthday-surprise',
                'description' => "Bucket birthday penuh kejutan untuk orang tersayang.\n\nIsi:\n- Bunga segar\n- Balon\n- Snack favorit\n- Lilin ulang tahun\n- Kartu ucapan custom\n\nBikin ulang tahun jadi lebih special!",
                'price' => 165000,
                'is_best_seller' => true,
                'is_new' => true,
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
