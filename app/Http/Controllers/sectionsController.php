<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\section;

class sectionsController extends Controller
{
    //LISTING
    public function list($notebook_id){
      $list_sections = section::where('notebook_id','=',$notebook_id)->get();
      $data=[
        'notebook_id' => $notebook_id,
        'list_sections'=> $list_sections,
      ];
      return view('dashboard.sections.list')->with($data);
    }

    //CREATE SECTIONS FORM
    public function create($notebook_id){
      $data=[
        'notebook_id' => $notebook_id,
      ];
      return view('dashboard.sections.create')->with($data);
    }

    //ADD SECTIONS
    public function add(Request $request){
      $section = new section;
      $section->title = $request->title;
      $section->notebook_id = $request->notebook_id;
      $section->save();
      return redirect('/dashboard/notebook/'.$request->notebook_id.'/sections');
    }

    //DELETE SECTIONS
    public function delete(Request $request){
      $section = section::where('id','=',$request->id)->first();
      $section->delete();
      return redirect()->back();
    }

    //UPDATE SECTIONS FORM
    public function update($id){
      $section = section::where('id','=',$id)->first();
      $data=[
        'section' => $section,
      ];
      return view('dashboard.sections.update')->with($data);
    }

    //UPDATE SECTIONS
    public function updat(Request $request){
      $section = section::where('id','=',$request->id)->first();
      $section->title = $request->title;
      $section->save();
      return redirect('/dashboard/notebook/'.$section->notebook_id.'/sections');
    }

    //SHOW SECTIONS FORM
    public function show($id){
      $section = section::where('id','=',$id)->first();
      $data=[
        'section' => $section,
      ];
      return view('dashboard.sections.show')->with($data);
    }
}
