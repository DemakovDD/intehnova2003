<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        $users = session('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        return view('shop.index', compact('users'));
    }

    public function create()
    {
        return view('shop.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'detail' => 'required',
            'maker' => 'required',
            'shop' => 'required',
        ]);

        $data = Product::create([
            'detail' => $request->detail,
            'maker' => $request->maker,
            'shop' => $request->shop,
        ]);

        return redirect()->route('detail.index')->with('success', 'Статья добавлена');
    }

    public function show($id)
    {

        $user = User::where('id', $id)->firstOrFail();
        $products = $user->products()->orderBy('id','asc')->paginate(20);
        $orders = Order::all();

        return view('shop.show', compact('user', 'products', 'orders'));
    }
}
