<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionalItems extends Model
{
    use HasFactory;
    protected $tablename = 'optional_items';
    protected $guarded = [];
    protected $primaryKey = 'oid';
    public $timestamps = false;
}
