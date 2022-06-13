<?php

namespace App\Http\Controllers;

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
    

}
