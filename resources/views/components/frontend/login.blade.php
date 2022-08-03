
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
                <x-auth-card>
                    <x-slot name="logo">
                        <a href="/">
                           <img src="{{asset($company->logo)}}" alt="">
                        </a>
                    </x-slot>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div class="form-group">
                            <x-backend.label for="email"><span class="fw-bold">Email:</span></x-backend.label>
                            <x-backend.input name="email" type="email" placeholder="Enter email" value=""/>
                        </div>

                        <!-- Password -->

                        <div class="form-group">
                        <x-backend.label for="password"><span class="fw-bold">Password:</span></x-backend.label>
                        <x-backend.input name="password" type="password" placeholder="Enter Password" value=""/>
                        </div>

                            {{-- <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" /> --}}


                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>


                    <div class="modal-footer">
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <button class="btn btn-success">
                                {{ __('Log in') }}
                            </button>
                            {{-- <x-button class="ml-3">

                            </x-button> --}}
                        </div>
                    </form>
                    <div style="margin-top: 15px; font-size:15px;"><span>Don't have an account? </span><a href="/register" style="color: blue"> Register Now</a></div>
                      </div>
                </x-auth-card>
            </div>

          </div>
        </div>
      </div>





