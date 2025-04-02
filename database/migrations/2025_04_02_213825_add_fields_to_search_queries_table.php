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
        Schema::table('search_queries', function (Blueprint $table) {
            $table->string('type', 50)->default('Артикул')->comment('ip адрес');
            $table->string('ip', 50)->comment('ip адрес');
            $table->string('brand', 500)->nullable()->comment('Бренд');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('search_queries', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->dropColumn('ip');
            $table->dropColumn('brand');
        });
    }
};
