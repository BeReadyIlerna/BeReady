<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class UsersController extends Controller
{
   public function singups(){
        return view("singup");
   }

   public function createuser(Request $request){

      $request->validate([
         "name"=>"required","max:255",
         "surname"=>"required","max:255",
         "email"=>"required","email",
         "phone"=>"required","numeric","digits:10",
         "password"=>"required",
         "way_name"=>"required",
         "town"=>"required",
         "zipcode"=>"required",
         "observation"=>"required","max:255"

      ]);

      $user = new User;
      $user->name = $request->name;
      $user->surname = $request->surname;
      $user->email = $request->email;
      $user->phone = $request->phone;
      $user->password = $request->password;
      $user->way_name = $request->way_name;
      $user->town = $request->town;
      $user->zipcode = $request->zipcode;
      $user->observation = $request->observation;
      $user->save();

      
   }
}
