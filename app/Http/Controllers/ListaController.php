<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListaController extends Controller
{
    public function index()
    {
        $lista=DB::table('padrones')->get();
        return view('plots.lista')->with('lista',$lista);;
    }
}
