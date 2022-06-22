<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;
    protected $table = 'merk';
    protected $fillable = [
        'merk_code',
        'merk_name',
        'merk_slug',
        'merk_description',
        'merk_status',
        'merk_photo',
    ];

}
