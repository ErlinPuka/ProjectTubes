<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    Public function Index()
    {
        return  view ('index');
    }
}
