<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class clientsController extends Controller
{
    public function Home()
    {
        return view('pages/clients/homeClients');
    }

    public function Productos(){
        return view ('pages/clients/productosClients');
    }

    public function Sucursal($sucursal){
        return view ('pages/clients/sucursalClients');
    }

    public function Eventos(){
        return view('pages/clients/eventosClients');
    }

    public function WhoWeAre(){
        return view('pages/clients/whoWeAreClients');
    }

    public function AbrirFranquicia(){
        return view('pages/clients/franquiciaClients');
    }

    public function Contacto(){
        return view('pages/clients/contactoClients');
    }

    public function Legal($aspect){
        if($this->ExistAspect($aspect)){
            return view ('pages/clients/legalClients',  compact('aspect'));
        }else{
            return view ('pages/clients/legalClients');
        }
    }

    function ExistAspect($aspect){
        return ($aspect =="condiciones" || $aspect == "privacidad" || $aspect == "aviso")?true:false;
    }
}
