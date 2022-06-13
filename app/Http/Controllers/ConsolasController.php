<?php

namespace App\Http\Controllers;
use App\Models\Consola;

use Illuminate\Http\Request;

class ConsolasController extends Controller
{
    public function getBrands(){
        //$marcas=["Microsoft","Sony","Nintendo"]; PHP method
        $brands= array();
        $brands[]="Microsoft";
        $brands[]="Sony";
        $brands[]="Nintendo";
        
        return $brands;


    }
    //function to get all consoles in DB
    public function getConsoles(){
        //select * from consoles
        $consoles = Consola::all(); // this is a Select
        return $consoles;

    }

    //examples console
    public function createConsole(){
        //Insert into consoles
        $console = new Consola();
        $console->Nombre="Nintendo switch";
        $console->Marca='Nintendo';
        $console->Anio='2015';


        $console->save();
        return $console;
    }









}
