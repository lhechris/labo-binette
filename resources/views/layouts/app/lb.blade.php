<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- force le mode clair -->
    <script>
        window.localStorage.setItem('flux.appearance', 'light');
    </script>
    
    @include('partials.head')

</head>

<body class="bg-[linear-gradient(135deg,#c9ffbf,#70e1f5)] text-gray-900">
    <livewire:nav />
    <main class="pt-12">
        {{ $slot }}
    </main>

    <x-footer />

    @fluxScripts
</body>
</html>
