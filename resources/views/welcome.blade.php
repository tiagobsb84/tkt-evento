<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/style.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        
        <h1>Tiago Silva</h1>
        <a href="/contact">Contato</a>
    
        @if($nome == 'Tiago')
            <p>Meu nome e {{ $nome }}</p>
        @else
            <p>Não sei quem e vc</p>
        @endif
    </body>
</html>
