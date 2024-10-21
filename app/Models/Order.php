<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservasiitem_id',
        'name',
        'email',
        'whatsapp',
        'payment_account',
        'payment_proof',
        'status',
        'start_date',
        'end_date'
    ];

    public function reservasiItem()
    {
        return $this->belongsTo(ReservasiItem::class, 'reservasiitem_id');
    }
}
