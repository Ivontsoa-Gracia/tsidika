@extends('layouts.app')

@section('title', 'Nos Services - Tsidika Travel')

@section('content')
<style>
    /* Style général de la page */
    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 30px;
        background-color: #f8f8f8;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        font-family: 'Arial', sans-serif;
    }

    /* Style pour le titre principal */
    h1 {
        font-size: 2.8em;
        color: #222831;
        text-align: center;
        margin-bottom: 20px;
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

    /* Style pour les titres des services */
    h2 {
        font-size: 2.4em;
        color: #006a4e;  /* Couleur verte de voyage */
        margin-top: 30px;
        text-align: center;
        font-weight: bold;
        letter-spacing: 0.5px;
    }

    /* Ajout d'icônes devant les titres des services */
    h2::before {
        content: "✈️ ";
        font-size: 1.8em;
    }

    /* Style de la section générale */
    .container {
        background-color: #f1f1f1;
        border-radius: 15px;
    }
</style>

<div class="container">
    <h1>Nos Services</h1>
    <p>Explorez nos services de voyage exclusifs et profitez des meilleures offres pour vos aventures.</p>

    <h2>Voyages sur mesure</h2>
    <p>Nous créons des itinéraires personnalisés adaptés à vos envies, pour des vacances inoubliables partout dans le monde.</p>

    <h2>Réservation d'hôtels</h2>
    <p>Réservez des hébergements de qualité dans les meilleures destinations, avec des options variées pour tous les budgets.</p>

    <h2>Excursions et Activités</h2>
    <p>Participez à des excursions fascinantes et à des activités excitantes pour découvrir des lieux uniques et vivre des expériences authentiques.</p>

    <h2>Assurance voyage</h2>
    <p>Protégez votre voyage avec nos assurances qui couvrent tous les aspects importants, pour voyager en toute sérénité.</p>
</div>
@endsection
