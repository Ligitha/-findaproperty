<?php

namespace App\Http\Controllers;
use App\Http\Controllers\controller;
use App\property;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Input;

class propertyController extends Controller
{
    public function getdetails(Request $req)
    {
        $data=property::all();
        return view('welcome')->withData($data);
    }
}
