<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ShrimpCrabProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Shrimps (Subcategory ID: 3)
        $shrimpProducts = [
            [
                'name_ar' => 'روبيان مشوي',
                'name_en' => 'GRILLED SHRIMP',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'روبيان ترميدور',
                'name_en' => 'SHRIMPS THERMIDOR',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'روبيان مقلي',
                'name_en' => 'FRIED SHRIMP',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'روبيان بصلصة الفلفل الحار',
                'name_en' => 'SHRIMP WITH CHILI SAUCE',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'روبيان جامبو على الطريقة القائمة',
                'name_en' => 'JUMBO SHRIMP STAND',
                'price' => 8.500,
            ],
            [
                'name_ar' => 'روبيان جامبو – ١ كجم',
                'name_en' => 'JUMBO SHRIMP 1KG',
                'price' => 24.200,
            ],
            [
                'name_ar' => 'روبيان يو ١٠ – ١ كجم',
                'name_en' => 'SHRIMP U10 1KG',
                'price' => 32.800,
            ],
            [
                'name_ar' => 'روبيان مقلي مع الخضروات',
                'name_en' => 'STIR FRIED SHRIMPS',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'شيشليك الروبيان',
                'name_en' => 'SHRIMP SHASLIK',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'روبيان تاندوري',
                'name_en' => 'SHRIMP TANDOORI',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'روبيان تيبنياكي',
                'name_en' => 'SHRIMP TEPENYAKI',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'روبيان لاونج',
                'name_en' => 'SHRIMP LOUNGE',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'روبيان شيتوان',
                'name_en' => 'SHRIMP SCHEZWAN',
                'price' => 5.700,
            ],
            [
                'name_ar' => 'روبيان سوتيه',
                'name_en' => 'SAUTED SHRIMPS',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'روبيان متبل و مشوي',
                'name_en' => 'BLACKENED SHRIMP',
                'price' => 7.600,
            ],
        ];

        // Crabs (Subcategory ID: 4)
        $crabProducts = [
            [
                'name_ar' => 'سلطعون تمبورا',
                'name_en' => 'CRAB TEMPURA',
                'price' => 7.000,
            ],
            [
                'name_ar' => 'سلطعون بالفلفل الحار',
                'name_en' => 'CHILLI CRAB',
                'price' => 7.000,
            ],
            [
                'name_ar' => 'سلطعون مشوي',
                'name_en' => 'GRILLED CRAB',
                'price' => 7.000,
            ],
            [
                'name_ar' => 'سلطعون مطهو على البخار',
                'name_en' => 'STEAMED CRABS',
                'price' => 7.000,
            ],
            [
                'name_ar' => 'سلطعون مخبوز',
                'name_en' => 'BAKED CRAB',
                'price' => 7.000,
            ],
        ];

        // Add Shrimps
        foreach ($shrimpProducts as $index => $product) {
            Product::create([
                'category_id' => 5, // Shrimps & Crabs category
                'subcategory_id' => 3, // Shrimps subcategory
                'name_ar' => $product['name_ar'],
                'name_en' => $product['name_en'],
                'price' => $product['price'],
                'currency' => 'BHD',
                'is_active' => true,
                'sort_order' => $index + 1,
            ]);
        }

        // Add Crabs
        foreach ($crabProducts as $index => $product) {
            Product::create([
                'category_id' => 5, // Shrimps & Crabs category
                'subcategory_id' => 4, // Crabs subcategory
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
