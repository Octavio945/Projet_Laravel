<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;

class ProductController extends Controller
{
    public function liste_product(Request $request)
    {
        $query = products::with('categories');

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
        }

        $produits = $query->paginate(5);
        return view('product.liste', compact('produits'));
    }

    public function ajouter_product()
    {
        $categories = categories::all();
        return view('product.ajouter', compact('categories'));
    }

    public function ajouter_product_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'stock' => 'required',
            'categorie' => 'required|exists:categories,id',
        ]);

        $product = new products();
        $product->name = $request->nom;
        $product->description = $request->description;
        $product->price = $request->prix;
        $product->stock = $request->stock;
        $product->category_id = $request->categorie;
        $product->save();

        return redirect('/ajouter')->with('status', 'Produit  ajouter avec Succès .');

    }

    public function add_categorie()
    {
        return view('product.add_categorie');
    }

    public function modifier_product($id){
        $produits = products::find($id);
        $categories = categories::all();
        return view('product.modifier', compact('produits', 'categories'));
    }

    public function modifier_product_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'stock' => 'required',
            'categorie' => 'required|exists:categories,id',
        ]);

        $product =  products::find($request->id);
        $product->name = $request->nom;
        $product->description = $request->description;
        $product->price = $request->prix;
        $product->stock = $request->stock;
        $product->category_id = $request->categorie;
        $product->update();

        return redirect('/')->with('status', 'Produit  modifier avec Succès .');
    }

    public function supprimer_product($id)
    {
        $produits = products::find($id);
        $produits->delete();
        return redirect('/')->with('status', 'Le Produit a été supprimer avec Succès .');
    }

    public function show($id)
    {
        $produits = products::find($id);
        return view('product.show', compact('produits'));
    }
}
