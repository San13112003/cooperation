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

    //Method untuk memanggil Form
    public function create() {
        return view('customer.create');
    }

    //Method untuk mengambil input form
    public function store(Request $request) {
       $this->validate($request, [
            'name' => 'required',
       ]);
       
        $name = $request->name;

        return view('customer.show', compact('name'));
    }
}
