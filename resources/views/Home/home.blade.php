@extends('layouts.plantilla')

@section('title','Home')



@section('content')

<div class="h-screen bg-gray-300">

{{-- Cards --}}
<div class="flex m-2 justify-evenly">

    @if (sizeof($products)==0)
    
        <h1>No Products in this moment</h1>
        <br>
        <br>
        
    @endif

    
        @foreach ($products as $index => $product)
            
            
            <a href="{{route('products.show',$product->id)}}">
            <div class="card mb-7 pointer-events-auto" style="cursor: pointer">
                
                <img
                    class="w-full h-full object-cover" 
                    src="{{ $product->imagen }}" 
                    alt="{{ $product->imagen }}"
                >
        
                <div class="p-5 flex-col gap-3">
        
                    <div class="flex items-center gap-2">
                        
                        <span class="badge">Oficial Store</span>
              </div>
        
                    <h2 class="product-title" title={{ $product->name }}>
                        {{ $product->name }} 
                    </h2>
                    <div class="flex justify-between">
                        <span class="badge">Stock: {{$product->stock}}</span>
                        <h3 class="text-left"> Score: {{$product->calificacion}} {{ $product->calificacion  <= 3 ? ('🤢') : ($product->calificacion <= 5 ? ('😞') : ($product->calificacion <= 6 ? '😉' :($product->calificacion <= 8 ? ('😊') : ($product->calificacion >= 9 ? ('😍') : "")) )) }}
                    </div>
                    </h3>
        
                </div>            
            </div>
        </a>
        
            
     
            
        @endforeach

    </ul>
</div>


<footer class="bg-gray-800 text-white p-4">
    <div class="container mx-auto">
        {{$products->links()}}
    </div>
</footer>

    <footer>
        <div class="">
           
        </div>
    </footer>
    

</div>
    
@endsection

