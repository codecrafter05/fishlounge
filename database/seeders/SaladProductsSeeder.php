<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class SaladProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $saladProducts = [
            [
                'name_ar' => 'سلطة فاصوليا مشكلة',
                'name_en' => 'MIXED BEANS SALAD',
                'price' => 5.100,
            ],
            [
                'name_ar' => 'سلطة السلطعون',
                'name_en' => 'CRAB SALAD',
                'price' => 6.300,
            ],
            [
                'name_ar' => 'سلطة المأكولات البحرية',
                'name_en' => 'SEAFOOD SALAD',
                'price' => 5.500,
            ],
            [
                'name_ar' => 'سلطة الروبيان بالأفوكادو والمانجو',
                'name_en' => 'SHRIMP AVOCADO, MANGO SALAD',
                'price' => 6.300,
            ],
            [
                'name_ar' => 'سلطة الكينوا',
                'name_en' => 'QUINOA SALAD',
                'price' => 5.700,
            ],
            [
                'name_ar' => 'سلطة الشبت',
                'name_en' => 'DIL SALAD',
                'price' => 3.100,
            ],
            [
                'name_ar' => 'سلطة مشكلة',
                'name_en' => 'MIXED SALAD',
                'price' => 3.100,
            ],
            [
                'name_ar' => 'سلطة تبولة',
                'name_en' => 'TABOULA SALAD',
                'price' => 3.100,
            ],
            [
                'name_ar' => 'سلطة فتوش',
                'name_en' => 'FATTOUSH SALAD',
                'price' => 3.300,
            ],
            [
                'name_ar' => 'سلطة روكا',
                'name_en' => 'ROCCA SALAD',
                'price' => 4.000,
            ],
            [
                'name_ar' => 'سلطة سيزر مع الأفوكادو',
                'name_en' => 'AVOCADO CAESAR SALAD',
                'price' => 5.200,
            ],
            [
                'name_ar' => 'سلطة تونة',
                'name_en' => 'TUNA SALAD',
                'price' => 5.000,
            ],
            [
                'name_ar' => 'سلطة الروبيان بالأفوكادو والمانجو (طبق صغير)',
                'name_en' => 'FRUIT SALAD SMALL PLATER',
                'price' => 3.900,
            ],
            [
                'name_ar' => 'سلطة فواكه طبق صغير',
                'name_en' => 'FRESH FRUIT PLATTER BIG',
                'price' => 5.200,
            ],
            [
                'name_ar' => 'سلطة فواكه مع الآيسكريم',
                'name_en' => 'FRUIT SALAD WITH ICE CREAM',
                'price' => 2.900,
            ],
            [
                'name_ar' => 'حمص',
                'name_en' => 'HUMMUS',
                'price' => 3.100,
            ],
            [
                'name_ar' => 'متبل',
                'name_en' => 'MUTABAL',
                'price' => 3.100,
            ],
        ];

        foreach ($saladProducts as $index => $product) {
            Product::create([
                'category_id' => 2, // Salads category
                'subcategory_id' => 17, // Salads subcategory
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
