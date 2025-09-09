<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class AppetizerProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hot Starters (Subcategory ID: 1)
        $hotStarters = [
            [
                'name_ar' => 'ديناميت روبيان',
                'name_en' => 'DYNAMITE SHRIMP',
                'price' => 5.800,
            ],
            [
                'name_ar' => 'روبيان تمبورا',
                'name_en' => 'SHRIMP TEMPURA',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'بلح البحر المخوز',
                'name_en' => 'BAKED MUSSELS',
                'price' => 4.400,
            ],
            [
                'name_ar' => 'كاليماري مشوي',
                'name_en' => 'GRILL CALAMARI',
                'price' => 4.400,
            ],
            [
                'name_ar' => 'كاليماري مقلي',
                'name_en' => 'FRIED CALAMARI',
                'price' => 4.400,
            ],
            [
                'name_ar' => 'بلح البحر السوتيه',
                'name_en' => 'SAUTEED MUSSELS',
                'price' => 4.400,
            ],
            [
                'name_ar' => 'بلح البحر بالفلفل الحار',
                'name_en' => 'CHILLI MUSSELS',
                'price' => 4.400,
            ],
            [
                'name_ar' => 'محار بالجبنة المزابة',
                'name_en' => 'OYSTER DE GRATTAN',
                'price' => 8.700,
            ],
            [
                'name_ar' => 'محار روكفلر',
                'name_en' => 'OYSTER ROCKEFELLER',
                'price' => 8.400,
            ],
            [
                'name_ar' => 'محار قطعة واحدة',
                'name_en' => 'OYSTER 1 PC',
                'price' => 2.600,
            ],
            [
                'name_ar' => 'بطاطس مقلية',
                'name_en' => 'FRIES',
                'price' => 1.700,
            ],
        ];

        // Cold Starters (Subcategory ID: 2)
        $coldStarters = [
            [
                'name_ar' => 'سلمون الكافيار',
                'name_en' => 'CAVIAR SALMON',
                'price' => 10.800,
            ],
            [
                'name_ar' => 'سلمون مدخن',
                'name_en' => 'SMOKED SALMON',
                'price' => 8.400,
            ],
            [
                'name_ar' => 'كوكتيل الروبيان',
                'name_en' => 'SHRIMP COCKTAIL',
                'price' => 5.800,
            ],
        ];

        // Add Hot Starters
        foreach ($hotStarters as $index => $product) {
            Product::create([
                'category_id' => 3, // Appetizers category
                'subcategory_id' => 1, // Hot Starters subcategory
                'name_ar' => $product['name_ar'],
                'name_en' => $product['name_en'],
                'price' => $product['price'],
                'currency' => 'BHD',
                'is_active' => true,
                'sort_order' => $index + 1,
            ]);
        }

        // Add Cold Starters
        foreach ($coldStarters as $index => $product) {
            Product::create([
                'category_id' => 3, // Appetizers category
                'subcategory_id' => 2, // Cold Starters subcategory
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
