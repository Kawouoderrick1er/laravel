<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue à la Bibliothèque Numérique de KDS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Couleurs */
        :root {
            --primary-color: #007bff; /* Bleu principal */
            --secondary-color: #6c757d; /* Gris secondaire */
            --background-color: #f8f9fa; /* Gris clair de fond */
            --text-color: #343a40; /* Gris foncé pour le texte */
        }

        body {
            font-family: sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
        }

        /* Header */
        header {
            background-color: var(--primary-color);
            color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        header h1, header p {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        /* Barre de recherche */
        .search-bar {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .search-bar h2{
             color : var(--primary-color);
        }

        /* Section Livre */
         .book-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 0;
            list-style: none;
        }

        .book-item {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 15px;
            width: 200px; /* Ajustez la largeur souhaitée */
            text-align: center;
            transition: transform 0.3s ease; /* Ajout de la transition */
        }

        .book-item:hover {
            transform: translateY(-5px); /* Élévation au survol */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Ombre plus prononcée */
        }

        .book-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        /* Connexion / Inscription */
        .auth-links {
             background-color: var(--secondary-color);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            color: white;
            text-align: center;
        }
         .auth-links a {
            color: white;
            text-decoration: none;
        }
         .auth-links h2{
           color: white;
        }

         .book-item{
            transition: all 0.3s ease;
        }

         .book-item:hover{
            transform: scale(1.05);
            cursor: pointer;
         }

         .list-group-item{
            background-color: transparent;
            border: 0;
         }
         .latest-acquisitions h2, .popular-books h2{
            color: var(--primary-color);
         }
    </style>
</head>
<body>
    <div class="container">
        <header class="my-5">
            <h1>Bienvenue à la Bibliothèque Numérique de KDS</h1>
            <p>Nous vous offrons une large gamme de supports à explorer.</p>
        </header>

        <section class="search-bar mb-5">
            <h2 class="mb-3">Recherche de livres</h2>
            <form action="/search" method="GET" class="d-flex">
                <input type="text" name="query" placeholder="Rechercher par filière, spécialité, matière" class="form-control me-2">
                <button type="submit" class="btn btn-primary">Rechercher</button>
            </form>
        </section>

        <section class="latest-acquisitions mb-5">
            <h2 class="mb-3">Dernières acquisitions</h2>
            <ul class="book-list">
                <li class="book-item">
                   <img src="{{ asset('images/book1.jpg') }}" alt="Livre 1">
                    <p>Nom du livre 1 (Filière 1)</p>
                </li>
                <li class="book-item">
                    <img src="{{ asset('images/book2.jpg') }}" alt="Livre 2">
                    <p>Nom du livre 2 (Filière 2)</p>
                </li>
                <li class="book-item">
                     <img src="{{ asset('images/book3.jpg') }}" alt="Livre 3">
                    <p>Nom du livre 3 (Filière 3)</p>
                </li>
                <!-- Les éléments de cette liste devront être dynamiquement chargés de la BDD -->
            </ul>
        </section>

        <section class="popular-books mb-5">
            <h2 class="mb-3">Livres populaires</h2>
            <ul class="book-list">
                <li class="book-item">
                     <img src="{{ asset('images/book4.jpg') }}" alt="Livre 4">
                    <p>Nom du livre populaire 1</p>
                </li>
                <li class="book-item">
                    <img src="{{ asset('images/book5.jpg') }}" alt="Livre 5">
                    <p>Nom du livre populaire 2</p>
                </li>
                 <li class="book-item">
                    <img src="{{ asset('images/book6.jpg') }}" alt="Livre 6">
                    <p>Nom du livre populaire 3</p>
                </li>
            </ul>
        </section>

        <section class="auth-links mt-5">
            <h2>Connexion / Inscription</h2>
            <a href="/login" class="btn btn-link">Se connecter</a> |
            <a href="/register" class="btn btn-link">S'inscrire</a>
            <!-- Les routes /login et /register devront être définies plus tard -->
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
