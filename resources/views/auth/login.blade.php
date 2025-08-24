<x-layouts.auth>
    <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Login</h2>

        <form method="POST" action="{{ route('store-login') }}" class="space-y-5">
            @csrf

            <div class="relative">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                    class="mt-1 block w-full p-2 rounded-lg border-gray-300 border-2 focus:ring-blue-500 focus:border-blue-500">
                <!-- <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 11.625c0 5.625-9.75 11.25-9.75 11.25s-9.75-5.625-9.75-11.25a9.75 9.75 0 1119.5 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.25 11.625a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                </span> -->
            </div>

            <div class="relative">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 block w-full rounded-lg border-gray-300 border-2 p-2 focus:ring-blue-500 focus:border-blue-500">
                <!-- <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5v-3.75a4.5 4.5 0 10-9 0v3.75" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15.75v1.5" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 18h4.5" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 10.5h7.5" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span> -->
            </div>

            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="remember"
                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                    <span class="text-gray-600">Remember me?</span>
                </label>
                <!-- <a href="" class="text-blue-600 hover:underline">Forgot Password</a> -->
            </div>

            <button type="submit"
                class="w-full py-2 px-4 bg-blue-600 text-white rounded-lg font-medium shadow hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Login
            </button>
        </form>

        <p class="mt-6 text-center text-sm text-gray-600">
            Belum memiliki akun?
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register →</a>
        </p>
    </div>

</x-layouts.auth>