<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    //public function index(Content $content)
    //{
    //    return $content
    //        ->header('Chartjs')
    //        ->body(new Box('Bar chart', view('plots.plots')));
    //}
    public function index()
    {
        //$users=User::all();
        return view('plots.plots');
    }
}
