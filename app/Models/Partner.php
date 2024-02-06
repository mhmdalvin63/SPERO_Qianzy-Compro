<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $primaryKey = "id";
    protected $table = "partners";
    protected $fillable = [
        'id','gambar_partner'
    ];
}
