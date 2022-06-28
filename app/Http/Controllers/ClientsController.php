<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class clientsController extends Controller
{
    public function Home()
    {
        return view('pages/homeClients');
    }

    public function Productos(){
        return view ('pages/productosClients');
    }

    public function Sucursal($sucursal){
        return view ('pages/sucursalClients');
    }

    public function Eventos(){
        return view('pages/eventosClients');
    }

    public function WhoWeAre(){
        return view('pages/whoWeAreClients');
    }

    public function AbrirFranquicia(){
        return view('pages/franquiciaClients');
    }

    public function Contacto(){
        return view('pages/contactoClients');
    }

    public function Legal($aspect){
        if($this->ExistAspect($aspect)){
            return view ('pages/legalClients',  compact('aspect'));
        }else{
            return view ('pages/legalClients');
        }
    }

    function ExistAspect($aspect){
        return ($aspect =="condiciones" || $aspect == "privacidad" || $aspect == "aviso")?true:false;
    }
}
