<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>

    @vite('resources/css/app.css')
</head>

<body>
    @if (session('success'))
        <div class="bg-green-200 p-4 rounded text-center font-bold text-green-800">
            {{ session('success') }}
        </div>
    @endif
    <header>
        <nav>
            <h1><a href="/">Ninja Network</a></h1>
            <a href="{{ route('ninjas.index') }}">All ninjas</a>
            <a href="{{ route('ninjas.create') }}">Create New Ninja</a>
        </nav>
    </header>
    <main class="container">
        {{ $slot }}
    </main>
</body>

</html>
