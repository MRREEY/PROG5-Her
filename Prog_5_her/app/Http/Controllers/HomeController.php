<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        echo "Dit is de Home pagina! :D";
        exit;
    }
}
