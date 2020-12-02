<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proyecto extends Controller
{
    public function verificar(Request $request){
        $user = $request -> input('user');
        $pass = $request -> input('pass');

        if ( $user == 'AGUIRREMOLINA' && $pass == 'dattebayo'){
            $url = 'correct';
        } else {
           $url= 'incorrect';
        }
        return view ($url, [
            'user' => $request -> input('user')
        ]);
    }


    public function login(){
        return view('formulario');
    } //
}
