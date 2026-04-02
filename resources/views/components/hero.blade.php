    <style>
        /* Effet overlay sombre sur images */
        .hero-bg {
            background-image: url('{{ $background }}');
            background-size: cover;
            background-position: center;
        }
    </style>
    
    <header class="h-screen flex items-center justify-center relative hero-bg "
            >
        <div class="absolute inset-0 "></div>

        <div class="relative text-center px-6  bg-gray-800/75">
            <h1 class="text-5xl md:text-6xl font-extrabold text-green-200 drop-shadow-lg">
                {{ $title }}
            </h1>
            <p class="mt-6 text-lg md:text-xl max-w-2xl mx-auto text-gray-300">
                {{ $subtitle }}
            </p>
            <button class="mt-10 px-6 py-3 bg-green-500 hover:bg-green-400 text-gray-900 font-semibold rounded-md shadow-xl transition"
                    onclick="location.href='{{ $buttonlink }}'"
            >
                {{ $buttontitle }}
            </button>
        </div>
    </header>
