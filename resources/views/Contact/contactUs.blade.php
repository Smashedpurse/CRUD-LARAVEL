@extends('layouts.plantilla')

@section('title','Contact Us')

@section('content')

<div class="flex justify-center mt-10">
    <div
    class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
    <h5
      class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 text-center   ">
      Contact Us
    </h5>
    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
        Provide us your opinion, we are here to help you.
    </p>

    
    <form action="{{route('contactUs.store')}}" method="POST">

      @csrf


      <div class="flex  m-1">
        <label class="m-2">Your name</label>
        <input type="text" name="name" value="{{old('name')}}">
        
        @error('name')
          <br>
          <small>{{$message}}</small>
          <br>            
        @enderror

      </div>

      <div class="flex  m-1">
        <label class="m-2">Your Email</label>
        <input type="text" name="email" value="{{old('imagen')}}">

        @error('email')
        <br>
        <small>{{$message}}</small>
        <br>            
      @enderror

      </div>

      <div class="flex  m-1">
        <label class="m-2">your opinion</label>
        <input type="text" name="opinion" value="{{old('imagen')}}">

        @error('opinion')
        <br>
        <small>{{$message}}</small>
        <br>            
      @enderror

      </div>

      
    

    <button
      type="submit"
      class="justify-center inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
      data-te-ripple-init
      data-te-ripple-color="light">
      Send your Message
    </button>
  </form>
  </div>
</div>

    @if (session('info'))
    <div class="flex justify-center mt-6 bg-green-600">
        <div class="">
            <h1>
                {{session('info')}}
            </h1>
        </div>        
    </div>

    @endif

@endsection