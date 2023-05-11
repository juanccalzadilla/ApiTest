<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClienteCollection;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
   public function index()
   {
    //   return response()->json([
    //     "data" => Cliente::all()
    //   ]);
    return new ClienteCollection(Cliente::all());
   }
}
