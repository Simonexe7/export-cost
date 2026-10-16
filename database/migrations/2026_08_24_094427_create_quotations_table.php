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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_quotation')->unique();
            $table->date('tanggal');
            $table->date('valid_until');
            $table->string('currency');
            $table->decimal('exchange_rate', 15, 2)->nullable();
// $table->decimal('total_harga', 15, 2);
            $table->string('incoterm');
            $table->string('pol')->nullable();
            $table->string('destination')->nullable();
            $table->string('payment_term')->nullable();
            $table->string('delivery_time')->nullable();
            $table->text('terms_conditions')->nullable();
            // $table->decimal('total_harga', 15, 2);
            // $table->string('status', 20);
            // $table->decimal('hargaJual', 15, 2);
            $table->foreignId('buyer_id')
                    ->constrained()
                    ->cascadeOnDelete();
            $table->foreignId('export_cost_calculation_id')
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
        Schema::dropIfExists('quotations');
    }
};
