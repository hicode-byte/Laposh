<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customers';
    protected $primaryKey='id';
    protected $fillable=['firstName','lastName','email','password','title','avatar','DoB'];
    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
}
