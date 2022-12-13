<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;
    protected $fillable = ['numero_ced','codigo_sec','desc_sec','slocal','desc_locanr','contador','id_user']; 
}