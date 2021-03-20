<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index() {
        return view('index');
    }

    public function client() {
        return view('client.index');
    }

    public function store() {
        return view('shop.index');
    }
}
