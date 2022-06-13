<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'car';
    protected $dates = ['deleted_at'];
    protected $fillable = ['name','merk_id','license_number','color','year','status','price'];

    public function merk()
    {
        return $this->belongsTo('App\Models\Merk');
    }
}
