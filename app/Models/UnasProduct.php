<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnasProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'action',
        'state',
        'unas_id',
        'sku',
        'sku_new',
        'history',
        'statuses',
        'no_list',
        'inquire',
        'cust_discount_disable',
        'explicit',
        'export',
        'public_interval_start',
        'public_interval_end',
        'name',
        'unit',
        'minimum_qty',
        'maximum_qty',
        'alert_qty',
        'unit_step',
        'alter_unit',
        'weight',
        'point',
        'buyable_with_point',
        'description',
        'prices',
        'categories',
        'url',
        'sef_url',
        'images',
        'variants',
        'datas',
        'params',
        'additional_datas',
        'qty_discount',
        'additional_products',
        'similar_products',
        'stocks',
        'online_content',
        'plus_services',
        'types',
        'package_product',
        'package_components',
        'meta',
        'automatic_meta',
    ];

    protected $casts = [
        'history' => 'array',
        'statuses' => 'array',
        'export' => 'array',
        'alter_unit' => 'array',
        'description' => 'array',
        'prices' => 'array',
        'categories' => 'array',
        'images' => 'array',
        'variants' => 'array',
        'datas' => 'array',
        'params' => 'array',
        'additional_datas' => 'array',
        'qty_discount' => 'array',
        'additional_products' => 'array',
        'similar_products' => 'array',
        'stocks' => 'array',
        'online_content' => 'array',
        'plus_services' => 'array',
        'types' => 'array',
        'package_components' => 'array',
        'meta' => 'array',
        'automatic_meta' => 'array',
    ];
}
