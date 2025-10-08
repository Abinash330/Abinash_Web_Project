<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">

    <form method="POST" action="{{ route('register.post') }}" class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg">
        @csrf
        <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Register</h3>

        <!-- Name -->
        <input type="text" name="name" placeholder="Enter name" required
            class="w-full px-4 py-2 mb-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

        <!-- Email -->
        <input type="email" name="email" placeholder="Enter email" required
            class="w-full px-4 py-2 mb-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

        <!-- Password -->
        <input type="password" name="password" placeholder="Enter password" required
            class="w-full px-4 py-2 mb-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

        <!-- Confirm Password -->
        <input type="password" name="password_confirmation" placeholder="Confirm password" required
            class="w-full px-4 py-2 mb-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

        <!-- User Type -->
        <select name="user_type" required
            class="w-full px-4 py-2 mb-6 border rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>

        <!-- Submit -->
        <button type="submit"
            class="w-full py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Register
        </button>
    </form>

</body>
</html>
