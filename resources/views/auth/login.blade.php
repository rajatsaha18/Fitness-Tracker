<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{ asset('public/website/css/bootstrap.min.css') }}">
</head>
<style>
    /* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vh;
    text-align: center;
}

/* Heading Styles */
.heading {
    margin-top: 20px!important;
    margin-bottom: 1px;
}

.heading h1 {
    font-size: 36px;
    color: #333;
    margin-bottom: 5px;
}

.heading p {
    font-size: 18px;
    color: #777;
}

/* Login Container */
.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}

/* Login Box */
.login-box {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 300px;
}

/* Title */
h2 {
    color: #4c4c6c;
    margin-bottom: 20px;
}

/* Textbox Styles */
.textbox {
    margin: 20px 0;
    position: relative;
}

.textbox input {
    width: 100%;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    outline: none;
    transition: border-color 0.3s ease;
}

.textbox input:focus {
    border-color: #4caf50;
}

/* Button Styles */
.btn {
    width: 100%;
    padding: 15px;
    background-color: #4caf50;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-bottom: 10px!important;
}
/* Register Link Styling */
.register-link {
    color: #4caf50;
    text-decoration: none;
    font-weight: bold;

}

.btn:hover {
    background-color: #45a049;
}
.text_message
{
    color: red!important;
}

</style>
<body>

    <div class="heading">
        <h1>Welcome to Our Platform</h1>
        <p>Login to your account to continue</p>
    </div>
    @if ($errors->any())
            <div class="text_message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="textbox">
                    <input type="email" placeholder="Username" name="email" required>
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <input type="submit" class="btn" value="Login">
            </form>
            <p>Don't have an account? <a href="{{ route('register') }}" class="register-link">Register here</a></p>
        </div>

    </div>

</body>
</html>
=======
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
>>>>>>> b929abb1be119a5711520c57348be10b10e33658
