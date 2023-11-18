<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view("frontend.signin");
    }

    public function submit(Request $request) {
        $email = $request->email;
        $phone = $request->phone;
        $password = $request->password;
        if($email){
            $user = User::firstWhere('email',$email);
        }else if($phone){
            $user = User::firstWhere('phone',$phone);
        }else{
            return back();
        }
        if(!$user){
            return back();  
        }

        if(Hash::check($password,$user->password)){
            Auth::login($user);
            if($user->type=="customer"){
                return redirect("dashboard");
            }else if($user->type == "admin"){
                return redirect("admin");
            }
        }

        
    }
}
