<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoeSize extends Model
{
    use HasFactory;

    protected $table = 'shoesizes';

    public function Customers(){

        return $this->hasMany(Customers::class,'idshoesizes');
    }
}
