<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('caption')->comment('Название');
            $table->string('slug')->comment('Слаг');
            $table->string('code')->comment('Код Trinity');
            $table->string('producer')->comment('Производитель');
            $table->string('stock')->comment('Склад');
            $table->string('deliverydays')->nullable()->comment('Доставка за');
            $table->integer('min_ordr_count')->nullable()->comment('Минимальное количество заказа');
            $table->string('product_code')->nullable()->comment('Код продукта Trinity');
            $table->string('price')->comment('Цена');
            $table->string('sku')->unique()->comment('Артикул');
            $table->string('img')->nullable()->comment('Заглавное изображение');
            $table->text('description')->nullable()->comment('Описание');

            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
