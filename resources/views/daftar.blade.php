<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR PPDB | SDN PROJECT UAS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h1 class="text-xl font-semibold text-center mb-4">Formulir Pendaftaran</h1>
        <form action="{{ route('proses_daftar') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" required
                    class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Kirim Pendaftaran
            </button>
        </form>
    </div>
</body>

</html>