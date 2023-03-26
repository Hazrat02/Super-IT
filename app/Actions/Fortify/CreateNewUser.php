<?php

namespace App\Actions\Fortify;

use App\Models\User;
use BaconQrCode\Renderer\Path\Move;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull;
use Illuminate\Http\UploadedFile;

use function Termwind\render;

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
       

        if (isset($input['social_photo_path'])) {
            $name = $input['social_photo_path'];
        }else{
            
        $file = $input['profile_photo_path'];
        
        
        $name =rand(0000000,999999) .$file->getClientOriginalName();
        $file->move(public_path('storage/profile'), $name);
       
    

        }
       
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'role' => $input['role'],

            'name' => $input['name'],
            'email' => $input['email'],
            'socialite_id' => $input['socialite_id'],
            'password' => Hash::make($input['password']),
            'profile_photo_path' => $name,
        ]);
    }
}
