@extends('layouts.app')

@section('title', 'Tsidika Travel - Blog')

@section('content')
<style>
    /* Style général de la page */
    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
        font-family: 'Arial', sans-serif;
        background-color: #f8f8f8;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    /* Style pour le titre principal */
    h1 {
        font-size: 2.5em;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Style pour les paragraphes */
    p {
        font-size: 1.1em;
        color: #666;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    /* Style pour la section destination */
    .destination {
        font-size: 1.4em;
        font-weight: bold;
        color: #222831;
        text-align: center;
        background-color: #c99383;
        padding: 15px;
        border-radius: 8px;
        margin: 20px 0;
        color: white;
    }

    /* Style pour les articles */
    .article {
        background-color: #ffffff;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .article h2 {
        font-size: 1.8em;
        color: #222831;
        margin-bottom: 10px;
    }

    .article p {
        font-size: 1em;
        color: #555;
        margin-bottom: 10px;
    }

    /* Style pour le footer */
    .footer {
        text-align: center;
        font-size: 1em;
        color: #888;
        margin-top: 30px;
        padding: 10px;
    }
</style>

<div class="container">
    <h1>Bienvenue sur Tsidika Travel</h1>
    <p>Découvrez nos articles de voyage, conseils et recommandations pour vos prochaines aventures.</p>

    <div class="destination">
        🌍 Explorez le Monde avec Tsidika Travel
    </div>

    <div class="article">
        <h2>📌 Les 10 destinations incontournables de Madagascar</h2>
        <p>De Nosy Be à l'Allée des Baobabs, voici les lieux à absolument visiter.</p>
    </div>

    <div class="article">
        <h2>📌 Comment bien préparer son sac de voyage ?</h2>
        <p>Découvrez les essentiels à emporter pour une aventure sans stress.</p>
    </div>

    <div class="article">
        <h2>📌 Les spécialités culinaires malgaches à goûter absolument</h2>
        <p>Un guide gourmand pour savourer le meilleur de la cuisine locale.</p>
    </div>

    <div class="footer">
        © 2025 Tsidika Travel - Votre compagnon de voyage
    </div>
</div>
@endsection
