<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingModal extends Model
{
    use HasFactory;
    protected $fillable = ['key', 'value'];
    protected $table ='settings';
    public $timestamps = false;
}
