<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - HotelEase</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex min-h-screen">

  <!-- Sidebar -->
  <aside class="w-64 bg-blue-800 text-white flex flex-col">
    <div class="px-6 py-4 text-2xl font-bold border-b border-blue-700">
      HotelEase Admin
    </div>
    <nav class="flex-1 px-4 py-6 space-y-3">
      <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-700">🏨 Dashboard</a>
      <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-700">🛏️ Manage Rooms</a>
      <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-700">📅 Bookings</a>
      <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-700">👥 Customers</a>
      <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-700">👔 Staff</a>
      <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-700">⚙️ Settings</a>
    </nav>
    <form action="{{ route('logout') }}" method="POST" class="px-4 py-4 border-t border-blue-700">
      @csrf
      <button type="submit" class="w-full px-4 py-2 bg-red-600 rounded-lg hover:bg-red-700">
        Logout
      </button>
    </form>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8">
    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-3xl font-bold text-gray-800">Admin Dashboard</h1>
      <p class="text-gray-600">Welcome back, <span class="font-semibold">Admin</span> 👋</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <h2 class="text-gray-500 text-sm">Total Rooms</h2>
        <p class="text-2xl font-bold text-blue-700">120</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <h2 class="text-gray-500 text-sm">Active Bookings</h2>
        <p class="text-2xl font-bold text-green-600">85</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <h2 class="text-gray-500 text-sm">Customers</h2>
        <p class="text-2xl font-bold text-purple-600">450</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <h2 class="text-gray-500 text-sm">Staff</h2>
        <p class="text-2xl font-bold text-orange-600">25</p>
      </div>
    </div>

    <!-- Recent Bookings Table -->
    <div class="bg-white rounded-xl shadow p-6">
      <h2 class="text-xl font-bold mb-4">Recent Bookings</h2>
      <div class="overflow-x-auto">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-gray-100 text-left text-gray-600">
              <th class="p-3">Booking ID</th>
              <th class="p-3">Customer</th>
              <th class="p-3">Room</th>
              <th class="p-3">Check-in</th>
              <th class="p-3">Check-out</th>
              <th class="p-3">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-t hover:bg-gray-50">
              <td class="p-3">B001</td>
              <td class="p-3">Abinash kar</td>
              <td class="p-3">Deluxe Suite</td>
              <td class="p-3">2025-09-12</td>
              <td class="p-3">2025-09-15</td>
              <td class="p-3 text-green-600 font-semibold">Confirmed</td>
            </tr>
            <tr class="border-t hover:bg-gray-50">
              <td class="p-3">B002</td>
              <td class="p-3">Sontosh Pradhan</td>
              <td class="p-3">Single Room</td>
              <td class="p-3">2025-09-14</td>
              <td class="p-3">2025-09-16</td>
              <td class="p-3 text-yellow-600 font-semibold">Pending</td>
            </tr>
            <tr class="border-t hover:bg-gray-50">
              <td class="p-3">B003</td>
              <td class="p-3">Subrakanta Nayak</td>
              <td class="p-3">Family Room</td>
              <td class="p-3">2025-09-10</td>
              <td class="p-3">2025-09-12</td>
              <td class="p-3 text-red-600 font-semibold">Cancelled</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>

</body>
</html>
