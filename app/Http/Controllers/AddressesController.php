<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressesController extends Controller
{
    public function update(Request $request){
        $request->validate([
            'way_type' => 'required',
            'way_name' => 'required',
            'province' => 'required|string|',
            'town' => 'required|string|',
            'zipcode' => 'required|numeric|digits:5'
        ]);

        $errors = $request->has('errors');

        if (!$errors) {
            $user = User::findOrFail(Auth::id());
            $address = Address::findOrFail($user->address_id);

            $address->update(['way_type' => $request->way_type,
                              'way_name' => $request->way_name,
                              'province' => $request->province,
                              'town' => $request->town,
                              'zipcode' => $request->zipcode]);

            return back()->with('message', 'Dirección actualizada');
        } else {
            $errors = $request->errors();
            return back()->with('errors', $errors);
        }
    }
}
