<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('register');
    }

    public function welcome(Request $request){
        $first= $request['first'];
        $last= $request['last'];
        echo "<h1>Selamat Datang $first $last</h1>";
        echo "<h3>Terima kasih tekah bergabung di Sanberbook. Social Media kita bersama!</h3>";
    }
}