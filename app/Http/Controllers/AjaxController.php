<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{

    public function index(Request $request){
        $response = array(
            'status' => 'success',
            'msg' => "This is a funny simple message.",
        );
        return response()->json($response); 
     }

  
  
} //end class



