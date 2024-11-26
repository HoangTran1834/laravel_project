<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\User;

class GithubController extends Controller
{
    public function redirect() {
        return Socialite::driver('github')->redirect();
    }

    public function callbackGithub() {

        try {      
            $github_user = Socialite::driver('github')->user(); 
            $user = User::where('email', $github_user->email)->first();
            
        if (!$user) {
            $data = [
                'role_id' => 2,
                'name' => $github_user->name,
                'email' => $github_user->email,
                'github_id' => $github_user->id,
            ];

            $userConnected = User::create($data);

            auth()->login($userConnected);
            }

            auth()->login($user);
            return redirect()->route('home');
        } catch (\Throwable $th) {
            // dd('sth went wrong', $th->getMessage());
            return redirect()->route('login');
        }
    }
}
