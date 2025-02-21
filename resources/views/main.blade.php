<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB | SDN PROJECT UAS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: url('{{ asset('images/background-abstract.jpg') }}') no-repeat center center/cover;
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-center items-center">
            <a href="#">
                <img src="{{ asset('imgs/logo_SDNPU.png') }}" alt="SDNPU Schools" class="h-16">
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section
        class="relative flex flex-col md:flex-row items-center justify-between p-10 bg-gray bg-opacity-80 rounded-lg shadow-lg max-w-6xl mx-auto mt-10">
        <!-- Background Mirrored -->
        <div class="absolute inset-0 bg-cover bg-center opacity-80"
            style="background-image: url('{{ asset('imgs/bg_abstrak.jpg') }}');"></div>

        <!-- Text Content -->
        <div class="relative z-10 max-w-lg">
            <h5 class="text-gray-700 text-lg">Selamat datang di</h5>
            <h1 class="text-4xl font-bold text-gray-900">Portal Penerimaan Peserta Didik Baru (PPDB)</h1>
            <h3 class="text-2xl font-semibold text-red-600 mt-2">SDN PROJECT UAS Schools</h3>
            <p class="text-gray-600 mt-4">Bergabunglah dengan kami dalam mengadopsi teknologi dan membuka peluang
                pendidikan tanpa batas</p>
            <a href="{{ route('daftar') }}"
                class="mt-6 inline-block bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition">
                Mulai Perjalananmu!</a>
        </div>

        <!-- Hero Image -->
        <img src="{{ asset('imgs/hero.png') }}" alt="PPDB Illustration" class="relative z-10 w-1/3">
    </section>

</body>

</html>