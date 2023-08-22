<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-gray-300 mb-5">
    <nav>
        
        <header class="bg-white">
            <nav class="flex justify-between items-center w-[92%]  mx-auto">
                <div>
                    <a href="{{route('index')}}">
                    <img class="w-16 cursor-pointer" src="https://cdn-icons-png.flaticon.com/512/5968/5968204.png" alt="..." >
                </a>
                </div>
                <div
                    class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                    <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                        <li>
                            <a class="hover:text-gray-500" href="{{route('index')}}">Products</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-500" href="#">About Us</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-500" href="{{route('contactUs.index')}}">Contact us</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-500" href="#">Developers</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-500" href="{{route('products.create')}}">Add Product</a>
                        </li>
                    </ul>
                </div>
                <div class="flex items-center gap-6">
                    <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Sign in</button>
                    <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
                </div>
        </header>
          
    </nav>
    @yield('content')
</body>
</html>