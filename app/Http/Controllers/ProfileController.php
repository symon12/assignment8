<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
   public function index(Request $request){
       $id=$request->id;
        $name="Donal Trump";
        $age="75";

        $data=array(
            "id"=>"$id",
            "name"=>"$name",
            "age"=>"$age"
        );

    $name="access_token";
    $value="23-XYZ";
    $minutes =1;
    $path="/";
    $domain=$_SERVER["SERVER_NAME"];
    $secure=false;
    $httpOnly=true;
<<<<<<< HEAD
=======
    
>>>>>>> bc9a9910e6aef81b3d61e9cb46a764f25144618b

    $response=response()->json($data,200)->cookie(
        $name ,$value , $minutes, $path ,$domain ,$secure , $httpOnly
    );
    return $response;
    }
   

   
}

