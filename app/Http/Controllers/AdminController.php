<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProduct;

class AdminController extends Controller
{
    public function index()
    {
       return view('Admin.adminProfile');  
    }

    public function create()
    {
       return view('Product.createProduct');  
    }

    public function store(StoreProduct $request )
    {        

        $product = Product::create($request->all());
 
      return redirect()->route('products.show',$product->id);
          
    }

    public function edit($id){

      $product = Product::find($id);

      return view('Product.productEdit', compact('product'));

    }

    public function update(StoreProduct $request, Product $product){


    // $product->sku = $request->sku;
    // $product->name = $request->name;
    // $product->imagen = $request->imagen;
    // $product->stock = $request->stock;
    // $product->calificacion = $request->calificacion;

    // $product ->save();

    $product->update($request->all());

    return redirect()->route('products.show',$product->id);
   } 

    public function destroy(Product $product){
      $product->delete();

      return redirect()->route('index');
    }
}
