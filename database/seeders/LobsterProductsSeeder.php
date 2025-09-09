<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class LobsterProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lobsterProducts = [
            [
                'name_ar' => 'لوبيستر ثرميدور',
                'name_en' => 'LOBSTER THERMIDOR',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'باستا لوبيستر',
                'name_en' => 'LOBSTER PASTA',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'لوبيستر بالفلفل الحار',
                'name_en' => 'LOBSTER CHILLI SAUCE',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'لوبيستر مشوي',
                'name_en' => 'GRILLED LOBSTER',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'لوبيستر تندوري',
                'name_en' => 'LOBSTER TANDOORI',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
        ];

        foreach ($lobsterProducts as $index => $product) {
            Product::create([
                'category_id' => 7, // Our Speciality category
                'subcategory_id' => 13, // Lobster subcategory
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
