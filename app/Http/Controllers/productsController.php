<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

use function Psy\debug;

class productsController extends Controller
{
    // Método para listar posts
    public function index()
    {
        $posts = products::all(); // Pega todos os posts
        return view('products.index', compact('posts'));
    }

    // Método para exibir um post específico
    public function show($id)
    {
        $post = products::findOrFail($id); // Pega o post pelo ID
        return view('products.show', compact('post'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'name' => 'required|string|max:255',
            'qts' => 'required|integer',
        ]);
        
        // Criação do produto no banco
        products::create([
            'name' => $request->input('name'),
            'qts' => $request->input('qts'),
            // 'created_at' => now(),
            // 'updated_at' => now(),
        ]);


        // Redireciona para a página de produtos com sucesso
        return redirect()->route('products.index')->with('success', 'Produto cadastrado com sucesso!');
    }
}
