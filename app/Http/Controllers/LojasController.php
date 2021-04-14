<?php

namespace App\Http\Controllers;

use App\Models\Loja;
use Illuminate\Http\Request;

class LojasController extends Controller{

    public function index(){
        $lojas = Loja::all();
        return response()->json(['data' => $lojas]);
    }

    public function insert(Request $request){
        $loja = $request->all();
        Loja::create($loja);
        return response()->json(['data' => $loja]);
    }

    public function get($id){
        //
    }

    public function update(Request $request, $id){
        $loja = Loja::find($id);
        $loja->update($request->all());

        return response()->json(['msg' => 'success', 'data' => $request->all()]);
    }

    public function delete($id){
        $loja = Loja::find($id);
        $loja->delete();

        return response()->json(['msg' => 'Loja excluida', 'data' => $loja]);
    }
}
