<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class MainCourseProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Rice (Subcategory ID: 5)
        $riceProducts = [
            [
                'name_ar' => 'مجبوس الروبيان',
                'name_en' => 'SHRIMP MAJBOOS',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'مجبوس الهامور',
                'name_en' => 'HAMOUR MAJBOOS',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'مشكول الروبيان',
                'name_en' => 'SHRIMP MUSKHOOL',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'مشكول الهامور',
                'name_en' => 'HAMOUR MASKHOOL',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'مشكول الدجاج',
                'name_en' => 'CHICKEN MUSKHOOL',
                'price' => 5.400,
            ],
            [
                'name_ar' => 'برياني الروبيان',
                'name_en' => 'SHRIMP BIRIYANI',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'برياني الهامور',
                'name_en' => 'HAMOUR BIRIYANI',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'برياني مشكل',
                'name_en' => 'MIX BIRIYANI',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'برياني الدجاج',
                'name_en' => 'CHICKEN BIRIYANI',
                'price' => 5.400,
            ],
            [
                'name_ar' => 'صيادية الهامور',
                'name_en' => 'HAMOUR SAYADIYAH',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'صيادية الروبيان',
                'name_en' => 'SHRIMP SAYADIYAH',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'صيادية مشكل',
                'name_en' => 'MIX SAYADIYAH',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'أرز الصيادية',
                'name_en' => 'SAYADIYAH RICE',
                'price' => 1.700,
            ],
            [
                'name_ar' => 'أرز بالمأكولات البحرية المشكلة',
                'name_en' => 'MIX SEAFOOD FRIED RICE',
                'price' => 6.400,
            ],
            [
                'name_ar' => 'أرز أبيض / أرز برياني',
                'name_en' => 'WHITE RICE / BIRIYANI RICE',
                'price' => 1.700,
            ],
        ];

        // Meats & Chicken (Subcategory ID: 6)
        $meatChickenProducts = [
            [
                'name_ar' => 'ستيك ريب آي',
                'name_en' => 'RIB EYE STEAK',
                'price' => 10.600,
            ],
            [
                'name_ar' => 'ريش لحم الضأن',
                'name_en' => 'LAMB CHOPS',
                'price' => 7.300,
            ],
            [
                'name_ar' => 'دجاج متبل و مشوي',
                'name_en' => 'BLACKENED CHICKEN',
                'price' => 5.400,
            ],
            [
                'name_ar' => 'دجاج تندوري',
                'name_en' => 'CHICKEN TANDOORI',
                'price' => 5.400,
            ],
            [
                'name_ar' => 'تكة دجاج',
                'name_en' => 'CHICKEN TIKKA',
                'price' => 5.400,
            ],
        ];

        // Grill (Subcategory ID: 7)
        $grillProducts = [
            [
                'name_ar' => 'قطعة من السلمون المشوي',
                'name_en' => 'SALMON GRILLED 1 PC',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'قطعة واحدة من سلمون متبل و مشوي',
                'name_en' => 'BLACKENED SALMON 1 PC',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'هامور على الشواية المفتوحة',
                'name_en' => 'HAMOUR OPEN GRILL',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'سيباس على الشواية المفتوحة',
                'name_en' => 'SEABASS OPEN GRILL',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'سيبريم على الشواية المفتوحة',
                'name_en' => 'SUBREAM OPEN GRILL',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'شعري على الشواية المفتوحة',
                'name_en' => 'SHARY OPEN GRILL',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'شعم على الشواية المفتوحة',
                'name_en' => 'SHYAM OPEN GRILL',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'حمام بالطريقة العربية',
                'name_en' => 'HAMAM ARABIC',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'سمك صافي مشوي',
                'name_en' => 'SAFI GRILL',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'كراي فيش مشوي',
                'name_en' => 'GRILLED CRAY FISH',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'سمك سبيطي مشوي',
                'name_en' => 'SUBETI GRILLED FISH',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
        ];

        // Tandoori (Subcategory ID: 8)
        $tandooriProducts = [
            [
                'name_ar' => 'سيباس بالتندوري',
                'name_en' => 'SEABASS TANDOORI',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'هامور بالتندوري',
                'name_en' => 'HAMOUR TANDOORI',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'سيبريم بالتندوري',
                'name_en' => 'SUBREAM TANDOORI',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
        ];

        // Hamour (Subcategory ID: 9)
        $hamourProducts = [
            [
                'name_ar' => 'هامور ترميدور',
                'name_en' => 'HAMOUR THERMIDOR',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'فيليه هامور بالتندوري',
                'name_en' => 'HAMOUR FILLET TANDOORI',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'فيليه هامور باربيكيو',
                'name_en' => 'HAMOUR FILLET BBQ',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'شيشليك الهامور',
                'name_en' => 'HAMOUR SHASLIK',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'هامور لاونج',
                'name_en' => 'HAMOUR LOUNGE',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'فيليه هامور بجبن البارميزان',
                'name_en' => 'HAMOUR FILLET PARMESAN',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'فيليه هامور بصلصة التوابل',
                'name_en' => 'HAMOUR FILLET SPICE SAUCE',
                'price' => 7.600,
            ],
        ];

        // Fry (Subcategory ID: 10)
        $fryProducts = [
            [
                'name_ar' => 'صافي مقلي',
                'name_en' => 'FRIED SAFI',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'سيبريم مقلي – مفتوح/مغلق',
                'name_en' => 'SUBREAM (OPEN/CLOSE FRY)',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'سيباس مقلي – مفتوح/مغلق',
                'name_en' => 'SEABASS (OPEN/CLOSE FRY)',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'هامور مقلي – مفتوح/مغلق',
                'name_en' => 'HAMOUR (OPEN/CLOSE FRY)',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'سمك سبيطي',
                'name_en' => 'SUBETI FISH',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
        ];

        // Other Fish (Subcategory ID: 11)
        $otherFishProducts = [
            [
                'name_ar' => 'سمك و بطاطا',
                'name_en' => 'FISH & CHIPS',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'سيبريم مقلي خاص',
                'name_en' => 'SPECIAL SUBREAM FRY',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'كنعد مازر',
                'name_en' => 'KANAD FRESH',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'عندق',
                'name_en' => 'ANDAK',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'صالونة صافي',
                'name_en' => 'SAFFI SALONA',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'سمك بلطي',
                'name_en' => 'BOLTI',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'سيباس فرنسي',
                'name_en' => 'FRENCH SEABASS FISH',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
        ];

        // Masala (Subcategory ID: 12)
        $masalaProducts = [
            [
                'name_ar' => 'هامور ماسالا',
                'name_en' => 'HAMOUR MASALA',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'روبيان ماسالا',
                'name_en' => 'SHRIMP MASALA',
                'price' => 7.600,
            ],
            [
                'name_ar' => 'تكة دجاج ماسالا',
                'name_en' => 'CHICKEN TIKKA MASALA',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'هامور ماسالا خاص',
                'name_en' => 'HAMOUR MASALA SPECIAL',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'سيباس ماسالا',
                'name_en' => 'SEABASS MASALA',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
            [
                'name_ar' => 'سيبريم ماسالا',
                'name_en' => 'SUBREAM MASALA',
                'price' => -1, // Special value for AS PER WEIGHT
            ],
        ];

        // Helper function to add products
        $addProducts = function($products, $subcategoryId) {
            foreach ($products as $index => $product) {
                Product::create([
                    'category_id' => 6, // Main Course category
                    'subcategory_id' => $subcategoryId,
                    'name_ar' => $product['name_ar'],
                    'name_en' => $product['name_en'],
                    'price' => $product['price'],
                    'currency' => 'BHD',
                    'is_active' => true,
                    'sort_order' => $index + 1,
                ]);
            }
        };

        // Add all products
        $addProducts($riceProducts, 5);        // Rice
        $addProducts($meatChickenProducts, 6); // Meats & Chicken
        $addProducts($grillProducts, 7);       // Grill
        $addProducts($tandooriProducts, 8);    // Tandoori
        $addProducts($hamourProducts, 9);      // Hamour
        $addProducts($fryProducts, 10);        // Fry
        $addProducts($otherFishProducts, 11);  // Other Fish
        $addProducts($masalaProducts, 12);     // Masala
    }
}
