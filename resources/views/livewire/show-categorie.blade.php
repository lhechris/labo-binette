<div class="fi-prose mx-auto py-0"> 
    <nav class="w-full z-20 text-gray-900 shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-1 flex justify-between items-center">
            <div class="hidden md:flex text-2xl font-bold text-green-600">{{ $categorie->title }}</div>

            <div class="flex space-x-8 text-lg">
                @foreach ($articles as $item)
                    <a  href="{{ route('categorie',[$categorie->id,$item->id]) }}"
                        class="hover:text-green-800 transition" >{{ $item->title}}</a>
                @endforeach
            </div>
        </div>
    </nav>


    <div class="py-15">
        <div>{!! $categorie->content !!}</div>
        <livewire:show-cards cat="{{$categorie->id}}" option="" />
    </div>


</div>

