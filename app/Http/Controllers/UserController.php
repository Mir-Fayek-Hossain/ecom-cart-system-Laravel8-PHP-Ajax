<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    //Admin Login
    function admin(Request $req){
        $user= User::where(['name'=>$req->name])->first();
        if(!$user){
            $w="wrong username.";
            $req->session()->put('warning',$w);
            return redirect('/admin');
        }
        else if(!Hash::check($req->password,$user->password)){
            $w="Wrong password.";
            $req->session()->put('warning',$w);
            return  redirect('/admin');
        }
        else{  
            $req->session()->put('user',$user);
            return  redirect('admin/admin-page');
        }
    }
 
    //Login User
    function login(Request $req){
        $user= User::where(['email'=>$req->email])->first();
        $s=$req->email;
        if(!$user){
            $req->session()->put('b',$s);
            $w="wrong username.";
            $req->session()->put('warning',$w);
            return redirect('/registration');
        }
        else if(!Hash::check($req->password,$user->password)){
            $w="Wrong password.";
            $req->session()->put('warning',$w);
            return  redirect('/login');
        }
        else{  
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    //Registration User
    function registration(Request $req){
        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->number="";
        $user->address="";
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect("/login");

    }
    //Update User Info
    function update(Request $req){
        $update=User::where('id', '=',session('user.id'));
        
        $update->update([
            'name' => $req->name
        ]);
        if($req->number){
        $update->update([
            'number' => $req->number
        ]);
        }else{
            $update->update([
            'number' => ""
        ]);
        }
         if($req->address){
        $update->update([
            'address' => $req->address 
        ]);
        }else{
            $update->update([
            'address' => ""
        ]);
        }
        $user= User::where(['id'=>session('user.id')])->first();
        $req->session()->put('user',$user);
        return redirect("/profile");
    }
    //Logout User
    function logout(Request $req){
            $req->session()->forget('user');
            return redirect("/");
    }
}
