<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\notebook;
use App\User;
use auth;
use Response;

class notebooksController extends Controller
{
  /*
  MAIN WEBSITE
  PAGES
  */
    //notebooks
    public function notebooks(){
      $list_notebooks = notebook::where('user_id','=',Auth::user()->id)->get();
      $data=[
        'list_notebooks' => $list_notebooks,
      ];
      return view('desktop.notebooks')->with($data);
    }
    // Add new notebook
    public function add_notebook(Request $request){
        $notebook = new notebook;
        $notebook->user_id = Auth::user()->id;
        $notebook->title = $request->title;
        $notebook->visibility = $request->visibility;
        $notebook->save();
        return Response::json(array('success'=>true,'notebook'=>$notebook));
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
