<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\card_registation;
class homeController extends Controller
{
    public function get_all_register(){

       $data =  card_registation::all();
       return view('all_card_register',['data'=>$data]);


    }
}
