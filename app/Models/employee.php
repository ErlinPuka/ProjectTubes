<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id_pegawai', 'nama', 'divisi', 'no_hp', 'id_supir' ];

    //use HasFactory;
}
