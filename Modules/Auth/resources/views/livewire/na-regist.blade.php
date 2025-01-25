<div>
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6">Register</h1>
        <form wire:submit.prevent="register">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" id="name" wire:model="name"
                       class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" wire:model="email"
                       class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" wire:model="password"
                       class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                <input type="password" id="password_confirmation" wire:model="password_confirmation"
                       class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
                Register
            </button>
        </form>
        <div class="mt-4">
            <a href="{{ url('/api/auth/google/redirect') }}"
               class="w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 text-center block">
                Login dengan Google
            </a>
        </div>

    </div>

</div>
