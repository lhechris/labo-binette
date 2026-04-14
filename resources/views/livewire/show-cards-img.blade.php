    <section class="bg-gray-800 py-20">
        <h2 class="text-4xl font-bold text-green-300 text-center mb-14">{{ $categorie->title }}</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto px-6">            
             @foreach ($items as $item)             
            <x-card-img route="{{ $item->url }}"
                title="{{$item->title}}"
                image="{{$item->image}}"
            />
             @endforeach
        </div>
    </section>