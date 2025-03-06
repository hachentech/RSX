<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un client</title>
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
    </style>
</head>
<body>

<div class="container">
    <h1>Ajouter un client</h1>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="tel">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>


       

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Retour à la liste</a>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
