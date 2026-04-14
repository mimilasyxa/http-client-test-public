<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('discount')->nullable();
            $table->string('price')->nullable();
            $table->integer('sc_code')->nullable();
            $table->string('brand')->nullable();
            $table->string('category')->nullable();
            $table->string('subject')->nullable();
            $table->string('nm_id');
            $table->boolean('in_way_from_client')->nullable();
            $table->boolean('in_way_to_client')->nullable();
            $table->string('warehouse_name');
            $table->integer('quantity_full')->nullable();
            $table->boolean('is_realization')->nullable();
            $table->boolean('is_supply')->nullable();
            $table->integer('quantity');
            $table->integer('barcode');
            $table->string('tech_size')->nullable();
            $table->string('supplier_article')->nullable();
            $table->string('last_change_date')->nullable();
            $table->string('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
