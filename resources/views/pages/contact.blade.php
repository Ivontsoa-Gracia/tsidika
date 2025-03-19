@extends('layouts.app')

@section('title', 'Contactez-nous - Tsidika Travel')

@section('content')
<style>
    /* Style général de la page */
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 30px;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        font-family: 'Arial', sans-serif;
    }

    /* Style pour les titres */
    h1, h2 {
        color: #006a4e;  /* Couleur verte de voyage */
        text-align: center;
        margin-bottom: 20px;
    }

    /* Style pour les paragraphes */
    p {
        font-size: 1.1em;
        color: #555;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Style pour le formulaire */
    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    /* Style pour les labels */
    label {
        font-size: 1.1em;
        color: #333;
        margin-bottom: 5px;
    }

    /* Style pour les champs du formulaire */
    input[type="text"], input[type="email"], textarea {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1em;
        width: 100%;
    }

    /* Style pour la zone de texte (textarea) */
    textarea {
        height: 150px;
        resize: vertical;
    }

    /* Style pour le bouton d'envoi */
    button[type="submit"] {
        background-color: #c99383; /* Couleur de la palette de voyage */
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1.1em;
        transition: background-color 0.3s ease;
    }

    /* Style pour le survol du bouton */
    button[type="submit"]:hover {
        background-color: #a57764;
    }

    /* Style pour les champs obligatoires */
    input[required], textarea[required] {
        border-color: #ff6b6b;
    }

    input:focus, textarea:focus {
        border-color: #222831;
        outline: none;
    }
</style>

<div class="container">
    <h1>Contactez-nous</h1>
    <p>Pour toute question concernant vos voyages ou nos services, n'hésitez pas à nous contacter. Nous serons ravis de vous aider !</p>

    <h2>Informations de Contact</h2>
    <p>Adresse : 123 Rue de l'Aventure, Paris</p>
    <p>Téléphone : +33 1 23 45 67 89</p>
    <p>Email : contact@tsidikatravel.com</p>

    <h2>Formulaire de Contact</h2>
    <form>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message :</label>
        <textarea id="message" name="message"></textarea>

        <button type="submit">Envoyer</button>
    </form>
</div>
@endsection
