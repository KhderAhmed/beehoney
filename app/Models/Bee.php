<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'country',
        'type',
        'price',
        'qantylly',
        'image',
     'bee_status',
      
        
    ];
    

    public function GetBee()
    {
        if (!empty($this->image)&&file_exists('uplod/Bee/'.$this->image)) {
       
            return url('uplod/Bee/'.$this->image);

        }
       
    } 
    

}
