<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(){
        return view('register');
    }

    public function back(){
        return view('welcome');
    }

    public function d1(){
        return view('panel.d1');
    }
    public function d2(){
        return view('panel.d2');
    }

    public function store(Request $request){


        $rules=[
            'name' => 'required|string',
            'email'=>'required|email|unique:clients,email',
            'group' => 'required',
            'password'=>'required|string|min:8',
        ];
        $validator=Validator::make($request->all(),$rules);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
            //var_dump($request->all());die();
        }

        $clients =new Client();

        $clients->name=$request->name;
        $clients->email=$request->email;
        $clients->group=$request->group;
        $clients->password = Hash::make($request->password);
        $clients->save();

        return redirect()->back();
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $client = Client::where('email', $request->email)->first();

        if ($client) {
            if (Hash::check($request->password, $client->password)) {
                if($client->group=='admin'){
                    return redirect()->intended(route('d1'));
                }else{
                    return redirect()->intended(route('d2'));
                }

            } else {
                // Passwords do not match
                // Redirect back with error message
                return redirect()->back()->withInput($request->only('email'))->withErrors(['error' => 'Invalid credentials']);
            }
        } else {
            // User not found in database
            // Redirect back with error message
            return redirect()->back()->withInput($request->only('email'))->withErrors(['error' => 'Invalid credentials']);
        }









    }







}

