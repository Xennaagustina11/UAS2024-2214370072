<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login Page</title>
</head>

<body>
    <div class="flex items-center justify-center h-screen bg-gray-200">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full md:w-96">
            <h2 class="text-2xl font-bold mb-8 text-center">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                        autofocus
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                </div>
    
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                </div>
    
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Login
                    </button>
                </div>
            </form>
    
            <div class="mt-6 text-sm text-center">
                <a href="{{ route('register') }}" class="text-indigo-500 hover:underline">Belum punya akun? Daftar
                    di sini.</a>
            </div>
        </div>
    </div>
        <div class="max-w-md w-full p-6 bg-green-600 rounded-md shadow-md">
            <h2 class="text-2xl font-semibold text-center mb-6">Login</h2>

            <form method="POST" action="{{ route('login.action') }}">
                @csrf
                @if ($errors->any())
                    <div role="alert"
                        class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                        id="alert">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <div class="mb-4">
                    <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                        class="w-full border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:border-blue-500 p-2">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
                    <input id="password" type="password" name="password" required
                        class="w-full border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:border-blue-500 p-2">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="remember" class="block text-gray-600 text-sm font-medium">
                        <span class="flex items-center justify-between">
                            Remember Me
                            <input type="checkbox" name="remember" id="remember">
                        </span>
                    </label>
                </div>

                <div class="flex items-center justify-center">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        Login
                    </button>
                </div>
                <div class="mt-4 text-center text-gray-500">
                    Don't have an account? <a href="{{ route('register') }}" class="text-blue-400 hover:underline">Register
                        here</a>.
                </div>
        </div>
</body>

</html>
