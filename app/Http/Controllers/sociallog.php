<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Laravel\Socialite\Facades\Socialite;

class sociallog extends Controller
{
    // google---------------------------------------
    public function googlestore(Request $request)
    {
        $googleUser = Socialite::driver('google')->user();

        $existuser = User::all()
            ->where('email', $googleUser->getEmail())
            ->first();

        if (isset($existuser)) {
            Auth::login($existuser);

            // return redirect('user/parsials/home');
            return redirect()->route('dashboard');
        } else {
            // dd($googleUser);
            return view('auth\socialauth', compact('googleUser'));
        }
    }

    // fb--------------------------------------------

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $exituser = User::all()
            ->where('socialite_id', $user->id)
            ->first();
        if ($exituser) {
            Auth::login($exituser);
        } else {
            $fbuser = User::create([
                'role' => '1',
                'name' => $user->name,

                'socialite_id' => $user->id,

                'profile_photo_path' => $user->getAvatar(),
            ]);
            Auth::login($fbuser);
        }

        return redirect()->route('dashboard');
    }

    //github-----------------------------------------------
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {


        $user = Socialite::driver('github')->user();
        $exituser=User::all()
        ->where('socialite_id', $user->id)
        ->first();
        
        if ($exituser) {
            Auth::login($exituser);
        } else {
            $fbuser = User::create([
                'role' => '1',
                'name' => $user->name,
                // 'email'=> $user->email,
                'socialite_id' => $user->id,

                'profile_photo_path' => $user->getAvatar(),
            ]);
            Auth::login($fbuser);
        }

        return redirect()->route('dashboard');
    }
        // $user->token;
    
}
