<section class="px-6 py-20">
    <h2 class="text-4xl font-bold text-gray-800 text-center mb-14">Contact</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-6xl mx-auto px-6">            
        @foreach ($items as $item)            
        <div>{{$item->name}}</div>
        <div>{{$item->value}}</div>
        @endforeach
    </div>
</section>