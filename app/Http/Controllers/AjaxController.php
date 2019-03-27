<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Personalpage;

class AjaxController extends Controller
{

    public function index(Request $request){

        $user = User::find(Auth::user()->id);
        if ($user->dates->contains($request->mydate)) {
            $user->dates()->detach($request->mydate);
        } else {
        $user->dates()->attach($request->mydate);
        }

        $mydates =  $user::first()->dates()->get();

        
        $response = array(
            'status' => 'success',
            'msg' => $mydates,
        ); 

       
        return response()->json($response); 
     }

  
  
} //end class



