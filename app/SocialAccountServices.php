<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Laravel\Socialite\Contracts\User as ProviderUser ;

class SocialAccountServices extends Model
{
    //



    public function findOrCreate(ProviderUser $providerUser,$provider){

     $account=socialmodel::where('provider_id',$providerUser->getId())->where('provider_name',$provider);


if($account)
{
    return "good";//  $account->user;
}

else{
 $user =User::Where('email',$providerUser->getEmail())->first();
if(!$user){
$user =User::create([
    'email'=>$providerUser->getEmail(),
    'name'=>$providerUser->getName()
]);

}
$user->socialmodel()->create([


    'provider_name'=>$provider,
    'provider_id'=>$providerUser->getId()
]);
return $user;

}




    }

}
