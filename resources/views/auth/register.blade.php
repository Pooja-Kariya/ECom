<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Mobile No -->
            <div class="mt-4">
                <x-label for="mobile" :value="__('Mobile')" />

                <x-input id="mobile" class="block mt-1 w-full" type="text" name="mobile"  required />
            </div>

             <!-- Address -->
             <div class="mt-4">
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>

             {{-- <!-- Country -->
             <div class="mt-4">
                <x-label for="country" :value="__('Country')" />

                <x-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required />
            </div>

             <!-- State -->
             <div class="mt-4">
                <x-label for="state" :value="__('State')" />

                <x-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" required />
            </div>

             <!-- City -->
             <div class="mt-4">
                <x-label for="city" :value="__('City')" />

                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
            </div> --}}

            <div class="form-group mb-3">
                <label>Country</label>
                <select  id="country-dd" name="country_id" class="form-control">
                    <option value="">Select Country</option>
                    @foreach ($countries as $data)
                        <option value="{{$data->id}}">
                            {{$data->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label>State</label>
                <select id="state-dd" name="state_id" class="form-control">
                    <option value="">Select State</option>
                </select>
            </div>
            <div class="form-group">
                <label>City</label>
                <select id="city-dd" name="city_id" class="form-control">
                    <option value="">Select City</option>
                </select>
            </div>




             <!-- pin code -->
             <div class="mt-4">
                <x-label for="pincode" :value="__('Pincode')" />

                <x-input id="pincode" class="block mt-1 w-full" type="text" name="pincode" :value="old('pincode')" required />
            </div>

            <!-- role id -->
            <div class="mt-4">
                <x-label for="role_id" :value="__('role_id')" />

                <x-input id="role_id" class="block mt-1 w-full" type="text" name="role_id" :value="old('role_id')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>




            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
