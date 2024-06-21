<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserController;
use App\Models\User;

class AuthController extends Controller
{
    //halaman login
    public function index() {
        $user = Auth::user();

        if($user){
            if($user->level == 'admin'){
                return redirect()->intended('admin');
            }
            else if($user->level == 'user'){
                return redirect()->intended('user');
            }
        }

        return view('dashboard.login');
    }

    public function proses_login(Request $request){
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ]
        );
        $credential = $request->only('email', 'password');
        if(Auth::attempt($credential)){
            $user = Auth::user();
            if($user->level == 'admin'){
                return redirect()->intended('admin');
            } else if($user->level == 'user'){
                return redirect()->intended('user');
            }
            return redirect()->intended('/');
        }

        return redirect('login')->withInput()->withErrors(['login_gagal' => 'User tidak terdaftar (email atau password salah)!']);
    }

    public function logout(Request $request){
        //menghapus session login
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
    }

    public function register(){
        return view('dashboard.register');
    }
    public function proses_register(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        $user = new User;
        $user->email = $validatedData['email'];
        $user->name = $validatedData['name'];
        $user->level = "user"; // Set default level to 'user'
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        // Redirect to the home route with a success message
        return redirect()->route('home')->with('success', 'Registration successful!');
    }
}
