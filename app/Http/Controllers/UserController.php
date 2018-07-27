<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users =[
            'Kevin',
            'Andres',
            'Joel',
            'Nicolas',
            'Fabian',
        ];
        $title = 'Lista de usuarios';
        return view('users',compact('title','users'));
    }

    public function show($id){
        return 'Mostrando detalle del usuario: '.$id;
    }

    public function create(){
        return 'Creando usuario';
    }

    public function edit($id){
        return 'Editando la informacion del usuario: '.$id;
    }

}
