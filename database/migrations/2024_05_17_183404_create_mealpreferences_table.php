<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('mealpreferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->string('name');
            $table->foreignId('user_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mealpreferences');
    }
};
