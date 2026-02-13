<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First Laravel Page</title>
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center h-screen bg-gray-400">
  <form action="{{ route('welcome') }}" class="bg-white p-8 rounded-xl shadow-lg w-100 h-130">
    <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
    
    <div class="mb-4">
      <input required
        type="email" 
        placeholder="Email" 
        class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
    </div>

    <div class="mb-6">
      <input required
        type="password" 
        placeholder="Password" 
        class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
    </div>

    <button 
      type="submit" 
      class="w-full bg-blue-500 text-white p-3 rounded hover:bg-blue-600 transition-colors"
    >
      Login
    </button>

    <p class="text-sm text-center mt-4">
      Don't have an account? <a href="{{ route('signup')}}" class="text-blue-500 hover:underline">Sign up</a>
    </p>
  </form>
</body>
</html>
