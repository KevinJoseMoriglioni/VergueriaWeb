<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Home()
    {
        return view('pages/admins/homeAdmins');
    }

    public function VergueriasIndex(){
        return view('pages/admins/vergueriasAdmins');
    }

    public function UsuariosIndex(){
        return view('pages/admins/usuariosAdmins');
    }

    public function ContenidoIndex(){
        return view('pages/admins/contenidoAdmins');
    }

    public function PedidosIndex(){
        return view('pages/admins/pedidosAdmins');
    }
}
