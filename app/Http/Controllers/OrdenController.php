<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Orden;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    
    public function index()
    {
        $ordenes = Orden::Paginate(3);
        return view('admin.ordenes.index', compact("ordenes"));
    }

 
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $orden = Orden::findOrFail($id);
        $cliente_id = $orden->user_id;
       
        $cliente = User::findOrFail($cliente_id);
        return view('admin.ordenes.show',compact('cliente','orden'));
    }

    
    public function edit(Orden $orden)
    {
        //
    }

  
    public function update(Request $request, Orden $orden)
    {
        //
    }

   
    public function destroy(Orden $orden)
    {
        //
    }
}
