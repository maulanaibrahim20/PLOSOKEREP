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
        Schema::table('carts', function (Blueprint $table) {
            // Hapus kolom status yang lama
            $table->dropColumn('status');
        });

        Schema::table('carts', function (Blueprint $table) {
            // Tambahkan kolom status yang baru dengan enum
            $table->enum('status', ['paid', 'unpaid'])->default('unpaid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            // Hapus kolom status yang baru
            $table->dropColumn('status');
        });

        Schema::table('carts', function (Blueprint $table) {
            // Tambahkan kolom status yang lama
            $table->string('status')->default('unpaid');
        });
    }
};
