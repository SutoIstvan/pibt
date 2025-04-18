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
        Schema::create('unas_products', function (Blueprint $table) {
            $table->id();
            $table->string('action')->nullable(); // Action
            $table->string('state')->nullable(); // State
            $table->string('unas_id')->unique(); // Id из Unas
            $table->string('sku')->nullable(); // Sku
            $table->string('sku_new')->nullable(); // SkuNew
            $table->json('history')->nullable(); // История (JSON)
            $table->json('statuses')->nullable(); // Статусы (JSON)
            $table->boolean('no_list')->default(false); // NoList
            $table->boolean('inquire')->default(false); // Inquire
            $table->boolean('cust_discount_disable')->default(false); // CustDiscountDisable
            $table->boolean('explicit')->default(false); // Explicit
            $table->json('export')->nullable(); // Экспорт (JSON)
            $table->string('public_interval_start')->nullable(); // PublicInterval Start
            $table->string('public_interval_end')->nullable(); // PublicInterval End
            $table->string('name')->nullable(); // Название товара
            $table->string('unit')->nullable(); // Единица измерения
            $table->integer('minimum_qty')->nullable(); // MinimumQty
            $table->integer('maximum_qty')->nullable(); // MaximumQty
            $table->integer('alert_qty')->nullable(); // AlertQty
            $table->string('unit_step')->nullable(); // UnitStep
            $table->json('alter_unit')->nullable(); // AlterUnit (JSON)
            $table->decimal('weight', 8, 2)->nullable(); // Вес
            $table->integer('point')->nullable(); // Баллы
            $table->string('buyable_with_point')->nullable(); // BuyableWithPoint
            $table->json('description')->nullable(); // Описание (JSON)
            $table->json('prices')->nullable(); // Цены (JSON)
            $table->json('categories')->nullable(); // Категории (JSON)
            $table->string('url')->nullable(); // URL
            $table->string('sef_url')->nullable(); // SefUrl
            $table->json('images')->nullable(); // Изображения (JSON)
            $table->json('variants')->nullable(); // Варианты (JSON)
            $table->json('datas')->nullable(); // Данные (JSON)
            $table->json('params')->nullable(); // Параметры (JSON)
            $table->json('additional_datas')->nullable(); // Дополнительные данные (JSON)
            $table->json('qty_discount')->nullable(); // Скидки на количество (JSON)
            $table->json('additional_products')->nullable(); // Дополнительные товары (JSON)
            $table->json('similar_products')->nullable(); // Похожие товары (JSON)
            $table->json('stocks')->nullable(); // Остатки (JSON)
            $table->json('online_content')->nullable(); // Онлайн-контент (JSON)
            $table->json('plus_services')->nullable(); // Дополнительные услуги (JSON)
            $table->json('types')->nullable(); // Типы (JSON)
            $table->boolean('package_product')->default(false); // PackageProduct
            $table->json('package_components')->nullable(); // Компоненты пакета (JSON)
            $table->json('meta')->nullable(); // Мета-данные (JSON)
            $table->json('automatic_meta')->nullable(); // Автоматические мета-данные (JSON)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unas_products');
    }
};
