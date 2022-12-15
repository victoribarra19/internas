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
    public function __construct()
    {
        $this->middleware('can:charts.index')->only('index');
    }
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
        //seccional1
        $s1_x_c1=DB::table('checks')->where("codigo_sec","=","123")->where("id_user","=","1")->get();
        $candidato1x1=$s1_x_c1->count();

        $s1_x_c2=DB::table('checks')->where("codigo_sec","=","123")->where("id_user","=","2")->get();
        $candidato2x1=$s1_x_c2->count();

        $s1_x_c3=DB::table('checks')->where("codigo_sec","=","123")->where("id_user","=","3")->get();
        $candidato3x1=$s1_x_c3->count();

        $s1_x_c4=DB::table('checks')->where("codigo_sec","=","123")->where("id_user","=","4")->get();
        $candidato4x1=$s1_x_c4->count();
        //seccional2
        $s2_x_c1=DB::table('checks')->where("codigo_sec","=","338")->where("id_user","=","1")->get();
        $candidato1x2=$s2_x_c1->count();

        $s2_x_c2=DB::table('checks')->where("codigo_sec","=","338")->where("id_user","=","2")->get();
        $candidato2x2=$s2_x_c2->count();

        $s2_x_c3=DB::table('checks')->where("codigo_sec","=","338")->where("id_user","=","3")->get();
        $candidato3x2=$s2_x_c3->count();

        $s2_x_c4=DB::table('checks')->where("codigo_sec","=","338")->where("id_user","=","4")->get();
        $candidato4x2=$s2_x_c4->count();
        //seccional3
        $s3_x_c1=DB::table('checks')->where("codigo_sec","=","339")->where("id_user","=","1")->get();
        $candidato1x3=$s3_x_c1->count();

        $s3_x_c2=DB::table('checks')->where("codigo_sec","=","339")->where("id_user","=","2")->get();
        $candidato2x3=$s3_x_c2->count();

        $s3_x_c3=DB::table('checks')->where("codigo_sec","=","339")->where("id_user","=","3")->get();
        $candidato3x3=$s3_x_c3->count();

        $s3_x_c4=DB::table('checks')->where("codigo_sec","=","339")->where("id_user","=","4")->get();
        $candidato4x3=$s3_x_c4->count();

        


        //Total en total
        $tot=DB::table('checks')->get();
        $total=$tot->count();

       //FRAUDE TOTAL
       //$frad = DB::table('checks')->selectRaw('sum(contador)')->get();
       $frad = DB::table('checks')->sum('contador');
       $fraudes = intval($frad) - intval($total);

        //return($fraudes);


         return view('plots.plots',['plot_data' => [
            'secc1' => $secc1,
            'secc2' => $secc2,
            'secc3' => $secc3,
            'candidato1' => $candidato1,
            'candidato2' => $candidato2,
            'candidato3' => $candidato3,
            'candidato4' => $candidato4,
            'candidato1x1' =>  $candidato1x1,
            'candidato1x2' =>  $candidato1x2,
            'candidato1x3' =>  $candidato1x3,
            'candidato2x1' =>  $candidato2x1,
            'candidato2x2' =>  $candidato2x2,
            'candidato2x3' =>  $candidato2x3,
            'candidato3x1' =>  $candidato3x1,
            'candidato3x2' =>  $candidato3x2,
            'candidato3x3' =>  $candidato3x3,
            'candidato4x1' =>  $candidato4x1,
            'candidato4x2' =>  $candidato4x2,
            'candidato4x3' =>  $candidato4x3,
            'fraudes' => $fraudes,
            'total' => $total
        ]]);

    }
}
