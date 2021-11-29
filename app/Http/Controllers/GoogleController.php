<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            // dd($user);

            $finduser = User::where('google_id',$user->getId())->first();
            if($finduser){
                Auth::login($finduser);
                return redirect()->route('landing');
            }else {
                $newUser =User::create([
                    'name'=> $user->name,
                    'email'=> $user->email,
                    'google_id'=> $user->id,
                    'password'=>Hash::make("_urootd" . $user->getId())
                ]);

                Auth::login($newUser);
                return redirect()->route('landing');
            }
        } catch (\Throwable $th) {
            dd('gagal');
        }
    }
    
}