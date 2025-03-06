<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un employé</title>
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

        .btn-primary {
            background-color: #28a745;
        }

        .btn-primary:hover {
            background-color: #218838;
        }

        .btn-secondary {
            background-color: #dc3545;
        }

        .btn-secondary:hover {
            background-color: #c82333;
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
    <h2>Modifier un employé</h2>
</div>

<div class="container">
    <!-- Formulaire de modification d'un employé -->
    <form action="{{ route('employes.update', $employe->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $employe->nom) }}" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom', $employe->prenom) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $employe->email) }}" required>
        </div>

        <div class="form-group">
            <label for="tel">Téléphone</label>
            <input type="text" class="form-control" id="tel" name="tel" value="{{ old('tel', $employe->tel) }}" required>
        </div>

        <div class="form-group">
            <label for="fonction">Fonction</label>
            <input type="text" class="form-control" id="fonction" name="fonction" value="{{ old('fonction', $employe->fonction) }}" required>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
            <a href="{{ route('employes.index') }}" class="btn btn-secondary">Retour à la liste</a>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
