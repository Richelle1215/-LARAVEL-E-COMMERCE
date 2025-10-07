<x-guest-layout>
    <!-- Ibinabalik ang x-authentication-card para tingnan kung maaayos ang layout issue -->
    <x-authentication-card>

        <!-- Ginawang BLANKO ang x-slot name="logo" para HINDI lumabas ang logo, pero maiwasan ang error. -->
        <x-slot name="logo">
            <!-- Walang laman dito. Ito ang magtatanggal ng logo. -->
        </x-slot>
        
        <!-- Form Title added back for clarity -->
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
            {{ __('Create Your Account') }}
        </h2>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- FIRST NAME AND LAST NAME (NOW SIDE-BY-SIDE) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                
                <!-- First Name -->
                <div>
                    <x-label for="first_name" value="{{ __('First Name') }}" />
                    <x-input id="first_name" class="block mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" type="text" name="first_name" :value="old('first_name')" required autocomplete="given-name" />
                </div>
                
                <!-- Last Name -->
                <div>
                    <x-label for="last_name" value="{{ __('Last Name') }}" />
                    <x-input id="last_name" class="block mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" type="text" name="last_name" :value="old('last_name')" required autocomplete="family-name" />
                </div>
            </div>

            <!-- Email (mt-4 added for spacing after the grid) -->
            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autocomplete="tel" />
            </div>

            <!-- Address -->
            <div class="mt-4">
                <x-label for="address" value="{{ __('Address') }}" />
                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="street-address" />
            </div>
            
            <!-- Referral Code -->
            <div class="mt-4">
                <x-label for="referral_code" value="{{ __('Referral Code (Optional)') }}" />
                <x-input id="referral_code" class="block mt-1 w-full" type="text" name="referral_code" :value="old('referral_code')" autocomplete="off" />
            </div>

            <!-- PASSWORD AND CONFIRM PASSWORD (NOW SIDE-BY-SIDE) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">

                <!-- Password -->
                <div>
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" type="password" name="password" required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <!-- Action Buttons -->
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <!-- Register Button (Changed color to #8C5B56 and added hover effect) -->
                <x-button class="ms-4 bg-[#8C5B56] hover:bg-[#6D4742] active:bg-[#6D4742] focus:ring-[#8C5B56] transition duration-150">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
