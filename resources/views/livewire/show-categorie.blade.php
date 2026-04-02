<div class="fi-prose mx-auto py-10">    
    <h1 class="text-xl text-bold">{{ $categorie->title }}</h1>

    {!! $categorie->content !!}

    @foreach ($articles as $item)
        <div>{{ $item->title }} </div>
    @endforeach

</div>

