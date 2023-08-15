@extends('layouts.plantilla')

@section('title', $product->name)

@section('content')



<div
  class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
  <div
    class="relative overflow-hidden bg-cover bg-no-repeat flex justify-center"
    data-te-ripple-init
    data-te-ripple-color="light">
    <img
      class="rounded-t-lg mt-4 mb-6"
      src="{{$product->imagen}}"
      alt={{$product->imagen}} />
    <a href="#!">
      <div
        class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
    </a>
  </div>
  <div class="p-6">
    <h5
      class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
        {{$product->name}}
    </h5>
    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
      Stock: {{$product->stock}}
    </p>

    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
        Score: {{$product->calificacion}}
    </p>

    <div class="text-center text-white border-s-violet-900">
      <a href="{{route('products.edit',$product)}}"><p>Editar Producto</p></a>
    </div>

    <form action="{{route('products.delete',$product)}}" method="POST">
      @csrf
      @method('delete')
      <button type="submit">Eliminar Producto</button>
    </form>
    
  </div>
</div>

    

@endsection