<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerjalananModel extends Model
{
    use HasFactory;
     protected $table="perjalanan_models";
     protected $fillable=['id_user','tanggal','lokasi','suhu'];
}
