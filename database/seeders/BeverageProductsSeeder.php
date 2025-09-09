<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class BeverageProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mojito (Subcategory ID: 14)
        $mojitoProducts = [
            [
                'name_ar' => 'مانجو بالتوت / أفوكادو بالتوت',
                'name_en' => 'AVOCADO BERRY / MANGO BERRY',
                'price' => 3.000,
            ],
            [
                'name_ar' => 'بلو لاجون / موهيتو باشن فروت',
                'name_en' => 'PASSION FRUIT / BLUE LAGOON',
                'price' => 3.500,
            ],
            [
                'name_ar' => 'فيمتو',
                'name_en' => 'VIMTO',
                'price' => 3.000,
            ],
            [
                'name_ar' => 'بالتوت الأزرق',
                'name_en' => 'BLUEBERRY / STRAWBERRY',
                'price' => 3.500,
            ],
            [
                'name_ar' => 'مشكل',
                'name_en' => 'MIXED MOJITO',
                'price' => 3.500,
            ],
        ];

        // Fresh Juice (Subcategory ID: 15)
        $freshJuiceProducts = [
            [
                'name_ar' => 'عصير مشكل',
                'name_en' => 'MIXED FRESH JUICE',
                'price' => 3.000,
            ],
            [
                'name_ar' => 'عصير برتقال',
                'name_en' => 'ORANGE JUICE',
                'price' => 2.800,
            ],
            [
                'name_ar' => 'عصير ليمون / ليمون بالنعناع',
                'name_en' => 'LEMON MINT / LEMON JUICE',
                'price' => 2.800,
            ],
            [
                'name_ar' => 'عصير مانجو / عصير فراولة',
                'name_en' => 'MANGO / STRAWBERRY JUICE',
                'price' => 2.800,
            ],
            [
                'name_ar' => 'عصير موز / عصير أناناس',
                'name_en' => 'BANANA / PINEAPPLE JUICE',
                'price' => 2.800,
            ],
            [
                'name_ar' => 'عصير شمام / عصير البطيخ الأحمر',
                'name_en' => 'WATERMELON JUICE / SWEET MELON JUICE',
                'price' => 2.800,
            ],
            [
                'name_ar' => 'عصير كوكتيل',
                'name_en' => 'COCKTAIL JUICE',
                'price' => 3.000,
            ],
            [
                'name_ar' => 'عصير تفاح',
                'name_en' => 'APPLE JUICE',
                'price' => 2.800,
            ],
            [
                'name_ar' => 'عصير أفوكادو / عصير رمان',
                'name_en' => 'AVOCADO JUICE / POMEGRANATE JUICE',
                'price' => 3.000,
            ],
            [
                'name_ar' => 'شاي مثلج عادي',
                'name_en' => 'NORMAL ICE TEA',
                'price' => 2.400,
            ],
            [
                'name_ar' => 'شاي مثلج بالليمون / بالخوخ',
                'name_en' => 'ICE TEA LEMON / PEACH',
                'price' => 2.400,
            ],
        ];

        // Soft Drinks (Subcategory ID: 16)
        $softDrinksProducts = [
            [
                'name_ar' => 'كولا / كولا زيرو / سبرايت / سبرايت زيرو',
                'name_en' => 'COLA / ZERO COLA / SPRITE / SPRITE ZERO',
                'price' => 0.800,
            ],
            [
                'name_ar' => 'فانتا البرتقال / فانتا الليمون',
                'name_en' => 'FANTA ORANGE / FANTA LEMON',
                'price' => 0.800,
            ],
            [
                'name_ar' => 'ماء عادي ١ لتر',
                'name_en' => 'STILL WATER 1L',
                'price' => 1.900,
            ],
            [
                'name_ar' => 'ماء عادي ٢٥٠ مل',
                'name_en' => 'STILL WATER 250 ML',
                'price' => 0.800,
            ],
            [
                'name_ar' => 'ماء غازية ٢٥٠ مل',
                'name_en' => 'SPARKLING WATER',
                'price' => 1.100,
            ],
        ];

        // Helper function to add products
        $addProducts = function($products, $subcategoryId) {
            foreach ($products as $index => $product) {
                Product::create([
                    'category_id' => 11, // Soft Drinks category
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
        $addProducts($mojitoProducts, 14);        // Mojito
        $addProducts($freshJuiceProducts, 15);    // Fresh Juice
        $addProducts($softDrinksProducts, 16);    // Soft Drinks
    }
}
