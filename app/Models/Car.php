<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'car';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'merk_id',
        'code',
        'name',
        'desc',
        'amount',
        'price',
        'status',
    ];

    public function merk() {
        return $this->belongsTo('App\Models\Merk', 'merk_id');
    }

    public function transaction_car(){
        return $this->belongsToMany(Transaction_Car::class);
    }

}
