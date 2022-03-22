<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Sysconf extends Model
{
    protected $table= 'sysconfs';
    protected $fillable =['card', 'name', 'phone', 'email'];
}
