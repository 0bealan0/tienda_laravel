<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi plantilla</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body>
<header>
    <img class="max-h-full" src="{{asset('images/logo.jpg')}}" alt="logo">
    <h2 class="text-lg font-semibold justify-between text-center text-white-500 sm:text-xl float-right">Tienda hawaiana</h2>
        <div class=" container flex flex-wrap justify-between items-center mx-auto">
            @auth
                {{auth()->user()->name}}
            <form action="{{route("logout")}}" method="post" class="w-full max-w-sm">
                @csrf
               <x-button>Logout</x-button>
            </form>
            @endauth
            @guest
                <x-ancla ref="{{route('login')}}">Login</x-ancla>
                <x-ancla ref="{{route('register')}}">Registrar</x-ancla>
            @endguest
        </div>
</header>
<nav>
    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
            <li>
                <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sobre</a>
            </li>
            <li>
                <a href="{{route('productos.index')}}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Productos</a>
            </li>
            <li>
                <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contacto</a>
            </li>
        </ul>
    </div>

</nav>
<main>
    @yield('main')
</main>
<footer>
    footer
</footer>
</body>
</html>
