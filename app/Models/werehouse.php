<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class werehouse extends Model
{
    protected $table = 'werehouse';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id', 'nama', 'jenisproduk', 'harga', 'produksi', 'expired', 'lokasi' ];

    // use HasFactory;
}
