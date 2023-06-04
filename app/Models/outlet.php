<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outlet extends Model
{
   // use HasFactory;
   protected $table = 'outlet';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id_outlet', 'nama', 'alamat', 'no_hp', 'id_barang' ];

}
