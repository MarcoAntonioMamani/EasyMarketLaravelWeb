<?php

namespace EasyMarket\Http\Controllers;

use Illuminate\Http\Request;

use EasyMarket\Http\Requests;
use Socialite;
use EasyMarket\SocialAccountService;
class SocialAuthController extends Controller
{
    //
    public function redirect(){
    	return Socialite::driver('facebook')->redirect();
    }
    public function callback(SocialAccountService $service) {
	 $user = $service->createOrGetUser(Socialite::driver('facebook')->user()); auth()->login($user);
	  return redirect()->to('/home');
	 } 
	 
}
