<div class="flex justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-900 p-4">
    <div class="flex flex-col md:flex-row bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 dark:bg-gray-800 overflow-hidden w-full max-w-2xl">

        <!-- Image Section -->
        <div class="md:w-2/3">
            <img class="object-cover w-full h-full" src="{{ asset('dist/img/man_writings.jpg') }}" alt="Man Writing" />
        </div>

        <!-- Register Form Section -->
        <div class="md:w-2/3 p-6 md:p-8">
            <form class="space-y-6" wire:submit.prevent="register">

                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                    Dot Notes
                </a>

                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Register New Account</h5>

                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input wire:model="name" type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Your Name" required />
                </div>

                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input wire:model="email" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                </div>

                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input wire:model="password" type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                </div>

                <div>
                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                    <input wire:model="password_confirmation" type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                </div>

                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Sign Up
                </button>

                <div>
                    <a href="{{ url('/api/auth/google/redirect') }}" class="w-full text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 block">
                        Sign Up with Google
                    </a>
                </div>

                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                    Already have an account? <a href="{{ route('login') }}" class="text-blue-700 hover:underline dark:text-blue-500">Login here</a>
                </div>

            </form>
        </div>
    </div>
</div>
