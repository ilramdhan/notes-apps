<div class="flex justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-900 p-4">
    <div class="flex flex-col md:flex-row bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 dark:bg-gray-800 overflow-hidden w-full max-w-2xl">

        <!-- Image Section -->
        <div class="md:w-2/3 aspect-w-4 aspect-h-3">
            <img class="object-cover w-full h-full" src="{{ asset('dist/img/man_writings.jpg') }}" alt="Man Writing" />
        </div>


        <!-- Sign-In Form Section -->
        <div class="md:w-2/3 p-6 md:p-8">
            <form class="space-y-6" wire:submit.prevent="login">

                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                    Dot Notes
                </a>

                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h5>

                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                    <input wire:model="email" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                </div>

                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                    <input wire:model="password" type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input wire:model="remember" id="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600" />
                        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                    </div>
                    <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                </div>

                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Login to your account
                </button>

                <div>
                    <a href="{{ url('/api/auth/google/redirect') }}" class="w-full text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 block">
                        Login with Google
                    </a>
                </div>

                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                    Not registered? <a href="{{ route('register') }}" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                </div>

            </form>
        </div>
    </div>
</div>
