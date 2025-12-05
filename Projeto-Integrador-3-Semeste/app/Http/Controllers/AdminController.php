<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalProducts = Product::count();
        $totalUsers = User::count();
        $lowStockProducts = Product::where('stock', '<', 5)->count();
        
        return view('admin_dashboard', compact('totalProducts', 'totalUsers', 'lowStockProducts'));
    }

    public function products()
    {
        $products = Product::paginate(10);
        return view('admin_produtos', compact('products'));
    }

    public function createProduct()
    {
        return view('admin_cadastrar_produto');
    }

    public function storeProduct(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'text' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|in:feminino,masculino',
            'brand' => 'nullable|string|max:100',
            'stock' => 'required|integer|min:0',
        ], [
            'name.required' => 'Nome do produto é obrigatório',
            'description.required' => 'Descrição é obrigatória',
            'price.required' => 'Preço é obrigatório',
            'category.required' => 'Categoria é obrigatória',
            'stock.required' => 'Estoque é obrigatório',
        ]);

        try {
            Product::create($validated);
            return redirect()->route('adm-produto')->with('success', 'Produto criado com sucesso!');
        } catch (\Exception $e) {
            return back()->with('error', 'Erro ao criar produto: ' . $e->getMessage());
        }
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('admin_editar_produto', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'text' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|in:feminino,masculino',
            'brand' => 'nullable|string|max:100',
            'stock' => 'required|integer|min:0',
        ]);

        try {
            $product->update($validated);
            return redirect()->route('adm-produto')->with('success', 'Produto atualizado com sucesso!');
        } catch (\Exception $e) {
            return back()->with('error', 'Erro ao atualizar produto: ' . $e->getMessage());
        }
    }

    public function deleteProduct($id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();
            return redirect()->route('adm-produto')->with('success', 'Produto deletado com sucesso!');
        } catch (\Exception $e) {
            return back()->with('error', 'Erro ao deletar produto: ' . $e->getMessage());
        }
    }

    public function users()
    {
        $users = User::paginate(10);
        return view('admin_usuarios', compact('users'));
    }

    public function deleteUser($id)
    {
        try {
            if ($id === Auth::id()) {
                return back()->with('error', 'Você não pode deletar sua própria conta!');
            }
            
            $user = User::findOrFail($id);
            $user->delete();
            return redirect()->route('adm-usuarios')->with('success', 'Usuário deletado com sucesso!');
        } catch (\Exception $e) {
            return back()->with('error', 'Erro ao deletar usuário: ' . $e->getMessage());
        }
    }
}
