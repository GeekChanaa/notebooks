<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\country;
use App\User;
use App\chapter;
use App\section;
use App\notebook;
use App\page;
use DB;

class dashboardController extends Controller
{

    //Index page
    public function index(){
      // getting current year and month
      $year = date("Y");
      $month = date('m', strtotime('-0 month'));
    
      $list_users = DB::table('notebooks')
      ->leftJoin('sections','notebooks.id','=','sections.notebook_id')
      ->leftJoin('chapters','chapters.section_id','=','sections.id')
      ->leftJoin('pages','pages.chapter_id','=','chapters.id')
      ->select('notebooks.user_id',DB::raw('count(notebooks.id) as nbr_notebooks'),DB::raw('count(sections.id) as nbr_sections'),DB::raw('count(chapters.id) as nbr_chapters'),DB::raw('count(pages.id) as nbr_pages'))
      ->groupBy('notebooks.user_id')
      ->get();
      $data=[
        'nbr_users_last_month' => User::whereYear('created_at','=',$year)->whereMonth('created_at','=',$month)->count(),
        'nbr_users_last_year' => User::whereYear('created_at','=',$year)->count(),
        'nbr_notebooks_last_year' => notebook::whereYear('created_at','=',$year)->count(),
        'nbr_notebooks_last_month' => notebook::whereYear('created_at','=',$year)->whereMonth('created_at','=',$month)->count(),
        'list_users' => $list_users,
        'nbr_users' => User::count(),
        'nbr_notebooks' => notebook::count(),
        'storage_capacity' => 500,
        'nbr_connected_users' => 200,
        'nbr_users_year' => $this->nbr_users_year(2019),
        'nbr_notebooks_year' => $this->nbr_notebooks_year(2019)
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

    // Number of notebooks per year
    protected function nbr_notebooks_year($year){
      $nbr_notebooks = [];
      for($i=1 ; $i<13 ; $i++){
        $nbr_notebooks[$i] = notebook::whereYear('created_at','=',$year)->whereMonth('created_at','=',$i)->count();
      }
      return $nbr_notebooks;
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
