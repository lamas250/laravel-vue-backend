<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $clients = [
            [
                'id' => 1,
                'name' => 'Igor Lamas',
                'email' => 'igor@teste.com'
            ],
        ];

        $products = [
            [
                'id' => 1,
                'name' => 'Notebook',
                'price' => '3000'
            ],
        ];
        
        return response()->json([
            'clients' => $clients,
            'products' => $products
            ]);
    }
}
