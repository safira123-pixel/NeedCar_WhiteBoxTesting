<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaction';
    protected $dates = ['deleted_at'];
    protected $fillable = ['car_id','customer_id','rent_date','back_date','return_date','price','amount','penalty','status'];
    public $incrementing = false;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function car()
    {
        return $this->belongsTo('App\Models\Car');
    }
}
