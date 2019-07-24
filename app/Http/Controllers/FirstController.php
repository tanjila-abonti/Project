<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function abc(){
  $arr=array(0000,1111,2222,4444);
    
    	return view('test',['ab'=>$arr]);
    }

}
