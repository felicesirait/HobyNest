<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-top: 40px;
            margin-bottom: 40px;
        }
        .container {
            width: 400px;
            background-color: white;
            padding: 20px;
            padding-right: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .container h2 {
            margin-bottom: 20px;
        }
        img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #ddd;
            margin: 0 auto 15px;
        }
        .btn-change-photo {
            display: inline-block;
            margin-bottom: 20px;
            padding: 8px 16px;
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            padding-right: 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f2f2f2;
        }
        .btn-save {
            width: 100%;
            padding: 10px;
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Edit Profile</h2>
        <div>
            <!-- Placeholder for profile picture -->
            <img alt="Profile picture of user" height="150" src="https://storage.googleapis.com/a1aa/image/RUYIG2tPn4YDNlf2OBqdEYAphwGCkRGm0AjERY4sUS7LjiyJA.jpg" width="150"/>
        </div>
        <button class="btn-change-photo">Change Photo</button>

        <form>
            <div class="input-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="input-group" >
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit" class="btn-save">Save</button>
        </form>

    </div>
</body>

</html>
