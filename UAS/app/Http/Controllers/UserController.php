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

    public function user() {
        return view("user.user");
    }

    public function check_form(User $user) {
        if(Auth::check()){
            return view('user.index');

        }
        return redirect()->route('login');
    }
}
