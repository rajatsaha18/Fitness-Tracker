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
