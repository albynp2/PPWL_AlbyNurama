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
        Schema::create('ordersproducts', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('order_id')->unique('order_id');
            $table->bigInteger('product_id')->unique('product_id');
            $table->integer('jumlah');
            $table->decimal('harga_satuan', 10);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordersproducts');
    }
};
