<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use App\Models\Persons;

class PersonsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function create(Request $request)
    {
      $instance = new Persons;
      
      $instance->name = $request->name;
      $instance->surename = $request->surename;
      $instance->save();

      $resp = array('status'=>1, 'message'=>'success');
      return response()->json($resp);
    }

    //
}