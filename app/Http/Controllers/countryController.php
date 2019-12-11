<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\country;

class countryController extends Controller
{
    //LISTING OF COUNTRIES
    public function list(){
      $list_countries = country::paginate(10);
      $data=[
        'list_countries' => $list_countries,
      ];
      return view('dashboard.countries.list')->with($data);
    }

    //CREATE COUNTRY FORM
    public function create(){
      return view('dashboard.countries.create');
    }

    //ADD COUNTRY
    public function add(Request $request){
      $country = new country;
      $country->name = $request->name;
      $country->iso3 = $request->iso3;
      $country->iso2 = $request->iso2;
      $country->phonecode = $request->phonecode;
      $country->capital = $request->capital;
      $country->currency = $request->currency;
      $country->save();
      return redirect('/dashboard/countries');
    }

    //DELETE COUNTRY
    public function delete(Request $request){
      $country = country::where('id','=',$request->id)->first();
      $country->delete();
      return redirect()->back();
    }

    //SHOW COUNTRY
    public function show($id){
      $country = country::where('id','=',$id)->first();
      $data=[
        'country' => $country,
      ];
      return view('dashboard.countries.show')->with($data);
    }

    //UPDATE COUNTRY FORM
    public function update($id){
      $country = country::where('id','=',$id)->first();
      $data=[
        'country' => $country,
      ];
      return view('dashboard.countries.update')->with($data);
    }

    //UPDATE COUNTRY
    public function updat(Request $request){
      $country = country::where('id','=',$request->id)->first();
      $country->name = $request->name;
      $country->iso3 = $request->iso3;
      $country->iso2 = $request->iso2;
      $country->phonecode = $request->phonecode;
      $country->capital = $request->capital;
      $country->currency = $request->currency;
      $country->save();
      return redirect('/dashboard/countries');
    }
}
