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
        'car_code',
        'car_name',
        'car_slug',
        'car_description',
        'car_photo',
        'car_amount',
        'car_price',
        'car_status',
    ];

    public function merk() {
        return $this->belongsTo('App\Models\Merk', 'merk_id');
    }

}
