<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProveedorCollection;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return new ProveedorCollection(Proveedor::all());
        // return [
        //     "result" => new ProveedorCollection(Proveedor::all()),
        //     "count" => Proveedor::count(),
        //     "status" => "success"
        // ];

        try {
            return [
                "result" => new ProveedorCollection(Proveedor::all()),
                "count" => Proveedor::count(),
                "status" => "success"
            ];
        } catch (\Exception $e) {
            return [
                "result" => [],
                "count" => 0,
                "status" => "error",
                "message" => $e->getMessage()
            ];
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        //
    }
}
