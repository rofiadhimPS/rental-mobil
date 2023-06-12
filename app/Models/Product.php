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
        'tahun',
        'seat',
        'metode_bayar',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($checkout){
            $checkout->is_tersedia = 1;
        });
    }

    public function productBenefit()
    {
        return $this->hasOne(ProductBenefit::class);
    }

}
