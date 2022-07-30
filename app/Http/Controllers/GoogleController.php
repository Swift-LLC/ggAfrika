<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;
use Illuminate\Support\Facades\Hash;

class GoogleController extends Controller
{
    
    public function redirectToGoogle()

    {

        return Socialite::driver('google')->redirect();

    }

    public function googleSignin()
    {
        try {
    
            $user = Socialite::driver('google')->user();
            $googleId = User::where('google_id', $user->id)->first();
     
            if($googleId){
                Auth::login($googleId);
                return redirect('/');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => Hash::make($data['password'])
                ]);
    
                Auth::login($createUser);
                return redirect('/');
            }
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
