<?php

namespace App\Http\Controllers;

use App\Models\Problemas;
use Illuminate\Http\Request;

class ProblemasController extends Controller
{
    public function problema1()
    {
        $problema = new Problemas();
        $resp = $problema->problema1();
        return view('problema1', [
            'resp' => $resp
        ]);
    }

    public function problema2()
    {
        return view('problema2');
    }

    public function problema2Imprimir(Request $request)
    {
        $hoje = date("Y-m-d");
        $dias = ($request->tipo == "prof") ? 10 : 3;
        $entrega = date("Y-m-d", strtotime("$hoje +$dias days"));
        return view('recibo', [
            'nomeLivro' => $request->livro,
            'dias' => $dias,
            'dataEntrega' => $entrega
        ]);
    }
    public function fibonacci(Request $request)
    {
        $problema = new Problemas();
        $resp = $problema->problemaFibonacci($request);
        return response()->json(implode(",", $resp));
    }
}
