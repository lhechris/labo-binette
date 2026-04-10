<div class="fi-prose mx-auto py-0"> 
    <nav class="w-full z-20 text-gray-900 shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-1 flex justify-between items-center">
            <div class="hidden md:flex text-2xl font-bold text-green-600">{{ $categorie->title }}</div>

            <div class="flex space-x-8 text-lg">
                @foreach ($subcategories as $item)
                    <a  href="{{ route('categorie',[$subcategorie->id,0]) }}"
                        @class([
                            'hover:text-green-800 transition',
                            'bg-blue-100' => $item->id === $subcategorie->id,
                        ])
                        >{{ $item->title}}</a>
                @endforeach
            </div>
        </div>
    </nav>

    <div class="py-15">
        @if ($subcategorie)
        <div>{!! $subcategorie->content !!}</div>
        <livewire:show-cards cat="{{$subcategorie->id}}" option="" />
        @endif
    </div>


</div>

