<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    protected $table = 'driver';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id_driver', 'nama', 'alamat', 'no_hp', 'id_pegawai' ];
}
