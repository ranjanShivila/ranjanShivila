<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Deatils; 
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;



class auth extends Controller
{
public function login(){
    return view('login');
}


public function register(){
    return view('welcome');



}


public function registeruser(Request $req){
 
    $user=new Deatils();
    $user->name=$req->name;
    $user->email=$req->email;
    $user->address=$req->address;
    $user->password=Hash::make($req->password);
    $user->roll=$req->roll;
    
    $res=$user->save();
    if($res){
        return redirect('login')->with('sucess' ,'u have sucessfully register');
    }else{
        return back()->with('failed','something went wrong baby');
    }






}
public function redirecttogoogle(){
    return Socialite::driver('google')->redirect();

}
public function redirectgooglecallback(){

    $user = Socialite::driver('google')->user();
    $this->_registerLoginUser($user);
    return redirect("userdash");


}

protected function _registerLoginUser($data){
$user=Deatils::where('email','=',$data->email)->first();
if(!$user){
    $user=new Deatils();
    $user->name=$data->name;
    $user->email=$data->email; 
    session()->put('email', $user->email);
    $user->token=$data->token; 
    $user->avatar=$data->avatar;
    $user->save();

   

}


}
public function redirecttofacebook(){
    return Socialite::driver('facebook')->redirect();

}
public function redirectfacebookcallback(){

    $user = Socialite::driver('facebook')->user();
    $this->_registerLoginUser($user);
    return redirect("userdash");
}

public function loggedin(Request $req){


    $email=$req->email;
    $user=DB::table('deatils')->where('email',$email)->first();
    if($user){
        if(Hash::check($req->password,$user->password)){
        
            $request=Session()->put('email',$req->email);
                    if($user->roll==1){
                        $session=session()->put('email',$email);
                        return redirect('dashboard');
                    }
                    else{
                        $session=session()->put('email',$email);
                        return redirect("userdash");

                    }



        }
        else{
            return back()->with('not','password not matched');
        }
    }
    else{
        return back()->with('failed','something went wrong baby');
    }
}
public function dashboard(){
    return view('dashboard');
}
public function userdash(){
    return view('userdash');
}

public function flush(Request $req){
    $data=$req->session()->flush();
    return redirect('login');

}


}
