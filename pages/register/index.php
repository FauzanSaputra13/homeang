<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HF | Login</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="../../assets/homeng.jpg" />

</head>

<body>
    <div class="min-h-screen bg-gray-300 relative">
        <div class="absolute inset-0 bg-center bg-cover filter blur-xl" style="background-image: url('../../assets/bg_furnitur.jpg');">
        </div>
        <div class="h-screen flex justify-center items-center h-full relative z-10">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h1 class="text-3xl font-bold mb-4">REGISTER</h1>
                <form>
                    <div class="mb-4">
                        <label for="username" class="block text-gray-700 font-bold mb-2">Username</label>
                        <input type="text" id="username" name="username" class="border-2 border-gray-300 rounded-md p-2 w-full focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                        <input type="password" id="password" name="password" class="border-2 border-gray-300 rounded-md p-2 w-full focus:outline-none focus:border-blue-500">
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
                </form>
                </form>
            </div>
        </div>
    </div>

</body>

</html>