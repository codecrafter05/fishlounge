<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Add pickup fields to categories table
        Schema::table('categories', function (Blueprint $table) {
            $table->integer('pickup_sort_order')->nullable()->after('sort_order');
        });

        // Add pickup fields to subcategories table
        Schema::table('subcategories', function (Blueprint $table) {
            $table->integer('pickup_sort_order')->nullable()->after('sort_order');
        });

        // Add pickup fields to products table
        Schema::table('products', function (Blueprint $table) {
            $table->boolean('is_pickup')->default(false)->after('is_active');
            $table->integer('pickup_sort_order')->nullable()->after('sort_order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('pickup_sort_order');
        });

        Schema::table('subcategories', function (Blueprint $table) {
            $table->dropColumn('pickup_sort_order');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['is_pickup', 'pickup_sort_order']);
        });
    }
};
