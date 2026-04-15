<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
<div>
    <!-- HERO SECTION -->
    <x-hero
        title="Bienvenue à Labobinette"
        subtitle="Découvrez notre association et notre éco‑lieu."
        background="{{ asset('images/jardin_lb_2048.jpg') }}"
        buttontitle="nous découvrir"
        buttonlink="/categorie/1/0"
    />


    <!-- SECTION STORYTELLING -->
    <section class="max-w-6xl mx-auto px-6 py-20">
        <h2 class="text-4xl font-bold text-gray-900 mb-10 text-center">Qui sommes nous</h2>

        <p class="text-gray-800 text-lg leading-relaxed text-center max-w-3xl mx-auto">
Notre projet est de mettre à disposition des citoyens des espaces pour apprendre à jardiner, 
produire une alimentation saine ou se reconnecter à la nature, du matériel, et un local pour se réunir, 
cuisiner ou bricoler. Ce lieu se veut un lieu d'échanges, de partage de savoir-faire, convivial, 
avec une programmation d'animations diverses et d'événements rythmée par les saisons.
        </p>
    </section>

    @foreach ($accueils as $acc) 
        <livewire:show-cards cat="{{$acc->accueilable->id}}" option="{{$acc->option}}" />
    @endforeach

    <livewire:show-contact />


    <section class="max-w-6xl mx-auto px-6 py-20" >        
        <h2 class="text-4xl font-bold text-gray-900 mb-10 text-center">Nos partenaires</h2>
        <p class="text-gray-800 text-lg leading-relaxed text-center max-w-3xl mx-auto">
            <button class="mt-10 px-6 py-3 bg-green-500 hover:bg-green-400 text-gray-900 font-semibold rounded-md shadow-xl transition"
                    onclick="location.href='/partenaires'"
            >
                tous ceux qui nous soutiennent
            </button>
        </p></a>
    </section>

</div>