<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class PastaProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pastaProducts = [
            [
                'name_ar' => 'باستا فيتوتشيني بالمأكولات البحرية',
                'name_en' => 'SEAFOOD FETUCCINI',
                'price' => 7.300,
            ],
            [
                'name_ar' => 'باستا بيني بالمأكولات البحرية',
                'name_en' => 'SEAFOOD PENNE PASTA',
                'price' => 7.300,
            ],
            [
                'name_ar' => 'باستا بالخضروات',
                'name_en' => 'VEGETABLE PASTA',
                'price' => 5.000,
            ],
            [
                'name_ar' => 'باستا بالدجاج',
                'name_en' => 'CHICKEN PASTA',
                'price' => 5.400,
            ],
        ];

        foreach ($pastaProducts as $index => $product) {
            Product::create([
                'category_id' => 8, // Pasta category
                'subcategory_id' => 19, // Pasta subcategory
                'name_ar' => $product['name_ar'],
                'name_en' => $product['name_en'],
                'price' => $product['price'],
                'currency' => 'BHD',
                'is_active' => true,
                'sort_order' => $index + 1,
            ]);
        }
    }
}
