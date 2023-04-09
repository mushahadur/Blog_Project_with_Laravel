



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
            Forget Password
        </div>

    <p style="padding-bottom:50px;">Forgot your password? No problem.
        Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
    </p>
        <form class="form" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="input_field">
                <input type="text" placeholder="Email" class="input" name="email" id="email" onkeyup="validateEmail()">
                @error('email')
                    <span class="text-danger" >{{$message}}</span>
                @enderror
                <i class="fas fa-envelope"></i>
                <samp id="email-error"></samp>
            </div>

            <div class="">
                <!-- <a href="#" onclick="return validation()">Login</a> -->
                <input type="submit" name="loginBtn" class="btn " value="Email Password Reset Link"/>
            </div>
        </form>


    </div>
</div>

<script src="{{asset('/')}}admin-auth-assets/js/scripts.js"></script>
</body>


</html>



{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
