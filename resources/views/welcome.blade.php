<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* Applique l'image de fond à la page entière avec un flou */
        body {
            font-family: 'Nunito', sans-serif;
            background: url('{{ asset('assets/Paris.jpeg') }}') no-repeat center center/cover;
            background-attachment: fixed; /* Permet à l'image de fond de rester fixe lors du défilement */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            position: relative;
        }

        /* Applique le flou à l'arrière-plan de la page */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Ombre semi-transparente */
            backdrop-filter: blur(3px); /* Applique l'effet de flou */
            z-index: -1; /* Assure que le flou soit derrière tout le contenu */
        }

        /* Barre de navigation */
        .navbar {
            position: absolute;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: flex-end;
            background-color: rgba(255, 255, 255, 0.8); /* Un fond blanc avec un peu de transparence */
            padding: 15px 30px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            font-weight: 600;
            margin-left: 20px;
            padding: 10px;
        }

        .navbar a:hover {
            color: #ef3b2d;
        }

        /* Contenu principal */
        .content {
            position: relative;
            width: 80%;
            max-width: 800px;
            padding: 50px;
            border-radius: 10px;
            /* Overlay transparent */
            color: white;
            text-align: center;
        }

        .content h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .content p {
            font-size: 1.2rem;
            margin-top: 10px;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ef3b2d;
            color: white;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .btn:hover {
            background-color: #d12a1a;
        }
    </style>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXX-Y"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-QS745G6X9G'); // Remplacez par votre ID Google Analytics
    </script>
</head>
<body>

    <!-- Barre de navigation -->
    <div class="navbar">
        <a href="{{ url('/services') }}">Services</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/contact') }}">Contact</a>
        <a href="{{ url('/blog') }}">Blog</a>
    </div>

    <!-- Contenu principal -->
    <div class="content">
        <h1>Bienvenue sur notre site</h1>
        <p>Découvrez nos services et explorez les opportunités que nous vous offrons. Nous sommes ravis de vous accueillir et de vous accompagner dans votre parcours.</p>
        <a href="{{ url('/about') }}" class="btn">En savoir plus</a>
    </div>

</body>
</html>
