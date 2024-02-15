<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @foreach ($movies as $movie)
                        <div class="card border-success m-3" style="max-width: 18rem;">
                            <div class="card-header bg-transparent border-success">{{ $movie->title }}</div>
                            <div class="card-body text-success">
                                <h5 class="card-title">{{ $movie->original_title }}</h5>
                                <p class="card-text">{{ $movie->nationality }}</p>
                            </div>
                            <div class="card-footer bg-transparent border-success">{{ $movie->vote }}</div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </main>

</body>

</html>
