<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class recipe extends Model
{
    use HasFactory;
    public $timestamps = false;
    function index(){
        
    }
    protected $primaryKey = 'recipe_id';
    protected $table = 'recipe';
}
