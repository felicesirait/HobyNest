<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            width: 900px;
            height: 550px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .left-section {
            background-color: #1f2937;
            color: white;
            width: 50%;
            padding: 50px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: left;
        }
        .left-section img {
            max-width: 100%;
            height: auto;
        }
        .left-section h1 {
            font-size: 32px;
            margin-bottom: 3px;
            text-align: left;
        }
        .left-section p {
            font-size: 12px;
            margin-bottom: 20px;
            text-align: left;
        }
        .left-section .buttons {
            margin-top: 20px;
        }
        .right-section {
            padding: 50px 30px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .right-section form {
            width: 100%;
        }
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        .form-group label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group .icon {
            position: absolute;
            right: 5px; 
            top: 70%;
            transform: translateY(-50%);
            color: #888;
        }
        .sign-up-button {
            width: 100%;
            background-color: #28a745;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .sign-up-button:hover {
            background-color: #218838;
        }
        .already-have-account {
            text-align: center;
            margin-top: 20px;
        }
        .already-have-account a {
            color: #007bff;
            text-decoration: none;
        }
        .fontK{
            font-size: 10px;
        }

        .checkbox-group{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 5px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="left-section">
            <h1>Start Your Journey</h1>
            <p>Come join and explore HobbyNest</p>
            <img src="img/sign-in-image.png" alt="Gambar Sign In">
        </div>

        <div>
            @if ($errors->any())
                <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                </div>
            @endif

            @if (session() -> has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if (session() -> has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>
        
        <div class="right-section">
            <form action="{{ route('signIn.post') }}" method="POST">
                @csrf
                <div class="already-have-account">
                    <p>Don't have an account? <a href="/Sign Up">Sign Up</a></p>
                </div>

                <div class="form-group" >
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your email" name="email"><span class="icon">
                    <i class="fas fa-envelope"></i>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your password" name="password"><span class="icon"><i class="fas fa-lock"></i>
                </div>

                {{-- REMEMBER ME --}}
                <div class="checkbox-group">
                    <label for="remember">Remember Me</label>
                    <input type="checkbox" id="remember" name="remember">
                </div>

                <button type="submit" class="sign-up-button">Sign In</button>

                <div>
                    <p class="fontK">By clicking the Sign in Button, you therefore agree to the Privacy Policy.
                        For more information, read about our privacy here </p>
                </div>

            </form>
        </div>
    </div>
</body>
</html>