<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cart_products', function (Blueprint $table) {
            $table->foreignId('cart_id')->constrained();
            $table->foreignId('products_id')->constrained();
            $table->integer('quantity');
            $table->decimal('tax', 10, 2);
            $table->decimal('price', 10, 2);


        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart_products');
    }
};
