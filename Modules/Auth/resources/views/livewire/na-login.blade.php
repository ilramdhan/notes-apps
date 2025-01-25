<div>
    <div>
        <form wire:submit.prevent="login">
            <input type="email" wire:model="email" placeholder="Email">
            <input type="password" wire:model="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>
    </div>
    <div class="mt-4">
        <a href="{{ url('/api/auth/google/redirect') }}"
           class="w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 text-center block">
            Login dengan Google
        </a>
    </div>


</div>
