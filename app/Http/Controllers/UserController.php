<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create() {
        return view('user.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_shop' => $request->is_shop ? $request->is_shop : 0,
        ]);
        session()->flash('success', 'Регистрация пройдена');
        Auth::login($user);
        if(Auth::user()->is_shop) {
            return redirect()->route('detail.index');
        }else{
            return redirect()->route('client.index');
        }
    }

    public function loginForm() {
        return view('user.login');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            session()->flash('success','Успешный вход');

            if(Auth::user()->is_shop) {
                return redirect()->route('detail.index');
            }else{
                return redirect()->route('client.index');
            }
        }
        return redirect()->back()->with('error', 'Неправильные данные для входа');
    }

}
