<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class PublicController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $actors = Actor::all();

    return view('actors.index', compact('actors'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Actor $actor)
  {
    return view('actors.show', compact('actor'));
  }
}
