<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        $products = [
            [
                'id' => 1,
                'name' => 'Notebook',
                'price' => '3000'
            ],
            [
                'id' => 2,
                'name' => 'Celular',
                'price' => '900'
            ]
        ];
        
        return response()->json([
            'clients' => $clients,
            'products' => $products
            ]);
    }

   
}
