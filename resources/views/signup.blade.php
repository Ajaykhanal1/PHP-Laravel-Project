<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center h-screen bg-gray-200">
    <form action="{{ route('signUpComplete')}}" class="bg-white p-8 rounded-xl shadow-lg w-100 h-130">
        <h2 class="text-2xl font-bold text-center mb-6">Sign Up</h2>

        <div class="mb-4">
            <input type="text" name="name" placeholder="Name" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <input type="email" name="email" placeholder="Email" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-6">
            <input type="password" name="password" placeholder="Password" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <button type="submit" class="w-full bg-green-500 text-white p-3 rounded hover:bg-green-600 transition-colors">
            Sign Up
        </button>

        <p class="text-sm text-center mt-4">
            Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a>
        </p>
    </form>
</body>
</html>
