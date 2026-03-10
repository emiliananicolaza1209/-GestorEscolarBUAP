<x-guest-layout>

    <div class="w-full sm:max-w-md mt-6 px-8 py-6 bg-white shadow-lg overflow-hidden sm:rounded-lg border-t-4 border-[#003366]">

        <!-- Título institucional -->
        <h2 class="text-2xl font-bold text-center text-[#003366] mb-6">
            Sistema Escolar BUAP
        </h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-[#003366] font-semibold"/>
                
                <x-text-input 
                    id="email"
                    class="block mt-1 w-full border-gray-300 focus:border-[#4FA3FF] focus:ring-[#4FA3FF]"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    autocomplete="username"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="text-[#003366] font-semibold"/>

                <x-text-input
                    id="password"
                    class="block mt-1 w-full border-gray-300 focus:border-[#4FA3FF] focus:ring-[#4FA3FF]"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                />

                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input 
                        id="remember_me"
                        type="checkbox"
                        class="rounded border-gray-300 text-[#4FA3FF] shadow-sm focus:ring-[#4FA3FF]"
                        name="remember"
                    >
                    <span class="ms-2 text-sm text-gray-600">
                        {{ __('Remember me') }}
                    </span>
                </label>
            </div>

            <!-- Botones -->
            <div class="flex items-center justify-between mt-6">

                @if (Route::has('password.request'))
                    <a class="text-sm text-[#003366] hover:text-[#4FA3FF]" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button 
                    class="bg-[#4FA3FF] hover:bg-[#003366] text-white font-semibold py-2 px-6 rounded-lg shadow transition duration-200"
                >
                    Iniciar sesión
                </button>

            </div>

        </form>
    </div>

</x-guest-layout>