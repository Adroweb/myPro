<?php

namespace App\Modules\User\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{

    public function redirectToProvider($provider)
    {
       // dd("ffffffffffffff");
        return Socialite::driver($provider)->redirect();
    }
    public function handleProviderCallback($provider)
    {
       // dd("ddddddddddddddddd");
        $user = Socialite::driver($provider)->user();
        dd($user);

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id
        ]);
    }


}
