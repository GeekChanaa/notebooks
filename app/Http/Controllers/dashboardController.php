<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //Index page
    public function index(){
      return view('dashboard.index');
    }
}
