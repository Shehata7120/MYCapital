<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionsController extends Controller
{

    public function index()
    {
        return Institution::with('type')->get();
    }
    public function show($id){

        $inst = Institution::find($id)->with('type')->get();
        return $inst;


    }
    public function search(Request $request){

        $request->validate(
            [
                'search' => 'required|string'
            ]
        );

      $inst = Institution::with('type')->where('name' ,'like' , '%'. $request->get('search')  . '%')
      ->orWhereHas('type' , function($q) use($request) {

         return   $q->where('name' ,'like' , '%'. $request->get('search')  . '%');
      })->get();

      return $inst;

    }
}
