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
