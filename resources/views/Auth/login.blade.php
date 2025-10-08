<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  @vite('resources/css/app.css') {{-- make sure Tailwind is included --}}
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

  <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

    {{-- Display Success Message --}}
    @if(session('message'))
      <p class="text-green-500 text-sm mb-4">{{ session('message') }}</p>
    @endif

    {{-- Display Error Message --}}
    @if(session('error'))
      <p class="text-red-500 text-sm mb-4">{{ session('error') }}</p>
    @endif

    <h3 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h3>

    <form method="POST" action="{{ route('login.post') }}" class="space-y-5">
      @csrf

      <!-- Email -->
      <div>
        <input type="email" 
               name="email" 
               id="email"
               placeholder="Enter email" 
               required
               class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
      </div>

      <!-- Password -->
      <div>
        <input type="password" 
               name="password" 
               id="password"
               placeholder="Enter password" 
               required
               class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
      </div>

      <!-- Submit Button -->
      <div>
        <button type="submit" 
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">
          Login
        </button>
      </div>
    </form>

    <!-- Forgot Password Link -->
    <p class="text-sm text-gray-600 text-center mt-4">
      <a href="{{ route('forget.password.get') }}" class="text-blue-600 hover:underline">Forgot Password?</a>
    </p>

    <!-- Register Link -->
    <p class="text-sm text-gray-600 text-center mt-2">
      Don't have an account? 
      <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register</a>
    </p>

  </div>

</body>
</html>
