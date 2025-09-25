<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function menu(): JsonResponse
    {
        // Add caching headers for better performance
        $response = response()->json([
            'categories' => $this->getCategories(),
            'products' => $this->getProducts(),
        ]);

        // Set cache headers
        $response->header('Cache-Control', 'public, max-age=300'); // 5 minutes cache
        $response->header('ETag', md5(serialize([
            'categories' => $this->getCategories(),
            'products' => $this->getProducts(),
        ])));

        return $response;
    }

    private function getCategories()
    {
        return Category::query()
            ->where('is_active', true)
            ->with(['subcategories' => function ($q) {
                $q->where('is_active', true)->orderBy('sort_order');
            }])
            ->orderBy('sort_order')
            ->get()
            ->map(function (Category $cat) {
                return [
                    'slug' => $cat->slug,
                    'label' => [
                        'en' => $cat->label_en,
                        'ar' => $cat->label_ar,
                    ],
                    'icon' => $cat->icon_path ? Storage::url($cat->icon_path) : null,
                    'subcategories' => $cat->subcategories->map(function ($sub) {
                        return [
                            'slug' => $sub->slug,
                            'label' => [
                                'en' => $sub->label_en,
                                'ar' => $sub->label_ar,
                            ],
                        ];
                    })->values()->all(),
                ];
            })->values()->all();
    }

    private function getProducts()
    {
        return Product::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->with(['category', 'subcategory'])
            ->get()
            ->map(function (Product $p) {
                return [
                    'name' => [
                        'en' => $p->name_en,
                        'ar' => $p->name_ar,
                    ],
                    'price' => (float) $p->price,
                    'price_two' => $p->price_two ? (float) $p->price_two : null,
                    'price_three' => $p->price_three ? (float) $p->price_three : null,
                    'currency' => $p->currency,
                    'image' => $p->image_path ? Storage::url($p->image_path) : null,
                    'category' => optional($p->category)->slug,
                    'subcategory' => optional($p->subcategory)->slug,
                ];
            })->values()->all();
    }
}


