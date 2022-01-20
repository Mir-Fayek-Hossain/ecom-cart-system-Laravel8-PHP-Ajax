<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\cart;

use App\Models\Order;

use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    //Show All Products In Home Page
    function adminProducts(){
        $data= product::all();
        return view('admin-page',['products'=>$data]);
    }
//Category
    function products($id){
        session()->put('category',$id);
        
        $data= Product::where("category2",$id)->get();
        return view('products',['products'=>$data]);
        
    }
    //Show  Product accourding to Product Id In Detail Page
    function detail($id){
        $data= product::find($id);
        $related_category=product::where('id',$id)
            ->select('category2')
            ->get();
        $related = product::where([['id', '!=' , $id],['category2','=',session('category')]])
        ->limit(3)
        ->get();
        return view('detail',['product'=>$data,'related'=>$related]);
    }
    //Show Searched Products 
    function search(Request $req){
        $data=Product::where('name','like','%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }
    //Add Product In Cart Table
    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return  redirect('/');
        }else{
            $w="You need to login first.";
            $req->session()->put('warning',$w);
            return  redirect('/login');
        }
    }
    //Shows How Many Product Is Added In The Cart
    static function cartItem(){ 
        if(Session::has('user')){
          $userId = Session::get('user')['id'];
          $result = Cart::where('user_id',$userId)->count();
          return $result;
      }else{
            $w="You need to login first.";
            $req->session()->put('warning',$w);
            return  redirect('/login');
      }
    }
    // Function for Cart List
    function cartList(){
        if(Session::has('user')){
            $userId=Session::get('user')['id'];
            $products=DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->select('products.*','cart.id as cart_id')
            ->get();
            return view('cartlist',['products'=>$products]);
        }else{  
            $w="You need to login first.";
            $req->session()->put('warning',$w);
            return  redirect('/login');
        }
    }
    //Function To Remove Item from Cart
    function removeCart($id){
        Cart::destroy($id);
        return redirect("cartlist");
    }
    //Function To count how many item in cart
    function order(){
        $userId=Session::get('user')['id'];
        $total= $products=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');
        return view('order',['total'=>$total]);
    }
    //Function To Add Details In Order Table 
    function orderplace(Request $req){
        $userId=Session::get('user')['id'];
        $allcart=Cart::where('user_id',$userId)->get();
        foreach($allcart as $cart){
            $order=new Order;
            $order->order_id=$cart['id'];
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            //--------------------------------------------set if req bkash status paid
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->number=$req->number;
            $order->save();
            Cart::where('user_id',$userId)->delete();

        }
        $req->input();
        return redirect("/");
    }
    //Function To Order Item 
    function myorders(){
        $userId=Session::get('user')['id'];
        $orders= DB::table('order')
        ->join('products','order.product_id','=','products.id')
        ->where('order.user_id',$userId)
        ->get();
        return view('myorders',['orders'=>$orders]);
    }
    //Function To Add Product Via Admin
       function adminInsert(Request $req){
        $product=new Product;
        $product->name=$req->name;
        $product->price=$req->price;
        $product->category1=$req->category1;
        $product->category2=$req->category2;
        $product->description=$req->description;
        $product->gallery="/"."images/".$req->img;
        $product->save();
        return  redirect('admin/admin-page');
    }
    function whichToUpdate(Request $req){
        
        $productvalue= Product::where(['id'=>$req->product_id])->first();
            $req->session()->put('productvalue',$productvalue);
            
        return  redirect('admin/adminUpdate');
    }
    //Function To Update Product
        function adminUpdate(Request $req){

       $update= Product::where('id', '=',$req->product_id);
        $update->update([
            'name' => $req->name,
            'price' => $req->price,
            'category1' => $req->category1,
            'category2' => $req->category2,
            'description' => $req->description
            
         ]);

         if($req->img){
        $update->update([
            'gallery' => "/"."images/".$req->img
        ]);
        }
        return redirect("admin/admin-page");
    }
    function adminDelete(Request $req){
        DB::table('products')->where('id', $req->product_id)->delete();
        return redirect("admin/admin-page");
    }
}
    
