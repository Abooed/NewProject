<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::get()->take(4);

        return view('home',compact('products'));
    }

    public function store(Request $request)
    {
        $book = new Book;
        $book->name = $request->name;
        $book->email = $request->email;
        $book->phone = $request->phone;
        $book->save();
        return  redirect()->back();
    }

    public function order(Request $request, $id)
    {
        $order = new Order;
        $order->user_id = Auth::id();
        $order->product_id = $id;
        $order->save();
        return  redirect()->back();
    }

    public function profile()
    {
        $orders = Order::where('user_id',Auth::id())->get();
        return  view('profile',compact('orders'));
    }
}
