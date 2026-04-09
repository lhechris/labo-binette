    <section class="max-w-6xl mx-auto px-6 py-20">
        <h2 class="text-4xl font-bold text-gray-800 text-center mb-14">{{ $categorie->title }}</h2>

        <div class="grid md:grid-cols-3 gap-10" >
             @foreach ($articles as $article)
            <a href="{{ route('categorie',[$categorie->id,$article->id]) }}">
              <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold mb-3 text-green-200">{{ $article->title }}</h3>
                <div class="text-gray-100 leading-relaxed">
                    {!! $article->summary !!}
                </div>
             </div>
            </a>
            @endforeach
        </div>
    </section>