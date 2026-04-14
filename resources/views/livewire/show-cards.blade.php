    <section class="max-w-6xl mx-auto px-6 py-20">
        <h2 class="text-4xl font-bold text-gray-800 text-center mb-14">{{ $categorie->title }}</h2>

        <div class="grid md:grid-cols-3 gap-10" >
             @foreach ($items as $item)
                <x-card route="{{ $item->url }}"
                    title="{{$item->title}}"
                    summary="{{$item->summary}}"
                />
            @endforeach
        </div>
    </section>