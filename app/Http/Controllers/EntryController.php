<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function create(){
        return view('entries.create');
    }

    public function store(Request $request){
        dd($request->all());
    }
}
