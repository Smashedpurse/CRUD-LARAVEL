<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class HomeController extends Controller
{
    public function index()
    {
        
       $products =  Product::orderBy('id','desc')->paginate(5);
        
       
       return view('Home.home',compact('products'));  
    } 
    
    public function show($id){

        $product = Product::find($id);        

        return view('Product.productView',compact('product'));
    }


}
