<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des documents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            padding: 30px;
        }

        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 30px;
        }

        .btn {
            padding: 10px 20px;
            color: white;
            border-radius: 5px;
            margin-top: 20px;
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-consulter {
            background-color: #007bff;
        }

        .btn-consulter:hover {
            background-color: #0056b3;
        }/* Header */
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .header .btn {
            margin-top: 10px; background-color: #28a745;
        }
    </style>
</head>
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
<div class="header">
    <h2>Gestion des document</h2>
    <a href="{{ route('documents.create') }}" class="btn btn-add">Ajouter un document</a>
    <!-- Add more buttons for other actions -->
    <!-- Modify/Delete buttons can be used later for more detailed management -->
</div>
<body>

<div class="container">
    

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($documents as $document)
                <tr>
                    <td>{{ $document->nom }}</td>
                    <td>{{ $document->description }}</td>
                    <td>
                        <!-- Bouton "Consulter Document" -->
                        <a href="{{ asset('storage/' . $document->file_path) }}" target="_blank" class="btn btn-consulter">
                            Consulter le document
                        </a>

                        <!-- Boutons Modifier et Supprimer -->
                        <a href="{{ route('documents.edit', $document->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('documents.destroy', $document->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
