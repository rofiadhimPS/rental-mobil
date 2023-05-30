<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'price',
        'icon',
        'is_tersedia',
    ];

    public function productBenefit()
    {
        return $this->hasOne(ProductBenefit::class);
    }

}
