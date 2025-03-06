<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un client</title>
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

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
            font-size: 1rem;
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<!-- Header -->
<div class="header">
    <h2>Confirmer la suppression du client</h2>
</div>

<div class="container">
    <h3>Êtes-vous sûr de vouloir supprimer ce client ?</h3>

    <p><strong>Nom :</strong> {{ $client->nom }}</p>
    <p><strong>Prenom :</strong> {{ $client->prenom }}</p>
    <p><strong>Email :</strong> {{ $client->email }}</p>

    <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <!-- Confirmer la suppression -->
        <div class="form-group text-center">
            <button type="submit" class="btn btn-danger">Supprimer</button>
            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Annuler</a>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
