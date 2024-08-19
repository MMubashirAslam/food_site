<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'category',
        'status',
        'offer_price',
        'new_price',
        'description',
        'popular',
        'oid',
        'size',
        'price',
        'specification'
    ] ;
    protected $table = 'products';
    protected $primaryKey = 'pid'; 
    public $timestamps = false;
}
