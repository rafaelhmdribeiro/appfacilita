<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problemas extends Model
{
    use HasFactory;

    /**
     * Resolvendo Problema 1
     *
     * @return int
     */
    public function problema1()
    {
        $chico = 150;
        $juca = 110;
        $anos = 0;
        while ($chico >= $juca) {
            $chico += 2;
            $juca += 3;
            $anos += 1;
        }
        return $anos;
    }


    /**
     * Retorna o Array 
     * 
     * @return array
     */
    public function fibonacci($limite)
    {
        $retorno = array();
        $a = 0;
        $b = 1;
        $t = 0;

        while ($b <= $limite) {
            array_push($retorno, $b);
            $t = $a;
            $a = $b;
            $b = $t + $b;
        }
        return $retorno;
    }

    public function problemaFibonacci($request)
    {
        $numeros = explode(",", $request->num);
        $limite = max($numeros);
        $fibonacci = $this->fibonacci($limite);
        $resp = array();
        foreach ($numeros as $num) {
            if (in_array($num, $fibonacci)) {
                array_push($resp, $num);
            }
        }
        sort($resp);
        return $resp ;
    }
}
