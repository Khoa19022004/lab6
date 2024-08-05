<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Họ Tên')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Địa chỉ Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        {{-- Nghề nghiệp --}}
        <div class="mt-4">
            <x-input-label for="nghenghiep" :value="__('Nghề nghiệp')" />
            <x-text-input id="nghenghiep" class="block mt-1 w-full" type="text" name="nghenghiep" :value="old('nghenghiep')" required  />
            <x-input-error :messages="$errors->get('nghenghiep')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="email" :value="__('Phái')" />
            <select id="phai" class="form-control w-full @error('phai') is-invalid @enderror" name="phai" required autocomplete="username">
                <option value="nam">{{ __('Nam') }}</option>
                <option value="nữ">{{ __('Nữ') }}</option>
                <option value="khác">{{ __('Khác') }}</option>
            </select>
            <x-input-error :messages="$errors->get('phai')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mật khẩu')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Nhập lại mật khẩu')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Quên mật khẩu?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Đăng kí') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

