<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBenefit extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'tipe_mobil',
        'tahun',
        'warna',
        'seat',
    ];

    // Definisikan relasi dengan model Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
