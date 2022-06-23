<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction_Car extends Model
{
    use HasFactory;
    protected $table = 'transaction_car';
    public function car(){
        return $this->belongsTo(Car::class);
    }

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }
}
