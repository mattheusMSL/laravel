<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\models\Produto;

class ProdutoController extends Controller{
   
    public function index(){
        $produto = Produto::all();
        return dd($produto);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        return 'produtoId: '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function iphone(){
        return view('produto', [
            'productName' => 'iphone 16 pro',
            'price' => '6000,00', 
            'productImg' => 'public/products/iphone-16-pro'
           ]);
    }
}
