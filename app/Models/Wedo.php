<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wedo extends Model
{
    protected $primaryKey = "id";
    protected $table = "wedos";
    protected $fillable = [
        'id','icon_wedo','judul_wedo','deskripsi_wedo'
    ];
}
