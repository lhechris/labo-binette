<a href="{{ $route }}">
    <div class="relative group rounded-xl shadow-lg">
        <img src="{{ asset('storage/'.$image) }}" class="w-full h-64 object-cover transition group-hover:scale-110 z-0" >
        <div class="absolute inset-0 bg-opacity-40 flex items-end p-4">
            <h3 class="text-xl font-semibold bg-black bg-black p-2 rounded-xl text-green-200">{{ $title }}</h3>
        </div>
    </div>
</a>
