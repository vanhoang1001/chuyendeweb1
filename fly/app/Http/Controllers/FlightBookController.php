<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Model\Bookflight;



class FlightBookController extends Controller {

    public function index() {
        $bl = Bookflight::all();
        return view('/flight-book', ['bl' => $bl]);
    }
    

}

