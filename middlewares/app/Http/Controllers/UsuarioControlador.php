<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class UsuarioControlador extends Controller
{
    public function __construct(){
        // $this->middleware('primeiro');
    }

    public function Index(){
        Log::debug('UsuarioControlador@Index');
        return '<h3> Lista de Usuários <h3>' .
            '<ul>' .
                '<li> Daniel </li>' .
                '<li> Claudio </li>' .
                '<li> Jessica </li>' .
                '<li> Matheus </li>' .
            '</ul>';
    }
}
