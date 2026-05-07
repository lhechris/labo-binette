<?php
use Livewire\Component;
?>

<div class="fi-prose mx-auto py-0"> 
    <nav class="w-full z-20 text-gray-900 shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-1 flex justify-between items-center">
            <div class="hidden md:flex text-2xl font-bold text-green-600">{{ $categorie->title }}</div>

            <div class="flex space-x-8 text-lg">
                @foreach ($menus as $item)
                    <a  href="{{ $item->url }}"
                        class="hover:text-green-800 transition" >{{ $item->title}}</a>
                @endforeach
            </div>
        </div>
    </nav>
    
    <section class="max-w-6xl mx-auto px-6 py-1">
        <div>
           
        @foreach ($items as $item)
           @if ($item->type == 'article')
            {!! $item->content !!}
           @elseif ($item->type == 'categorie')
                @foreach ($item->children as $it)
                <x-card route="{{ $it->url }}"
                    title="{{$it->title}}"
                    summary="{{$it->summary}}"
                />
                @endforeach

           @else
               <p>la page n'existe pas</p>
           @endif
        @endforeach
        </div>
    </section>

</div>

