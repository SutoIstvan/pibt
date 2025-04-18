<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('unas_id')->unique();
            $table->string('sku');
            $table->string('state');
            $table->timestamp('create_time');
            $table->timestamp('last_mod_time');
            
            // Основные поля
            $table->string('name')->nullable();
            $table->string('unit')->nullable();
            $table->integer('minimum_qty')->default(1);
            $table->text('description_short')->nullable();
            $table->text('description_long')->nullable();
            
            // JSON поля для вложенных структур
            $table->json('images')->nullable();
            $table->json('prices')->nullable();
            $table->json('categories')->nullable();
            $table->json('statuses')->nullable();
            $table->json('meta')->nullable();
            
            // Флаги
            $table->boolean('no_list')->default(false);
            $table->boolean('inquire')->default(false);
            $table->boolean('only_gift_status')->default(false);
            $table->boolean('explicit')->default(false);
            
            $table->timestamps();
            
            // Индексы
            $table->index('sku');
            $table->index('last_mod_time');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};