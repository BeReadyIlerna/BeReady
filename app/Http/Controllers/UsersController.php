<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;


class UsersController extends Controller
{
   // public function signups(){
   //      return view("signup");
   // }

   public function create(Request $request){

      $request->validate([
         "name"=>"required","max:255",
         "surname"=>"required","max:255",
         "email"=>"required","email",
         "phone"=>"required","numeric","digits:10",
         "password"=>"required",
         "way_name"=>"required",
         "province"=>"required",
         "town"=>"required",
         "zipcode"=>"required",
         // "observation"=>"required","max:255"
      ]);

      $errors = $request->has('errors');

      if (!$errors) {
         $address = new Address;
         $address->way_name = $request->way_name;
         $address->town = $request->town;
         $address->province = $request->province;
         $address->zipcode = $request->zipcode;

         $address->save();

         $user = new User;
         $user->name = $request->name;
         $user->surname = $request->surname;
         $user->email = $request->email;
         $user->phone = $request->phone;
         $user->password = $request->password;
         $user->address_id = $address->id;

         $user->save();

         return back()->with('message', 'Usuario creado'); 
      } else {
         $errors = $request->errors();
         return back()->with('errors', $errors);
      }
      
   }
}
