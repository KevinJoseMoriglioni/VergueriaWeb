<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientsController extends Controller
{
    public function Home()
    {
        $header = "Home";
        return view('pages/homeClients');
    }

    public function Productos(){
        $header = "Productos";
        return view ('pages/productosClients', compact('header'));
    }

    public function Sucursal($sucursal){
        $header = "Blog";
        return view ('pages/sucursalClients', compact('header'));
    }

    public function Eventos(){
        $header = "Eventos";
        return view('pages/eventosClients', compact('header'));
    }

    public function WhoWeAre(){
        $header = "WhoWeAre";
        return view('pages/whoWeAreClients', compact('header'));
    }

    public function AbrirFranquicia(){
        $header = "Franquicia";
        return view('pages/franquiciaClients', compact('header'));
    }

    public function Contacto(){
        $header = "Contacto";
        return view('pages/contactoClients', compact('header'));
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
