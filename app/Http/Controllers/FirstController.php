<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(){
//        return[
//            'name'=> "Nur",
//            'city'=> "Dhaka",
//            'country'=> "Bangladesh"
//        ];

        $name= 'Mohammad Affan';
//        return view('template.my-template', compact('name') );
//        return view('template.my-template')->with('name', $name);
        return view('template.my-template', [
            'name'=> $name
            ]);
    }
}
