<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transportasi extends Model
{
    protected $table = 'transportasi';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id_pengiriman', 'nama', 'jenis', 'berat_muatan', 'id_supir' ];
}
