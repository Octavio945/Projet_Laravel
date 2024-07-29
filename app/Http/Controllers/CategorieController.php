<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function liste_categorie()
    {
        $category = categories::paginate(5);
        return view('product.categorie', compact('category'));
    }
    public function add_categorie()
    {
        return view('product.add_categorie');
    }
    public function ajouter_categorie_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
        ]);

        $categorie = new categories();
        $categorie->name = $request->nom;
        $categorie->save();

        return redirect('/add_categorie')->with('status', 'Categorie  ajouter avec Succès .');
    }
    public function modifier_categorie($id)
    {
        $category = categories::find($id);
        return view('product.modifier_categorie', compact('category'));
    }

    public function modifier_categorie_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
        ]);

        $category =  categories::find($request->id);
        $category->name = $request->nom;
        $category->update();
        return redirect('/categorie')->with('status', 'Categorie modifier avec Succès .');
    }

    public function supprimer_categorie($id)
    {
        $category = categories::find($id);
        $category->delete();
        return redirect('/categorie')->with('status', 'Le Categorie a été supprimer avec Succès .');
    }
}
