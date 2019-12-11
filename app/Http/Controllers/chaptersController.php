<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chapter;

class chaptersController extends Controller
{
    //LISTING OF CHAPTERS
    public function list($section_id){
      $list_chapters = chapter::where('section_id','=',$section_id)->first();
      $data=[
        'list_chapters' => $list_chapters,
      ];
      return view('dashboard.chapters.list')->with($data);
    }

    //CREATE CHAPTER FORM
    public function create($section_id){
      $data=[
        'section_id' => $section_id,
      ];
      return view('dashboard.chapters.list')->with($data);
    }

    //ADD CHAPTER
    public function add(Request $request){
      $chapter = new chapter;
      $chapter->title = $request->title;
      $chapter->section_id = $request->section_id;
      $chapter->save();
      return redirect('/dashboard/section/'.$request->section_id.'/chapters');
    }

    // DELETE CHAPTER
    public function delete(Request $request){
      $chapter = chapter::where('id','=',$request->id)->first();
      $chapter->delete();
      return redirect()->back();
    }

    //UPDATE CHAPTERS FORM
    public function update($id){
      $chapter = chapter::where('id','=',$id)->first();
      $data=[
        'chapter' => $chapter,
      ];
      return view('dashboard.chapters.update')->with($data);
    }

    //UPDATE CHAPTERS
    public function updat(Request $request){
      $chapter = chapter::where('id','=',$request->id)->first();
      $chapter->title = $request->title;
      $chapter->save();
      return redirect('/dashboard/section/'.$section->notebook_id.'/sections');
    }

    //SHOW CHAPTERS FORM
    public function show($id){
      $chapter = chapter::where('id','=',$id)->first();
      $data=[
        'chapter' => $chapter,
      ];
      return view('dashboard.chapters.show')->with($data);
    }
}
