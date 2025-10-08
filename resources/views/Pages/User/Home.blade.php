<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Management System</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
  <!-- Navbar -->
  <nav class="bg-blue-700 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
      <h1 class="text-2xl font-bold tracking-wide">Blue Dimond</h1>
      <ul class="flex space-x-6">
        <li><a href="#" class="hover:text-gray-200">Home</a></li>
        <li><a href="#" class="hover:text-gray-200">Rooms</a></li>
        <li><a href="#" class="hover:text-gray-200">Bookings</a></li>
        <li><a href="#" class="hover:text-gray-200">Services</a></li>
        <li><a href="#" class="hover:text-gray-200">Contact</a></li>
        <li>
          <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="hover:text-gray-200"></button>
          </form>
        </li>
      </ul>
    </div>
  </nav>
  <section class="bg-cover bg-center mt-8px h-[500px] flex items-center justify-center text-center" style="background-image: url('https://images.unsplash.com/photo-1472214103451-9374bd1c798e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
    <div class="bg-black bg-opacity-50 p-8 rounded-lg">
      <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Welcome to HotelEase</h2>
      <p class="text-gray-200 mb-6">Experience luxury, comfort, and seamless booking at your fingertips.</p>
      <a href="#" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-800 transition">Book a Room</a>
    </div>
  </section>
  <section class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-8 text-center">
    <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-lg transition">
      <h3 class="text-xl font-bold mb-2">Manage Rooms</h3>
      <p class="text-gray-600">Easily add, update, and track hotel rooms with real-time availability.</p>
    </div>
    <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-lg transition">
      <h3 class="text-xl font-bold mb-2"> Quick Booking</h3>
      <p class="text-gray-600">Seamlessly manage customer bookings and reservations with instant updates.</p>
    </div>
    <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-lg transition">
      <h3 class="text-xl font-bold mb-2"> Customer Management</h3>
      <p class="text-gray-600">Keep track of guest details, preferences, and booking history with ease.</p>
    </div>
  </section>
  <section class="bg-blue-700 text-white py-12">
    <div class="max-w-7xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-4">Start managing your hotel smarter</h2>
      <p class="mb-6 text-gray-200">Whether you are an admin or staff, HotelEase makes hotel operations simple and efficient.</p>
      <a href="#" class="px-6 py-3 bg-white text-blue-700 font-semibold rounded-lg shadow-md hover:bg-gray-100 transition">Get Started</a>
    </div>
  </section>
  <footer class="bg-gray-900 text-gray-400 py-6 mt-auto">
    <div class="max-w-7xl mx-auto text-center text-sm">
      &copy; {{ date('Y') }} HotelEase. All rights reserved.
    </div>
  </footer>

</body>
</html>
