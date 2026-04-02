<nav class="fixed w-full z-20 bg-[linear-gradient(135deg,#c9ffbf,#70e1f5)] text-gray-900 backdrop-blur-lg shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-green-300"><x-app-logo-icon /></div>

            <div class="hidden md:flex space-x-8 text-lg">
                <a class="hover:text-green-800 transition" href="{{ route('accueil') }}">Accueil</a>
                @foreach ($categories as $categorie)
                    <a class="hover:text-green-800 transition" href="{{ route('categorie',$categorie->name) }}">{{ $categorie->title}}</a>
                @endforeach
            </div>


            <!-- Mobile menu button -->
            <button id="menu-btn" class="md:hidden text-gray-100">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4 6h16M4 12h16m0 6h-7" />
                </svg>
            </button>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobile-menu" class="hidden md:hidden px-6 pb-4 space-y-2">
            <a class="hover:text-green-800 transition" href="{{ route('accueil') }}">Accueil</a>
                @foreach ($categories as $categorie)
                    <a class="hover:text-green-800 transition" href="{{ route('categorie',$categorie->name) }}">{{ $categorie->title }}</a>
                @endforeach
        </div>
</nav>

    <script>
        const btn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        btn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    </script>