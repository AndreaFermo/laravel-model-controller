<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body class="bg-secondary">
<header class="bg-primary">
    <div class="container p-3 mb-2 text-emphasis-primary">
        <h1 class="text-center">BEST FILMS IN THE WORLD</h1>
    </div>
</header>
<main>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4 g-3 ">
                    <div class="card text-center bg-dark">
                        <div class="card-body text-white">
                            <h5 class="card-title">Titolo: {{$movie->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{$movie->original_title}}</h6>
                            <p class="card-text">Nazionalitá: {{$movie->nationality}}</p>
                            <p class="card-text">Prima proiezione: {{$movie->date}}</p>
                            <p class="card-text">Voto: {{$movie->vote}}/10</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
   
</main>

</body>
</html>