<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = []; // Izinkan isi semua kolom

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}