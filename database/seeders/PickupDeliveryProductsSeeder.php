<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class PickupDeliveryProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pickupDeliveryProducts = [
            [
                'name_ar' => 'صينية كنعد مع روبيان',
                'name_en' => 'KANAD WITH SHRIMP BIG PLATTER',
                'price' => 27.200,
            ],
            [
                'name_ar' => 'صينية هامور مع روبيان',
                'name_en' => 'HAMOUR WITH SHRIMP BIG PLATTER',
                'price' => 32.000,
            ],
            [
                'name_ar' => 'وليمة سنيجر العائلية',
                'name_en' => 'FAMILY SIGNATURE',
                'price' => 50.000,
            ],
            [
                'name_ar' => 'وليمة كنغ سايز العائلية',
                'name_en' => 'FAMILY KING SIZE',
                'price' => 62.000,
            ],
        ];

        foreach ($pickupDeliveryProducts as $index => $product) {
            Product::create([
                'category_id' => 10, // Pick Up & Delivery category
                'subcategory_id' => 21, // Pick Up & Delivery subcategory
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
