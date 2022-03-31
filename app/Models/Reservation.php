<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table='reservations';
    protected $fillable=['name','phone','email','terminal','adults','kids','tour','date','message','status','accept',
        'user_id'];

    protected $hidden =['user_id','created_at','updated_at'];
}
