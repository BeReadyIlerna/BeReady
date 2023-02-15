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
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'surname' =>  ['required', 'string', 'min:2', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            "phone" => ["required", "numeric", "digits:9"],
            'password' => $this->passwordRules(),
            "way_name" => ["required"],
            "province" => ["required"],
            "town" => ["required"],
            "zipcode" => ["required"]
        ])->validate();

        $address = new Address();
        $address->way_type = $input['way_type'];
        $address->way_name = $input['way_name'];
        $address->province = $input['province'];
        $address->town = $input['town'];
        $address->zipcode = $input['zipcode'];
        $address->save();

        return User::create([
            'name' => $input['name'],
            'surname' => $input['surname'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'password' => Hash::make($input['password']),
            'address_id' => $address->id
        ]);
    }
}
