<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        echo "Sansan Ramadan";
    }

    public function getCity($city) {
        echo "Kota Saya di " . $city;
    }

    public function getStudent($name, $code){
        echo "Nama Saya " . $name, " NRP " . $code;
    }
}
