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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('user_id')->unique('user_id');
            $table->date('tanggal');
            $table->decimal('total', 12);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent();
            $table->string('bukti_pembayaran', 191);
            $table->enum('status_pembayaran', ['pending', 'lunas', 'gagal', 'diproses']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
