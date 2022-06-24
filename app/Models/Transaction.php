<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaction';
    protected $fillable = [
        'car_id',
        'user_id',
        'rent_date',
        'return_date',
        'price',
        'amount',
        'penalty',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function car()
    {
        return $this->belongsTo('App\Models\Car', 'car_id');
    }

    public function transaction_car(){
        return $this->belongsToMany(Transaction_Car::class);
    }
}
