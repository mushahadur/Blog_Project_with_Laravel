<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}admin-auth-assets/css/styles.css">
    <title>SignUp</title>
    <style>
        .Section{
            background-image: url("{{asset('/')}}admin-auth-assets/img/3.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }
        .pt{
            padding-top: 12px;
        }
        .back{
            text-align: center;
            padding-top: 19px;
        }
    </style>
</head>
<body>
    <div class="Section">

        <div class="wrapper">
            <h4 class="text-center ">
                <?php echo isset($message) ? $message : '';  ?>
            </h4>

            <div class="title">
                Reset Password Here
            </div>

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

            <form class="form pt" method="POST" action="{{ route('password.store') }}">
                @csrf
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                
                <div class="input_field">
                    <input type="text" placeholder="    Enter Your Email" name="email" value="{{old('email', $request->email)}}"  class="input" id="" onkeyup="validateEmail()">
                    @error('email')
                        <span>{{$message}}</span>
                    @enderror
                    <i class="fas fa-envelope"></i>

                </div>
                <div class="input_field">
                    <input type="password" placeholder="    Enter Your New Password" name="password" value="{{old('password')}}"  class="input" id="" onkeyup="validatePass()" >
                    @error('password')
                        <span>{{$message}}</span>
                    @enderror
                    <i class="fas fa-lock"></i>
                    <samp id="Pass-error"></samp>
                </div>
                <div class="input_field">
                    <input type="password" placeholder="    Enter Your Conffirm Password" name="password_confirmation" value="{{old('password_confirmation')}}"  class="input" id="" onkeyup="validateConPass()">
                    @error('password_confirmation')
                        <span>{{$message}}</span>
                    @enderror
                    <i class="fas fa-lock"></i>
                    <samp  id="conPass-error"></samp>
                </div>


                <div class="border-0">
                    <button type="submit" class="btn" >Reset Password</button>
                </div>

            </form>

        </div>
    </div>

<script src="{{asset('/')}}admin-auth-assets/js/scripts.js"></script>
</body>


</html>


{{--
<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
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
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
