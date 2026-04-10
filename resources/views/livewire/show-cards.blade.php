    <section class="max-w-6xl mx-auto px-6 py-20">
        <h2 class="text-4xl font-bold text-gray-800 text-center mb-14">{{ $categorie->title }}</h2>

        <div class="grid md:grid-cols-3 gap-10" >
             @foreach ($items as $item)
            <a href="{{ route('categorie',[$categorie->id,$item->id]) }}">
              <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold mb-3 text-green-200">{{ $item->title }}</h3>
                <div class="text-gray-100 leading-relaxed">
                    {!! $item->summary !!}
                </div>
             </div>
            </a>
            @endforeach
        </div>
    </section>