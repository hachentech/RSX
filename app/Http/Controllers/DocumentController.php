<?php

namespace App\Http\Controllers;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class DocumentController extends Controller
{
    public function index()
    {
        // Afficher la liste des documents
        $documents = Document::all();
        return view('documents.index', compact('documents'));
    }

    public function create()
    {
        // Formulaire de création d'un document
        return view('documents.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'file' => 'required|file|mimes:pdf,doc,docx,png,jpg,jpeg,txt|max:2048',
        ]);

        // Sauvegarder le fichier
        $filePath = $request->file('file')->store('documents', 'public');

        // Créer le document dans la base de données
        Document::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'file_path' => $filePath,
        ]);

        return redirect()->route('documents.index');
    }

    public function show($id)
    {
        // Afficher un document spécifique
        $document = Document::findOrFail($id);
        return view('documents.show', compact('document'));
    }

    public function edit($id)
    {
        // Formulaire de modification du document
        $document = Document::findOrFail($id);
        return view('documents.edit', compact('document'));
    }

    public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'file' => 'nullable|file|mimes:pdf,doc,docx,png,jpg,jpeg,txt|max:2048',
        ]);

        // Récupérer le document
        $document = Document::findOrFail($id);

        // Si un fichier est téléchargé, on le remplace
        if ($request->hasFile('file')) {
            // Supprimer l'ancien fichier
            Storage::disk('public')->delete($document->file_path);
            // Sauvegarder le nouveau fichier
            $filePath = $request->file('file')->store('documents', 'public');
            $document->file_path = $filePath;
        }

        // Mettre à jour le document dans la base de données
        $document->update([
            'nom' => $request->nom,
            'description' => $request->description,
        ]);

        return redirect()->route('documents.index');
    }

    public function destroy($id)
    {
        // Supprimer un document
        $document = Document::findOrFail($id);
        Storage::disk('public')->delete($document->file_path);
        $document->delete();

        return redirect()->route('documents.index');
    }
}
