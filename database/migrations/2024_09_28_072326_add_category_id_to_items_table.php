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
    Schema::table('items', function (Blueprint $table) {
        // Cek apakah kolom category_id sudah ada
        if (!Schema::hasColumn('items', 'category_id')) {
            $table->bigInteger('category_id')->unsigned()->after('id');
            $table->foreign('category_id')->references('id')->on('categories');
        }
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {
            //
            $table->dropForeign('items_category_id_foreign');
        });
    }
};
