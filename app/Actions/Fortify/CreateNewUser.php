<?php

namespace App\Actions\Fortify;

use App\Models\User;
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
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'age' => ['required', 'int','between:18,60'],
            'gender' =>['required', 'in:male,female,others'],
            'blood-group' =>['required'],
            'address'=>['required'],
            'contact_number' =>['required','numeric'],
            'date_of_donation' =>['required', 'date','after:tomorrow'],
            'any_diseases'=>['required', 'boolean'],
            'status'=>['required','boolean'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'age' => $input['age'],
            'gender' =>$input['gender'],
            'blood-group' =>$input['blood-group'],
            'address'=>$input['address'],
            'contact_number' =>$input['contact_number'],
            'date_of_donation' =>$input['date_of_donation'],
            'any_diseases'=>$input['any_diseases'],
            'status'=>$input['status']

        ]);
    }
}
