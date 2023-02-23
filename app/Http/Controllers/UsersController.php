<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use App\Models\Order;
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

   public function showOrders()
   {
      $user = User::findOrFail(Auth::id());
      $orders = Order::where('user_id', Auth::id())->get();
      return view('user.order', @compact('user', 'orders'));
   }

   public function showUsers()
   {
       $users = User::paginate(10);
       return view('admin.users', @compact('users'));
   }
}
