<x-guest-layout>
    <div class="flex flex-col md:flex-row min-h-screen">
        <!-- Lado Esquerdo - Imagem ocupa 100% da altura -->
        <div 
            class="hidden md:block md:w-1/2 bg-cover bg-center"
            style="background-image: url('{{ asset('images/banner-arandu 1.png') }}');">
        </div>

        <!-- Lado Direito - Formulário -->
        <div class="flex w-full md:w-1/2 items-center justify-center bg-white min-h-screen">
            <div class="w-full max-w-md px-8 py-10">
                <h2 class="text-3xl font-bold text-center text-[#5B2C1D] mb-8 tracking-wide">
                    LOGIN
                </h2>

                <!-- Sessão de status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- E-mail -->
                    <div>
                        <x-input-label for="email" :value="__('E-mail')" />
                        <x-text-input 
                            id="email"
                            class="block mt-1 w-full border border-[#5B2C1D] focus:border-[#8B4513] focus:ring-[#8B4513] rounded-md"
                            type="email" 
                            name="email" 
                            :value="old('email')" 
                            required 
                            autofocus 
                            autocomplete="username" 
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Senha -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Senha')" />
                        <x-text-input 
                            id="password"
                            class="block mt-1 w-full border border-[#5B2C1D] focus:border-[#8B4513] focus:ring-[#8B4513] rounded-md"
                            type="password" 
                            name="password" 
                            required 
                            autocomplete="current-password" 
                        />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Lembrar-me e Esqueci senha -->
                    <div class="flex items-center justify-between mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input 
                                id="remember_me" 
                                type="checkbox" 
                                class="text-[#8B4513] border-gray-300 rounded focus:ring-[#8B4513]" 
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar-me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-[#8B4513] hover:underline">
                                {{ __('Esqueceu sua senha?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Botão -->
                    <div class="mt-6">
                        <button 
                            type="submit" 
                            class="w-full py-2 bg-[#5B2C1D] text-white rounded-md font-semibold hover:bg-[#8B4513] transition">
                            {{ __('ENTRAR') }}
                        </button>
                    </div>
                </form>

                <!-- Rodapé -->
                <p class="text-xs text-center text-gray-500 mt-8 leading-relaxed">
                    Caso ocorra a perda desses dados, entre em contato com 
                    <span class="text-[#8B4513] font-medium">aranduproject@gmail.com</span>
                    para o reenvio das suas credenciais.
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>