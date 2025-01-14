<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'Farm Dream Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="flex space-x-32 items-center">
        <div class="bg-green-700 rounded-3xl p-16 flex justify-center items-center w-[40rem] h-[38rem] -ml-24">
            <img src="{{ asset('assets/svg/Logo-Dfarm-large.svg') }}" alt="DFarm Logo">
        </div>
        <div class="w-80">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Welcome Back <span aria-label="wave" role="img">👋</span></h2>
            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="id" class="text-gray-700 block mb-2">ID</label>
                    <input type="text" id="id" name="id" class="w-full px-4 py-2 border border-gray-300 rounded-lg" placeholder="Enter your ID">
                </div>
                <div>
                    <label for="password" class="text-gray-700 block mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg" placeholder="Enter your password">
                </div>
                <div>
                    <label for="location" class="text-gray-700 block mb-2">Location</label>
                    <input type="text" id="location" name="location" class="w-full px-4 py-2 border border-gray-300 rounded-lg" placeholder="Province, Kabupaten">
                </div>
                <div>
                    <a href="{{ url('/master') }}" class="w-full">
                        <button type="button" class="w-full bg-green-700 text-white font-semibold py-2 rounded-lg hover:bg-green-800 transition duration-300">Log In</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
