<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    //LISTING OF USERS
    public function list(){
      $list_users = User::paginate(10);
      $data=[
        'list_users' => $list_users,
      ];
      return view('dashboard.users.list')->with($data);
    }

    //UPDATE FORM USERS
    public function update($id){
      $user = User::where('id','=',$id)->first();
      $data=[
        'user' => $user,
      ];
      return view('dashboard.users.update')->with($data);
    }

    // UPDATE USER
    public function updat(Request $request){
      $user = User::where('id','=',$request->id)->first();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->phone = $request->phone;
      $user->country_id = $request->country_id;
      $user->save();
      return redirect('/dashboard/users');
    }

    // SHOW USER
    public function show($id){
      $user = User::where('id','=',$id)->first();
      $data=[
        'user' => $user,
      ];
      return view('dashboard.users.show')->with($data);
    }

    // DELETE USER
    public function delete(Request $request){
      $user = User::where('id','=',$request->id)->first();
      $user->delete();
      return redirect()->back();
    }
}
