<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('status');
            $table->time('delivery_time');
            $table->date('delivery_date');
            $table->integer('price');
            $table->string('preference');
            $table->integer('Number_of_meals');
            $table->integer('Number_of_servings');
            $table->string('delivery_address');
            $table->string('city');
            $table->integer('zip');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
