<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{

   public function showData()
   {
      $user = User::findOrFail(Auth::id());
      $address = Address::findOrFail($user->address_id);
      return view('user.myData', @compact('user', 'address'));
   }

   public function supportView()
   {
      $user = User::findOrFail(Auth::id());
      return view('user.support', @compact('user'));
   }

   /* Process the logout request */
   public function logout(Request $request)
   {
      Auth::logout();
      return redirect('/')->with('message', 'Has cerrado la sesión');
   }
}
