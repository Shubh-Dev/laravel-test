<form method="POST" action="{{ route('register') }}">

    <!-- Name -->
    <div>
        <label for="name">Name</label>
        <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
        @error('name')
            <div class="text-red-600">{{ $message }}</div>
        @enderror
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <label for="email">Email</label>
        <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
        @error('email')
            <div class="text-red-600">{{ $message }}</div>
        @enderror
    </div>

    <!-- Password -->
    <div class="mt-4">
        <label for="password">Password</label>
        <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        @error('password')
            <div class="text-red-600">{{ $message }}</div>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        @error('password_confirmation')
            <div class="text-red-600">{{ $message }}</div>
        @enderror
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
            Already registered?
        </a>

        <button type="submit" class="ml-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Register
        </button>
    </div>
</form>

