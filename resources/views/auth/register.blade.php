<x-layouts.auth>
    <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Register</h2>

        <form method="POST" action="{{ route('store-register') }}" class="space-y-5">
            @csrf

            <!-- Full Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="name" id="name" required
                    class="mt-1 p-2 block w-full rounded-lg border-gray-300 border focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                    class="mt-1 p-2 block w-full rounded-lg border-gray-300 border focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 p-2 block w-full rounded-lg border-gray-300 border focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi
                    Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="mt-1 p-2 block w-full rounded-lg border-gray-300 border focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Register Button -->
            <button type="submit"
                class="w-full py-2 px-4 bg-blue-600 text-white rounded-lg font-medium shadow hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Register
            </button>
        </form>

        <p class="mt-6 text-center text-sm text-gray-600">
            Sudah memiliki akun?
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login →</a>
        </p>
    </div>

</x-layouts.auth>