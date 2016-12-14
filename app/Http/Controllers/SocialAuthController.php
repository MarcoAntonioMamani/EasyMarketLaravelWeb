<?php

namespace MicroMercado\Http\Controllers;

use Illuminate\Http\Request;

use MicroMercado\Http\Requests;
use Socialite;
use MicroMercado\SocialAccountService;
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
