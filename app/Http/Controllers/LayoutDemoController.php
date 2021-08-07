<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutDemoController extends Controller
{
    public function displayLayout(){
        return view('demo.master-layout');
    }

    public function displayTable(){
        return view('demo.table');
    }

    public function displayForm(){
        return view('demo.form');
    }
}
