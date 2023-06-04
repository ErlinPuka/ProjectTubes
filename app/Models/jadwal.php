<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $table = 'jadwal';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id_jadwal', 'hari', 'id_supir', 'id_barang', 'id_pengiriman' ];
}
