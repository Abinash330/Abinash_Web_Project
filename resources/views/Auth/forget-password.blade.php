<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forget Password</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

  <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
    
    @if(session('message'))
      <p class="text-green-500 text-sm mb-4">{{ session('message') }}</p>
    @endif
    @if(session('error'))
      <p class="text-red-500 text-sm mb-4">{{ session('error') }}</p>
    @endif

    <h3 class="text-2xl font-bold text-center text-gray-800 mb-6">Forget Password</h3>

    <form method="POST" action="{{ route('forget.password.post') }}" class="space-y-5">
      @csrf

      <div>
        <input type="email"
               name="email"
               placeholder="Enter your email"
               required
               class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
      </div>

      <div>
        <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">
          Send Reset Link
        </button>
      </div>
    </form>

    <p class="text-sm text-gray-600 text-center mt-6">
      Remember your password? 
      <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
    </p>
  </div>

</body>
</html>
