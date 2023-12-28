<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('image');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        $token = $user->createTOken('authToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request)
    {
        $data = $request->validate([
           'email' => 'required|email',
           'password' => 'required|string'
        ]);

        //check Email
        $user = User::where('email', $data['email'])->first();

        if(!$user || !Hash::check($data['password'], $user->password))
        {
            return response('Wrong Credentials', 401);
        }

        $token = $user->createToken('authToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged Out!'
        ];
    }

    public function resetPassword()
    {
        echo 'Reset';
    }

    public function localLogin(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $data['email'])->first();

        if(!$user || !Hash::check($data['password'], $user->password))
        {
            //return response('Wrong Credentials', 401);
            return redirect()->back();
        }

        $token = $user->createToken('authToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        $request->session()->put('token', $token);

        return redirect()->route('panel', $response);

        //return response($response, 201);
    }

    public function localLogout(){
        $auth = auth();
        dd($auth);
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged Out!'
        ];
    }

    public function admin(){

        $user = [
            'name' => 'Debil'
        ];

        $products = Product::all();

        $data = [
            'products' => $products,
            'user' => $user
        ];

        return view('admin', ['test' => $data]);
    }
}
