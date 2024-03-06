<?php

namespace App\Http\Controllers;
use App\Models\User;

class ExampleController extends Controller
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

    public function index(){
        return User::all();
    }
    //
    public function show($id){
        return User::find($id); 
    }
}
