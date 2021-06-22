<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class AuthController extends WebController
{
    public function index()
    {
        return view('pages.auth.login');
    }  
        

    public function customLogin(LoginRequest $request)
    {
        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        $remember_me  = ( !empty( $request->remember_me ) )? TRUE : FALSE;
        
        if(Auth::attempt($credential)){
            $user = User::where(["email" => $credential['email']])->first();
            
            Auth::login($user, $remember_me);
        
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        } 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function registration()
    {
        return view('pages.auth.registration');
    }
        

    public function customRegistration(request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed'
        ]);

        $credential = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];
        $check = $this->create($credential);
            
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
        ]);
    }    

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
