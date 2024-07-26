<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('evaluasi/jawab/empat/{jawab}',function($jawab){
    $profile=[
        'tkro'=>[
            'nama'=>'Teknik kendaraan Ringan Otomotif',
            'kajur'=>'Rivan Indrayan,S.T',
            'kelas'=>6
        ],
        'tp'=>[
            'nama'=>'Teknik Permesinan',
            'kajur'=>'Siti Hamidah,A.md',
            'kelas'=>5
        ],
        'rpl'=>[
            'nama'=>'Rekayasa Perangkat Lunak',
            'kajur'=>'Joko kristianto S.T',
            'kelas'=>3
        ],
        'ak'=>[
            'nama'=>'Akuntansi',
            'kajur'=>'Yulianti,S.E,MM',
            'kelas'=>1
        ],
    ];
        return view ('evaluasi',['profile'=>$profile,'jawab'=>$jawab]);
   });
