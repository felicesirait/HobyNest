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
            margin-top: 20px;
        }
        
        #profile_picture {
            display: none;
        }

    </style>
</head>

<body>
    <div class="container">
        <h2>Edit Profile</h2>
        <div class="profile-pic">
            <img id="profile-pic-preview" alt="Profile picture of user" height="150" src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : 'https://via.placeholder.com/150' }}" width="150"/>
        </div>
        <button class="btn-change-photo" onclick="document.getElementById('profile_picture').click()">Change Photo</button>

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="file" id="profile_picture" name="profile_picture" onchange="previewProfilePicture(event)">
            <div class="input-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="input-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" class="btn-save">Save</button>
        </form>
    </div>

    <script>
        function previewProfilePicture(event) {
            const reader = new FileReader();
            reader.onload = function(){
                const output = document.getElementById('profile-pic-preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>
</html>