<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{
    

    public function index(){
        
        return view('auth.edit');
    }


    public function update(Request $request, $id){
        
        $user = User::find($id);
        $user -> update($request->all());
        return back();
    }
}
