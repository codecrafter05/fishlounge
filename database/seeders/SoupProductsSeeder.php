<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class SoupProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $soupProducts = [
            [
                'name_ar' => 'شوربة توم يوم',
                'name_en' => 'TOM YUM SOUP',
                'price' => 5.800,
            ],
            [
                'name_ar' => 'شوربة كريمة المأكولات البحرية',
                'name_en' => 'SEA FOOD CREAM SOUP',
                'price' => 3.700,
            ],
            [
                'name_ar' => 'شوربة القرع مع الروبيان',
                'name_en' => 'PUMKIN SHRIMP SOUP',
                'price' => 3.900,
            ],
            [
                'name_ar' => 'شوربة البوليبسي العادية',
                'name_en' => 'REGULAR BOUILLABAISSE SOUP',
                'price' => 5.800,
            ],
            [
                'name_ar' => 'شوربة شاوردر المأكولات البحرية',
                'name_en' => 'SEA FOOD CHOWDER SOUP',
                'price' => 3.600,
            ],
            [
                'name_ar' => 'شوربة كريمة السلطعون',
                'name_en' => 'CREAM OF CRAB SOUP',
                'price' => 3.200,
            ],
            [
                'name_ar' => 'شوربة السلطعون مع الذرة',
                'name_en' => 'CRAB CORN SOUP',
                'price' => 3.200,
            ],
            [
                'name_ar' => 'شوربة الدجاج مع الذرة',
                'name_en' => 'CHICKEN CORN SOUP',
                'price' => 3.100,
            ],
            [
                'name_ar' => 'شوربة كريمة الدجاج',
                'name_en' => 'CHICKEN CREAM SOUP',
                'price' => 3.100,
            ],
            [
                'name_ar' => 'شوربة العدس',
                'name_en' => 'LENTIL SOUP',
                'price' => 2.800,
            ],
        ];

        foreach ($soupProducts as $index => $product) {
            Product::create([
                'category_id' => 4, // Soups category
                'subcategory_id' => 18, // Soups subcategory
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
