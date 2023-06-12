<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'checkouts';

    protected $fillable = [
        'user_id', 
        'product_id', 
        'tanggal_pesan', 
        'lokasi_penjemputan',
        'metode_pembayaran',
        'bukti_transfer',
        'is_paid',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($checkout){
            $checkout->status = '';
        });
    }

    public function Product()
{
    return $this->belongsTo(Product::class);
}
public function User()
{
    return $this->belongsTo(User::class);
}

}
