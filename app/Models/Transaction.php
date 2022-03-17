<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'mode',
        'type',
        'created_at',
        'updated_at',

    ];

    // public function order()
    // {
    //     return $this->hasOne(Transaction::class,'id','order_id');
    // }
}
