<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservasiItem extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','duration','price' ];

    protected $table = 'reservasiitems';
}
