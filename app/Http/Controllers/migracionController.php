<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class migracionController extends Controller
{
    public function migracion(){
        return view('layout.migracion');
    }
}
