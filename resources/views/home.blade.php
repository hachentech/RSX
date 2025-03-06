<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil - Smarttech</title>        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"> <!-- Pour les icônes -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .hero-section {
            background: #f8f9fa;
            padding: 60px 0;
        }
        .service-icon {
            font-size: 40px;
            color: #007bff;
        }
        .service-card {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s;
        }
        .service-card:hover {
            transform: scale(1.05);
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px;
        }
        .footer a {
            color: #f8f9fa;
        }
        .footer a:hover {
            text-decoration: none;
        }
       
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Smarttech</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('employes.index') }}">Gestion des Employés</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('clients.index') }}">Gestion des Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('documents.index') }}">Gestion des Documents</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4">Bienvenue sur la plateforme Smarttech</h1>
            <p class="lead">La solution idéale pour la gestion des employés, des clients et des documents d'entreprise.</p>
            
        </div>
    </section>

    <!-- Services Section -->
    <section class="services py-5">
        <div class="container text-center">
            <h2 class="mb-4">Nos Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-users service-icon"></i>
                        <h4 class="mt-3">Gestion des employés</h4>
                        <p>Gérez facilement vos employés, leurs informations et leurs rôles au sein de l'entreprise.</p>
                        <a href="{{ route('employes.index') }}" class="btn btn-outline-primary">Voir plus</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-briefcase service-icon"></i>
                        <h4 class="mt-3">Gestion des clients</h4>
                        <p>Suivez et gérez vos clients, leurs projets et leurs relations avec votre entreprise.</p>
                        <a href="{{ route('clients.index') }}" class="btn btn-outline-primary">Voir plus</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-file-alt service-icon"></i>
                        <h4 class="mt-3">Gestion des documents</h4>
                        <p>Stockez et partagez des documents importants en toute sécurité sur notre plateforme.</p>
                        <a href="{{ route('documents.index') }}" class="btn btn-outline-primary">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact text-center py-5 bg-light">
        <div class="container">
            <h2>Nous Contacter</h2>
            <p>Vous avez des questions ou souhaitez obtenir plus d'informations ? Contactez-nous dès maintenant !</p>
            <a href="#" class="btn btn-success">Contactez-nous</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2024 Smarttech. Tous droits réservés.</p>
            <p>
                <a href="#">Mentions légales</a> | 
                <a href="#">Politique de confidentialité</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
