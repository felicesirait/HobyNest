<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
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
            background-color: #053d5b;
            color: white;
            width: 50%;
            padding: 50px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .left-section img {
            max-width: 100%;
            height: auto;
        }
        .left-section h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }
        .left-section p {
            font-size: 18px;
            margin-bottom: 20px;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="left-section">
            <h1>Sign Up Now!</h1>
            <p>Create Your Account</p>
            <img src="your-image-path-here.png" alt="Sign Up Illustration">
        </div>
        <div class="right-section">
            <form>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="Enter your username">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your password">
                </div>
                <button type="submit" class="sign-up-button">Sign Up</button>
                <div class="already-have-account">
                    <p>Already have an account? <a href="/Sign In">Sign In</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
