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
        Schema::table('order_products', function (Blueprint $table) {
            $table->string('caption')->comment('Название');
            $table->string('code')->comment('Код Trinity');
            $table->string('producer')->comment('Производитель');
            $table->string('stock')->comment('Склад');
            $table->string('deliverydays')->nullable()->comment('Доставка за');
            $table->integer('min_ordr_count')->nullable()->comment('Минимальное количество заказа');
            $table->string('product_code')->nullable()->comment('Код продукта Trinity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_products', function (Blueprint $table) {
            $table->dropColumn('caption');
            $table->dropColumn('code');
            $table->dropColumn('producer');
            $table->dropColumn('stock');
            $table->dropColumn('deliverydays');
            $table->dropColumn('min_ordr_count');
            $table->dropColumn('product_code');
        });
    }
};
