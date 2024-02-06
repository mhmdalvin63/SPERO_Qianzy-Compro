<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $primaryKey = "id";
    protected $table = "events";
    protected $fillable = [
        'id','gambar_event','judul_event','subjudul_event','deskripsi_event'
    ];
}
