<?php

namespace App\Actions\Fortify;

use App\Http\Controllers;
use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'surname' =>  ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            "phone"=> ["required","numeric","digits:9"],
            'password' => $this->passwordRules(),
            "way_name"=>["required"],
            "province"=>["required"],
            "town"=>["required"],
            "zipcode"=>["required"]
        ])->validate();

        $saveAddress = Address::create([
            'way_type' => $input['way_type'],
            'way_name' => $input['way_name'],
            'town' => $input['town'],
            'province' => $input['province'],
            'zipcode' => $input['zipcode'],
        ]);
  
        $address = DB::table('addresses')->select('id')
            ->where('way_type', $saveAddress->way_type)
            ->where('way_name', $saveAddress->way_name)
            ->where('town', $saveAddress->town)
            ->where('province', $saveAddress->province)
            ->where('zipcode', $saveAddress->zipcode)
            ->get();


        return User::create([
            'name' => $input['name'],
            'surname' => $input['surname'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'password' => Hash::make($input['password']),
            'address_id' => $address
        ]);
    }
}
