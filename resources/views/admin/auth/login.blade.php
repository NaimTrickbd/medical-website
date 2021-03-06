<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    {{-- If you can change the Title of the page --}}
    <title>Admin Login</title>

    {{-- Change the favicon of this site here --}}


    {{-- TailwindCss cdn --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <div class="flex items-center justify-center h-screen bg-gray-700 sm:px-6">
        <div class="w-full max-w-sm p-4 bg-gray-900 rounded-md shadow-md sm:p-6">
            <div class="flex items-center justify-center">
                <span class="text-xl font-medium text-white">Login</span>
            </div>
            <form class="mt-4"  method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email" class="block">
                    <span class="text-sm text-white">Email</span>
                    <input type="email" id="email" value="{{ old('email') }}" name="email"  autocomplete="email" autofocus
                        class="block w-full px-3 py-2 mt-1 text-white bg-gray-700 rounded-md focus:outline-none focus:shadow-outline focus:bg-gray-800"
                        required />
                </label>
                <label for="password" class="block mt-3">
                    <span class="text-sm text-white">Password</span>
                    <input type="password" value="{{ old('password') }}" id="password" name="password" autocomplete="current-password"
                        class="block w-full px-3 py-2 mt-1 text-white bg-gray-700 rounded-md focus:outline-none focus:shadow-outline focus:bg-gray-800"
                        required />
                   
                </label>
                <div class="flex items-center justify-between mt-4">
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox"
                                class="text-indigo-600 border form-checkbox focus:outline-none focus:shadow-outline" />
                            <span class="mx-2 text-sm text-white">Remember me</span>
                        </label>
                    </div>
                    <div>
                        <a class="block text-sm text-indigo-200 hover:underline focus:outline-none focus:underline"
                            href="#">Forgot
                            your password?</a>
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit"
                        class="w-full px-4 py-2 text-sm text-center text-white bg-indigo-500 rounded-md hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700 ">Sign
                        in</button>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>