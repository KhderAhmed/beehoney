<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Honey extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'country',
        'type',
        'price',
        'qantylly',
        'image',
        'honey_status',
        
    ];
}
