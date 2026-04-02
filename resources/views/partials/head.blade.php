<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>
    {{ filled($title ?? null) ? $title.' - '.config('app.name', 'Laravel') : config('app.name', 'Laravel') }}
</title>

<meta name="description"
    content="A Labarthe sur Lèze un eco lieu pour apprendre à jardiner, produire une alimentation saine ou se reconnecter à la nature" />
<meta name="keywords" content="eco lieu, jardins partagés, labarthe sur lèze, labobinette" />


<link rel="icon" href="/favicon.ico" sizes="any">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
