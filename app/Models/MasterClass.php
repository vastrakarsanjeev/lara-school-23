<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterClass extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['class','type','status'];
}
