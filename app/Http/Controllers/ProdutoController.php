<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;
use App\models\Produto;

class ProdutoController extends Controller
{
    
    private $objProduto;

    public function __construct(){
        $this->objProduto = new Produto();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = $this->objProduto->all();

        return view('index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoRequest $request)
    {
        $prod = $this->objProduto->create([
            'codigo' => $request->codigo,
            'descricao' => $request->descricao,
            'quantidade' => $request->qtd,
            'preco' => $request->preco,
        ]);

        if($prod){
            return redirect('produto');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = $this->objProduto->find($id);
        return view('create', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdutoRequest $request, $id)
    {
        $this->objProduto->where(['id'=>$id])->update([
            'codigo' => $request->codigo,
            'descricao' => $request->descricao,
            'quantidade' => $request->qtd,
            'preco' => $request->preco,
        ]);

        return redirect('produto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = $this->objProduto->destroy($id);

        return($del)?"Sim":"Não";
    }
}
