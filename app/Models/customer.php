<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id_customer', 'nama', 'alamat', 'no_hp' ];

    // use HasFactory;
}
