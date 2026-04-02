    <section class="bg-gray-800 py-20">
        <h2 class="text-4xl font-bold text-green-300 text-center mb-14">{{ $categorie->title }}</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto px-6">            
            
             @foreach ($articles as $article)             
            <a href="{{ route('article',[$categorie->name,$article->name]) }}">
                <div wire:ignore class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('storage/'.$article->image) }}" class="w-full h-64 object-cover transition group-hover:scale-110 z-0" >
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end p-4 z-10">
                        <h3 class="text-xl font-semibold text-green-200">{{ $article->title }}</h3>
                    </div>
                </div>
            </a>
             @endforeach
        </div>
    </section>