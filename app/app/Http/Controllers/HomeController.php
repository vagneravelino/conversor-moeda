<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $convertion_rates = [
        'BRL' => [
            'BRL' => 1.00,
            'USD' => 0.21,
            'GBP' => 0.16,
            'EUR' => 0.19,
            'ARS' => 24.93,
            'BTC' => 0.00
        ],
        'USD' => [
            'BRL' => 4.86,
            'USD' => 1.00,
            'GBP' => 0.79,
            'EUR' => 0.93,
            'ARS' => 121.28,
            'BTC' => 0.00
        ],
        'EUR' => [
            'BRL' => 5.21,
            'USD' => 1.07,
            'GBP' => 0.85,
            'EUR' => 1.00,
            'ARS' => 129.84,
            'BTC' => 0.00
        ],
        'GBP' => [
            'BRL' => 6.12,
            'USD' => 1.26,
            'GBP' => 1.00,
            'EUR' => 1.18,
            'ARS' => 152.64,
            'BTC' => 0.00
        ],
        'ARS' => [
            'BRL' => 0.04,
            'USD' => 0.01,
            'GBP' => 0.01,
            'EUR' => 0.01,
            'ARS' => 1.00,
            'BTC' => 0.00
        ],
        'BTC' => [
            'BRL' => 146139.69,
            'USD' => 30064.34,
            'GBP' =>23890.05,
            'EUR' => 28137.75,
            'ARS' => 3652854.57,
            'BTC' => 1.00
        ],
    ];

    private $_moedas = [
	    'BRL' => ['codigo'=> 'BRL', 'pais'=> 'Brasil', 'simbol' =>'R$', 'moeda' => 'Real'],
	    'USD' => ['codigo'=> 'USD', 'pais'=> 'Estados Unidos', 'simbol' =>'$', 'moeda' => 'Dólar'],
	    'EUR' => ['codigo'=> 'EUR', 'pais'=> 'União Europeia', 'simbol' =>'€', 'moeda' => 'Euro'],
	    'ARS' => ['codigo'=> 'ARS', 'pais'=> 'Argentina', 'simbol' =>'$', 'moeda' => 'Peso argentino'],
	    'GBP' => ['codigo'=> 'GBP', 'pais'=> 'Reino Unido', 'simbol' =>'£', 'moeda' => 'Libra esterlina'],
	    'BTC' => ['codigo'=> 'BTC', 'pais'=> '', 'simbol' =>'₿', 'moeda' => 'Bitcoin'],
	];


    public function __construct() {}

    public function index()
    {
        return view('home', ['moedas' => $this->_moedas]);
    }

    public function moeda($moeda)
    {
        return $moeda;
    }

    public function conversor(Request $request)
    {
        $origem = $this->convertion_rates[$request->origin];
        $valor = $request->value * $origem[$request->destiny];

        return $valor;
    }
}
