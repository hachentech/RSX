<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des employés</title>
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
            margin: 5px;
        }

        .btn-add {
            background-color: #28a745;
        }

        .btn-add:hover {
            background-color: #218838;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        .btn-modify {
            background-color: #ffc107;
            color: black;
        }

        .btn-modify:hover {
            background-color: #e0a800;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e2e2;
        }

        form button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 15px;
            border-radius: 5px;
        }

        form button:hover {
            background-color: #c82333;
        }

        .action-buttons a {
            color: white;
            font-size: 14px;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .action-buttons a:hover {
            background-color: #f0ad4e;
            color: black;

        }

        .action-buttons form {
            display: inline;
        }

        /* Header */
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .header .btn {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<!-- Header with buttons -->
<div class="header">
    <h2>Gestion des employés</h2>
    <a href="{{ route('employes.create') }}" class="btn btn-add">Ajouter un employé</a>
    <!-- Add more buttons for other actions -->
    <!-- Modify/Delete buttons can be used later for more detailed management -->
</div>

<div class="container">
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Fonction</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employes as $employe)
                <tr>
                    <td>{{ $employe->nom }}</td>
                    <td>{{ $employe->prenom }}</td>
                    <td>{{ $employe->email }}</td>
                    <td>{{ $employe->tel }}</td>
                    <td>{{ $employe->fonction }}</td>
                    <td class="action-buttons">
                        <a href="{{ route('employes.edit', $employe->id) }}" class="btn btn-modify btn-sm">Modifier</a>
                        <form action="{{ route('employes.destroy', $employe->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete btn-sm">Supprimer</button>
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
