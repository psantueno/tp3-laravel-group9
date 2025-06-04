<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>BLOG+MATH APP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-100 text-gray-800 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="text-xl font-bold text-black-600 flex items-center">
                    📘 MATH+BLOG
                </a>

                <!-- Links -->
                <div class="hidden md:flex space-x-6 items-center">
                    <a href="{{ url('/category') }}" class="text-gray-700 hover:text-blue-600 p-3 m-1">Categorías</a>
                    <!-- <a href="{{ url('/category/create') }}" class="text-gray-700 hover:text-blue-600 p-3 m-1">Crear Post</a> -->
                    <a href="{{ url('/about') }}" class="text-gray-700 hover:text-blue-600 p-3 m-1">Acerca de</a>
                    <a href="{{ url('/contact') }}" class="text-gray-700 hover:text-blue-600 p-3 m-1">Contacto</a>

                    @auth
                    <!-- Usuario logueado -->
                    <a href="{{ url('/category/create') }}" class="text-gray-700 hover:text-blue-600 p-3 m-1">Crear Post</a>
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 focus:outline-none">
                            <!-- Icono de usuario -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1112 21a9 9 0 01-6.879-3.196z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="font-bold">{{ Auth::user()->name }}</span>
                            <svg :class="open ? 'rotate-180' : ''" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" @click.outside="open = false"
                            class="absolute right-0 mt-2 w-40 bg-white border rounded shadow z-10 py-2">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mi perfil</a>
                            <a href="{{ route('category.my') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mis posts</a>
                            <form action="{{ url('/logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Cerrar sesión</button>
                            </form>
                        </div>
                    </div>
                    @else
                    <!-- Invitado -->
                    <div class="flex items-center space-x-2">
                        <a href="{{ url('/login') }}" class="flex items-center text-gray-700 font-bold hover:text-blue-600 mr-6">
                            Ingresar
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v1" />
                            </svg>
                        </a>
                        <a href="{{ url('/register') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition ml-6">
                            Registrarse
                        </a>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Main -->
    <main class="py-8">
        <div class="max-w-4xl mx-auto px-4">
            @yield('content')
        </div>
    </main>

</body>

</html>