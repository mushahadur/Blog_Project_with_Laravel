

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}admin-auth-assets/css/styles.css">
    <title>Login</title>
    <style>
        .Section{
            background-image: url("{{asset('/')}}admin-auth-assets/img/1.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
</head>
<body>
<div class="Section">
        <h2 class="text-center text-success py-2">
            <?php echo isset($message) ? $message : '';  ?>
        </h2>
    <div class="wrapper">
        <div class="title">
            Login
        </div>


        <form class="form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input_field">
                <input type="text" placeholder="Email" class="input" name="email" id="email" onkeyup="validateEmail()">
                @error('eamil')
                <span class="text-danger" >{{$message}}</span>
                @enderror
                <i class="fas fa-envelope"></i>
                <samp id="email-error"></samp>
            </div>
            <div class="input_field">
                <input type="password" placeholder="Password" class="input" name="password" id="password" onkeyup="validatePass()" >
                @error('password')
                <span class="text-danger" >{{$message}}</span>
                @enderror
                <i class="fas fa-lock"></i>
                <samp id="Pass-error"></samp>
            </div>
            <div class="forget">
                <a href="#">Forgot your password?</a>
            </div>
            <div class="">
                <!-- <a href="#" onclick="return validation()">Login</a> -->
                <input type="submit" name="loginBtn" class="btn " value="Login"/>
            </div>
        </form>

        <div class="or">-- or connect with --</div>

        <div class="social_media">
            <div class="item">
                <i class="fab fa-facebook-f"></i>
            </div>
            <div class="item">
                <i class="fab fa-twitter"></i>
            </div>
            <div class="item">
                <i class="fab fa-google-plus-g"></i>
            </div>
        </div>
        <div class="newAccount"><p>Create a <a href="{{ route('register') }}"> New Account</a> </p>
        </div>
    </div>
</div>

<script src="{{asset('/')}}admin-auth-assets/js/scripts.js"></script>
</body>


</html>


{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
