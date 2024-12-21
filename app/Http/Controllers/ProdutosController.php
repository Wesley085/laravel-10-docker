<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestProduto;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    protected $produto; // Adicionada a declaração da propriedade

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function index(Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findProdutos = $this->produto::getProdutosPesquisarIndex(search: $pesquisar ?? '');
        return view('pages.produtos.paginacao', compact('findProdutos'));
    }

    public function cadastrarProduto(FormRequestProduto $request) 
    { 
        if ($request->method() == "POST") { 
            
            $data = $request->all(); 
            Produto::create($data);
            return redirect()->route('produto.index');
        }
        return view('pages.produtos.create');
    }

    public function delete(Request $request) 
    {
        $id = $request->id;
        $buscaRegistro = Produto::find($id);
        $buscaRegistro->delete();
        return response()->json(['success' => true]);
    }
}
