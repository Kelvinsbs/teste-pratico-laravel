<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\models\Produto;

// class ProdutosController extends Controller
// {
//     private $objProduto;

//     public function __construct(){
//         $this->objProduto = new Produto();
//     }

//     public function index(){
//         $produtos = $this->objProduto->all();

//         return view('index', compact('produtos'));
//     }

//     function addProdutos(Request $req){
//         $produto = new Produto;
//         $produto->codigo = $req->codigo;
//         $produto->descricao = $req->descricao;
//         $produto->quantidade = $req->qtd;
//         $produto->preco = $req->preco;
//         $produto->save();
//         return redirect('add');
//     }

//     public function edit($codigo){
//         dd($codigo);
//         $produto = $this->objProduto->find($codigo);

//         return view('addProdutos', compact($produto));

//     }
// }
