<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\notebook;
use App\User;

class notebooksController extends Controller
{
    //notebooks
    public function notebooks(){
      return view('dashboard.desktop.notebooks');
    }

    //LISTING OF NOTEBOOKS
    public function list(){
      $list_notebooks = notebook::all();
      $data=[
        'list_notebooks' => $list_notebooks,
      ];
      return view('dashboard.notebooks.list')->with($data);
    }

    //CREATE NOTEBOOK FORM
    public function create(){
      $data=[
        'list_users' => User::all(),
      ];
      return view('dashboard.notebooks.create')->with($data);
    }

    //ADD NOTEBOOK
    public function add(Request $request){
      $notebook = new notebook;
      $notebook->title = $request->title;
      $notebook->user_id = $request->user_id;
      $notebook->visibility = $request->visibility;
      $notebook->save();
      return redirect('/dashboard/notebooks');
    }

    //DELETE NOTEBOOK
    public function delete(Request $request){
      $notebook = notebook::where('id','=',$request->id)->first();
      $notebook->delete();
      return redirect()->back();
    }

    //UPDATE NOTEBOOK FORM
    public function update($id){
      $notebook = notebook::where('id','=',$id)->first();
      $data=[
        'list_users' => User::all(),
        'notebook' => $notebook,
      ];
      return view('dashboard.notebooks.update')->with($data);
    }

    //UPDATE NOTEBOOK
    public function updat(Request $request){
      $notebook = notebook::where('id','=',$request->id)->first();
      $notebook->title = $request->title;
      $notebook->user_id = $request->user_id;
      $notebook->visibility = $request->visibility;
      $notebook->save();
      return redirect('/dashboard/notebooks');
    }

    //SHOW NOTEBOOK FORM
    public function show($id){
      $notebook = notebook::where('id','=',$id)->first();
      $data=[
        'notebook' => $notebook,
      ];
      return view('dashboard.notebooks.show')->with($data);
    }
}
