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
        Schema::create('export_cost_calculations', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kalkulasi', 20);
            $table->integer('quantity');
            $table->decimal('harga_beli', 15, 2);
            $table->decimal('total_biaya', 15, 2);
            $table->date('tanggal');
            $table->decimal('margin_persen', 15, 2);
            $table->decimal('harga_jual', 15, 2);
            $table->decimal('unit_price', 15, 2);
            $table->decimal('estimasi_keuntungan', 15, 2);
            $table->foreignId('supplier_id')
                    ->constrained()
                    ->cascadeOnDelete();
            $table->foreignId('product_id')
                    ->constrained()
                    ->cascadeOnDelete();
            $table->foreignId('forwarder_id')
                    ->constrained()
                    ->cascadeOnDelete();
            $table->foreignId('undername_id')
                    ->constrained()
                    ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('export_cost_calculations');
    }
};
