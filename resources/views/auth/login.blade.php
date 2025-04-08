<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Login</title>
</head>
<body>
    
    
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-purple-500 via-blue-500 to-red-500">
        <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-2xl">
            <h3 class="text-center text-3xl font-bold text-purple-700 mb-6">🔑 Đăng Nhập</h3>
    
            @if(session('error'))
                <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4 border-l-4 border-red-500 shadow-md">
                    {{ session('error') }}
                </div>
            @endif
    
            <form action="{{Route('storelogin')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold">📧 Email</label>
                    <input type="email" name="email" class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-transparent transition" required>
                    @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
    
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold">🔒 Mật khẩu</label>
                    <input type="password" name="password" class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition" required>
                    @error('password') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
    
                <button type="submit" class="w-full bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold py-3 rounded-xl hover:shadow-lg transform hover:scale-105 transition">
                    🚀 Đăng Nhập
                </button>
    
                <p class="text-center mt-4 text-gray-700">
                    ❓ Chưa có tài khoản? <a href="{{Route('register')}}" class="text-pink-600 font-semibold hover:underline">Đăng ký ngay</a>
                </p>
            </form>
        </div>
    </div>

</body>    
</html>

