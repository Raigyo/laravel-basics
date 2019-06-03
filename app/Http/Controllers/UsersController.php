<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function create()
  {
    return view('infos');
  }

  public function store(Request $request)
  {
    //return 'Your name is ' . $request->input('name');
    //return view('infos')->with('Your name is ' . $request->input('name'));
    $data = [];
    $data['theName'] = 'Your name is ' . $request->input('name');
    return view('thanks')->with($data);
  }
}
