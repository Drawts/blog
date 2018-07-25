<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function withNick($name,$nickname){
        $name=ucfirst($name);
        return "Bienvenido {$name}, tu nickname es: {$nickname}";
    }
    public function withOutNick($name){
        $name=ucfirst($name);
        return "Bienvenido {$name}.";
    }
}
