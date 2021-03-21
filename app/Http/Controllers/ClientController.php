<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function index()
    {
        $users = session('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        return view('client.index', compact('users'));
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'maker' => 'required',
            'price_fr' => 'required|integer',
            'price_to' => 'required|integer',
            'detail' => 'required',
        ]);

        $user = User::pluck('id')->first();

        $data = Order::create([
            'maker' => $request->maker,
            'price_fr' => $request->price_fr,
            'price_to' => $request->price_to,
            'detail' => $request->detail,
            'user_id' => $user
        ]);

        return redirect()->route('client.index')->with('success', 'Статья добавлена');
    }

    public function show($id)
    {
        $user = User::where('id', $id)->firstOrFail();
        $orders = $user->orders()->orderBy('id','desc')->paginate(20);
        return view('client.show', compact('user', 'orders'));
    }
}
