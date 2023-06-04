<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboarController extends Controller
{
    Public function Dashboard()
    {
        return  view ('dahsboard-admin');
    }
}
