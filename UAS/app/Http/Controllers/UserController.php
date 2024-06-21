<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view("user.index")->with("user", $users);
    }

    public function home() {
        $users = User::all();
        return view("user.index")->with("user", $users);
    }

    public function about() {
        $users = User::all();
        return view("user.about")->with("user", $users);
    }
    public function service() {
        $users = User::all();
        return view("user.service")->with("user", $users);
    }
    public function book() {
        $users = User::all();
        return view("user.book")->with("user", $users);
    }

    public function check_form(User $user) {
        if(Auth::check()){
            return view('user.index');

        }
        return redirect()->route('login');
    }
}
