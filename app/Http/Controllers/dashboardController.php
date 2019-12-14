<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\country;
use App\User;
use App\chapter;
use App\section;
use App\notebook;
use App\page;

class dashboardController extends Controller
{
    //Index page
    public function index(){
      $data=[
        'nbr_users' => User::count(),
        'nbr_notebooks' => notebook::count(),
        'storage_capacity' => 500,
        'nbr_connected_users' => 200,
      ];
      return view('dashboard.index')->with($data);
    }

    // Number of users per year
    protected function nbr_users_year($year){
      $nbr_users = [];
      for($i=1 ; $i<13 ; $i++){
        $nbr_users[$i] = User::whereYear('created_at','=',$year)->whereMonth('created_at','=',$i)->count();
      }
      return $nbr_users;
    }

    // USERS STATISTICS
    public function users_statistics(){
      $data=[
        'nbr_users' => User::count(),
        'nbr_users_year' => $this->nbr_users_year(2019),
      ];
      return view('dashboard.statistics.users')->with($data);
    }

    //NOTEBOOKS STATISTICS
    public function notebooks_statistics(){
      return view('dashboard.statistics.notebooks')->with($data);
    }
}
