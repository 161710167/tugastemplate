<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tugas;

class TugasController extends Controller
{
     public function asiswa(){
    $c=tugas::all();        
    return view('data_table',compact('c')); 
}
}
