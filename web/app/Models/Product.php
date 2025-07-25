<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // 必要に応じて、fillableやcastsなどを設定
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        // その他の商品属性
    ];
}