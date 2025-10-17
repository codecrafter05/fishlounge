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

    public function pickupMenu(): JsonResponse
    {
        // Add caching headers for better performance
        $response = response()->json([
            'categories' => $this->getCategories(true),
            'products' => $this->getProducts(true),
        ]);

        // Set cache headers
        $response->header('Cache-Control', 'public, max-age=300'); // 5 minutes cache
        $response->header('ETag', md5(serialize([
            'categories' => $this->getCategories(true),
            'products' => $this->getProducts(true),
        ])));

        return $response;
    }

    private function getCategories($isPickup = false)
    {
        $sortColumn = $isPickup ? 'pickup_sort_order' : 'sort_order';
        
        $categories = Category::query()
            ->where('is_active', true)
            ->with(['subcategories' => function ($q) use ($isPickup) {
                $subSortColumn = $isPickup ? 'pickup_sort_order' : 'sort_order';
                $q->where('is_active', true)
                    ->orderByRaw("COALESCE({$subSortColumn}, sort_order)");
            }])
            ->orderByRaw("COALESCE({$sortColumn}, sort_order)")
            ->get();
        
        // If pickup menu, filter categories that have pickup products
        if ($isPickup) {
            $categories = $categories->filter(function (Category $cat) {
                return $cat->products()->where('is_active', true)->where('is_pickup', true)->exists();
            });
        }
        
        return $categories->map(function (Category $cat) use ($isPickup) {
                $subcategories = $cat->subcategories;
                
                // If pickup menu, filter subcategories that have pickup products
                if ($isPickup) {
                    $subcategories = $subcategories->filter(function ($sub) {
                        return $sub->products()->where('is_active', true)->where('is_pickup', true)->exists();
                    });
                }
                
                return [
                    'slug' => $cat->slug,
                    'label' => [
                        'en' => $cat->label_en,
                        'ar' => $cat->label_ar,
                    ],
                    'icon' => $cat->icon_path ? Storage::url($cat->icon_path) : null,
                    'subcategories' => $subcategories->map(function ($sub) {
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

    private function getProducts($isPickup = false)
    {
        $query = Product::query()->where('is_active', true);
        
        // If pickup menu, only show products with is_pickup = true
        if ($isPickup) {
            $query->where('is_pickup', true);
        }
        
        // Use pickup_sort_order if available, otherwise fall back to sort_order
        $sortColumn = $isPickup ? 'pickup_sort_order' : 'sort_order';
        $query->orderByRaw("COALESCE({$sortColumn}, sort_order)");
        
        return $query
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


