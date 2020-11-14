<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function index()
    {
        return Client::all(); 
    }
    
    public function store(Request $request)
    {
        $client = new Client;
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->save();
        return response()->json($request);
    }

    public function delete($id)
    {
        $clients = Client::findOrFail($id);
        $clients->delete();
        return response()->json($clients);
    }
}
