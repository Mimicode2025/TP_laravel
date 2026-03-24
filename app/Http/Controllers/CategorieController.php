<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('Bibliotheque.Categorie.index', compact('categories'));
    }

    public function create()
    {
        return view('Bibliotheque.Categorie.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:10|unique:categories',
            'name' => 'required|string|max:100'
        ]);

        Categorie::create($request->all());

        return redirect()->route('categories.index')->with('success', 'Catégorie créée avec succès.');
    }

    public function show(Categorie $category)
    {
        return view('Bibliotheque.Categorie.show', compact('category'));
    }

    public function edit(Categorie $category)
    {
        return view('Bibliotheque.Categorie.edit', compact('category'));
    }

    public function update(Request $request, Categorie $category)
    {
        $request->validate([
            'code' => 'required|string|max:10|unique:categories,code,' . $category->id,
            'name' => 'required|string|max:100'
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour avec succès.');
    }

    public function destroy(Categorie $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès.');
    }
}
