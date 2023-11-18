<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index() {
        return view("frontend.signup");
    }
    public function store(SignupRequest $request) {
        $user=null;
        if($request->email){
             $user= User::where('email',$request->email)->first();
        }else{
            $user= User::where('phone',$request->phone)->first();

        }
    if($user){
        return redirect("signup");
    }

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->password = Hash::make($request->password);
    $user->save();
    Auth::login($user);
    return redirect('/');
    }

}
