<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class PlatterBucketProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $platterBucketProducts = [
            [
                'name_ar' => 'دلو متوسط من المأكولات البحرية المشكلة',
                'name_en' => 'MEDIUM BUCKET MIX SEAFOOD',
                'price' => 25.000,
            ],
            [
                'name_ar' => 'دلو صغير من المأكولات البحرية المشكلة',
                'name_en' => 'SMALL BUCKET MIX SEAFOOD',
                'price' => 15.300,
            ],
            [
                'name_ar' => 'طبق لشخص واحد',
                'name_en' => 'PLATTER FOR 1',
                'price' => 26.700,
            ],
            [
                'name_ar' => 'طبق صغير من المأكولات البحرية',
                'name_en' => 'MINI SEAFOOD PLATTER',
                'price' => 33.200,
            ],
            [
                'name_ar' => 'طبق لشخصين',
                'name_en' => 'PLATTER FOR 2',
                'price' => 36.100,
            ],
            [
                'name_ar' => 'طبق عائلي',
                'name_en' => 'FAMILY PLATTER',
                'price' => 52.300,
            ],
            [
                'name_ar' => 'طبق ماكسي لـ 5–7 أشخاص',
                'name_en' => 'KING PLATTER 5–7 PAX',
                'price' => 104.000,
            ],
            [
                'name_ar' => 'طبق مأكولات بحرية مشوية',
                'name_en' => 'GRILLED SEAFOOD PLATTER',
                'price' => 13.300,
            ],
            [
                'name_ar' => 'سزلينغ المأكولات البحرية الشرقية',
                'name_en' => 'ORIENTAL SIZZLING SEAFOOD',
                'price' => 14.000,
            ],
        ];

        foreach ($platterBucketProducts as $index => $product) {
            Product::create([
                'category_id' => 9, // Platters & Buckets category
                'subcategory_id' => 20, // Platters & Buckets subcategory
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
