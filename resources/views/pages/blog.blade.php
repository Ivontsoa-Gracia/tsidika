@extends('layouts.app')

@section('title', 'Tsidika Travel - Blog')

@section('content')
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">

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
