<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{

   /* Process the logout request */
   public function logout(Request $request)
   {
      Auth::logout();
      return redirect('/')->with('message', 'Has cerrado la sesión');
   }
}
