<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as Controller;

class UserController extends Controller
{
    public function showadminName()
    {
        return 'sohairmahmoud';
    }



    public function GetIndex(){

      
        // $obj = new \stdClass();

        // $obj -> name ='sohair';
        // $obj ->id =5;
        // $obj ->gender = 'male';

        $data=[];
        // return view(  'welcome' , compact('obj')); // compact is a function in php
        // return view('welcome')->with('name','sohair');
        return view('welcome')->with('data','$data');
    
    }
}
