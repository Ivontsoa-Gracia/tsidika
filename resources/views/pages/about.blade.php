@extends('layouts.app')

@section('title', 'À Propos de Nous - Tsidika Travel')

@section('content')
<style>
    /* Style général de la page */
    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        font-family: 'Arial', sans-serif;
    }

    /* Style pour le titre principal */
    h1 {
        font-size: 2.8em;
        color: #222831;
        text-align: center;
        margin-bottom: 25px;
        font-weight: bold;
        letter-spacing: 1px;
    }

    /* Style pour les paragraphes */
    p {
        font-size: 1.1em;
        color: #555;
        line-height: 1.8;
        margin-bottom: 20px;
        text-align: center;
    }

    /* Style pour les titres des sections */
    h2 {
        font-size: 2.4em;
        color: #006a4e;  /* Couleur verte de voyage */
        margin-top: 30px;
        text-align: center;
        font-weight: bold;
        letter-spacing: 0.5px;
    }

    /* Ajout d'icônes devant les titres des sections */
    h2::before {
        content: "🌍 ";
        font-size: 1.5em;
    }

    /* Ajouter une couleur d'arrière-plan douce pour la section container */
    .container {
        background-color: #f1f1f1;
        border-radius: 15px;
    }

    /* Style des icônes */
    h2::before {
        color: #ff7043; /* Couleur orange pour les icônes */
    }
</style>

<div class="container">
    <h1>À Propos de Nous</h1>
    <p>Bienvenue chez Tsidika Travel, votre partenaire idéal pour toutes vos aventures. Nous sommes une équipe passionnée de voyageurs, de développeurs et de spécialistes en marketing numérique, dédiée à vous offrir des expériences inoubliables à travers le monde.</p>

    <h2>Notre Mission</h2>
    <p>Notre mission est de rendre chaque voyage unique en vous fournissant les meilleures solutions numériques et les conseils de voyage les plus fiables. Nous vous aidons à découvrir le monde, à partir à l'aventure et à créer des souvenirs inoubliables.</p>

    <h2>Nos Valeurs</h2>
    <p>À Tsidika Travel, nous croyons en l'innovation, la qualité, et la satisfaction de nos clients. Nous mettons un point d'honneur à vous offrir des services qui répondent à vos besoins, tout en vous faisant découvrir des destinations incroyables avec des conseils pratiques et personnalisés.</p>
</div>
@endsection
