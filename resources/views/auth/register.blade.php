{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/images/favicon.png') }}">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Event & JobPortal System</h4>
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf

                                        <div class="form-group">
                                            <label class="text-dark"><strong>Name</strong></label>
                                            <input type="text" name="name" id="name" class="form-control" required autofocus autocomplete="name">
                                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />

                                        </div>
                                        <div class="form-group">
                                            <label class="text-dark"><strong>Email</strong></label>
                                            <input type="email" name="email" id="email" class="form-control" required autofocus autocomplete="email">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

                                        </div>
                                        <div class="form-group">
                                            <label class="text-dark"><strong>Password</strong></label>
                                            <input type="password" id="password" name="password" class="form-control" required autocomplete="new-password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />

                                        </div>
                                        <div class="form-group">
                                            <label class="text-dark"><strong>Confirm Password</strong></label>
                                            <input type="password" id="password_confirmation"  name="password_confirmation" required autocomplete="new-password" class="form-control">
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                                            
                                        </div>
                                        <div class="form-group">
                                            {{-- <label class="text-dark"><strong>Role</strong></label> --}}
                                            <input type="hidden" id="password_confirmation"  name="role" required autocomplete="new-password" class="form-control" value="customer">
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                                            
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-dark">Already have an account? <a class="text-primary" href="{{ route('login') }}">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('backend/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('backend/js/quixnav-init.js') }}"></script>
    <!--endRemoveIf(production)-->
</body>

</html>
