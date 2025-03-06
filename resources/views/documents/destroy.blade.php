<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de suppression</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="mt-5">Êtes-vous sûr de vouloir supprimer ce document ?</h1>

    <div class="alert alert-warning mt-4">
        <strong>Attention !</strong> Cette action est irréversible. Une fois le document supprimé, il ne pourra pas être récupéré.
    </div>

    <div class="mt-4">
        <form action="{{ route('documents.destroy', $document->id) }}" method="POST">
            @csrf
            @method('DELETE')
            
            <!-- Bouton de confirmation de suppression -->
            <button type="submit" class="btn btn-danger">Confirmer la suppression</button>
            <!-- Bouton pour annuler -->
            <a href="{{ route('documents.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
