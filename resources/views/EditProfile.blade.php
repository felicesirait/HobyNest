<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Edit Profile</h2>
        <div class="flex justify-center mb-6">
        <img id="profile-pic-preview" class="w-32 h-32 rounded-full bg-gray-300" alt="Profile picture of user" src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : 'https://via.placeholder.com/150' }}" />
        </div>
        <button class="bg-blue-500 text-white py-2 px-4 rounded mb-6 w-full" onclick="document.getElementById('profile_picture').click()">Change Photo</button>

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="file" id="profile_picture" name="profile_picture" class="hidden" onchange="previewProfilePicture(event)">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name:</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" required class="w-full px-3 py-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required class="w-full px-3 py-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full px-3 py-2 border border-gray-300 rounded mt-1">
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded w-full">Save</button>
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