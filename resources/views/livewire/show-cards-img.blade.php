    <section class="bg-gray-800 py-20">
        <h2 class="text-4xl font-bold text-green-300 text-center mb-14">{{ $categorie->title }}</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto px-6">            
             @foreach ($articles as $article)             
            <a href="{{ route('categorie',[$categorie->id,$article->id]) }}">
                <div class="relative group rounded-xl shadow-lg">
                    <img src="{{ asset('storage/'.$article->image) }}" class="w-full h-64 object-cover transition group-hover:scale-110 z-0" >
                    <div class="absolute inset-0 bg-opacity-40 flex items-end p-4">
                        <h3 class="text-xl font-semibold bg-black bg-black p-2 rounded-xl text-green-200">{{ $article->title }}</h3>
                    </div>
                </div>
            </a>
             @endforeach
        </div>
    </section>