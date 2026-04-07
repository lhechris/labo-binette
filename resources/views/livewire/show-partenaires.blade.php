<div >
    <p>L’engagement et le soutien de nos partenaires depuis le démarrage du projet contribuent à la réussite de notre projet.</p>
    <div class="grid grid-cols-1 gap-10 md:px-50 px-4">
        @foreach ($avectexte as $item)
        <div class="flex gap-4">    
            <div class="w-32 min-w-32"><img src="{{ asset('storage/'.$item->image) }}" ></div>
            <div >{{ $item->content }} </div>
        </div>
        @endforeach
    </div>
    <div class="flex gap-4 md:px-50 px-4 pt-8">
        @foreach ($sanstexte as $item)
            <div><img src="{{ asset('storage/'.$item->image) }}" ></div>
        @endforeach
    </div>
    <p class="pt-8">Enfin, plusieurs associations locales sont également partenaires, par leur implication sur des évènements et leur motivation à collaborer avec nous.</p>
    <div class="flex gap-4 md:px-50 px-4">
        @foreach ($asso as $item)
            <div><img src="{{ asset('storage/'.$item->image) }}" ></div>
        @endforeach
    </div>

</div>