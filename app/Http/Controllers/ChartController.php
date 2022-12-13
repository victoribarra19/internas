<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

        //Por Seccional
        $s1=DB::table('checks')->where("codigo_sec","=","123")->get();
        $secc1=$s1->count();
        //$secc1=57;

        $s2=DB::table('checks')->where("codigo_sec","=","338")->get();
        $secc2=$s2->count();

        $s3=DB::table('checks')->where("codigo_sec","=","339")->get();
        $secc3=$s3->count();

        //Por Candidato
        $c1=DB::table('checks')->where("id_user","=","1")->get();
        $candidato1=$c1->count();

        $c2=DB::table('checks')->where("id_user","=","2")->get();
        $candidato2=$c2->count();

        $c3=DB::table('checks')->where("id_user","=","3")->get();
        $candidato3=$c3->count();

        $c4=DB::table('checks')->where("id_user","=","4")->get();
        $candidato4=$c4->count();

        //Por Candidato y seccional

        //Total en total
        $tot=DB::table('checks')->get();
        $total=$tot->count();

        //Total fraude




        return view('plots.plots',['plot_data' => [
            'secc1' => $secc1,
            'secc2' => $secc2,
            'secc3' => $secc3,
            'candidato1' => $candidato1,
            'candidato2' => $candidato2,
            'candidato3' => $candidato3,
            'candidato4' => $candidato4,
            'total' => $total
        ]]);

    }
}
