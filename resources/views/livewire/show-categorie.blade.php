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
    <div class="flex flex-col items-center h-screen ">
        <div class="mt-4 mb-4 max-w-6xl">{!! $categorie->content !!}</div>
        @if ($withimg == true)
        <section class="bg-gray-800 py-20 max-w-6xl">        
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto px-6">
                @foreach ($items as $item)
                <x-card-img route="{{ $item->url }}"
                    title="{{$item->title}}"
                    image="{{$item->image}}"
                />
                @endforeach
            </div>
        </section>
        @else
        <section class="max-w-6xl mx-auto px-6 py-20">
            <div class="grid md:grid-cols-3 gap-10" >
                @foreach ($items as $item)
                <x-card route="{{ $item->url }}"
                    title="{{$item->title}}"
                    summary="{{$item->summary}}"
                />
                @endforeach
            </div>
        </section>
        @endif
    </div>
</div>

