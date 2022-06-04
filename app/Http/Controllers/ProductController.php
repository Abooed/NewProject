<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Book;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\RequestStack;

class ProductController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $products = Product::all();

        return view('products',compact('products'));
    }

    public function index_book(){
        $books = Book::all();
        return view('book',compact('books'));
    }
    public function index_user(){
        $users = User::all();
        return view('users',compact('users'));
    }
    public function index_order(){
        $orders = Order::all();
        return view('order',compact('orders'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $data = new Product();
        $data->name = $request->name;
        $data->description=$request->description;

        $data->created_at = now();
        $data->updated_at = now();
        if($request->image){
            $imageName = time().'-'. $request->image;
            $request->image->move(public_path('images'),$imageName);
            $data->image = $imageName;
        }
        $data->save();
        return redirect()->to('/products');
    }

    public function destroy(Request $request){
        $product = Product::find($request->id);
        $product->delete();
        return redirect()->to('/products');
    }
    public function destroy_order(Request $request){
        $order = Order::find($request->id);
        $order->delete();
        return redirect()->back();
    }
    public function updatedata(Request $request){
        $product = DB::table('Products')->find($request->id);
        return view('updatedata',compact('product'));
    }

    public function update(Request $request){
        Product::where('id',$request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'updated_at' => now()
        ]);

        return redirect()->to('/products');
    }

    public function show(Request $request){
        $product = Product::find($request->id);
        return view('show',compact('product'));
    }


}
