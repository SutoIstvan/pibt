<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'unas_id',
        'sku',
        'state',
        'create_time',
        'last_mod_time',
        'name',
        'unit',
        'minimum_qty',
        'description_short',
        'description_long',
        'images',
        'prices',
        'categories',
        'statuses',
        'no_list',
        'inquire',
        'only_gift_status',
        'explicit',
        'point',
        'buyable_with_point',
        'meta'
    ];
}
