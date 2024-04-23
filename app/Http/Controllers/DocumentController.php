<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo; 

class DocumentController extends Controller
{
    public function saveDocuments(Request $request)
{
    // Crea una nueva instancia del cliente de MongoDB
    $mongo = new Mongo();

    // Selecciona la colección 'documents' de la base de datos 'hms'
    $collection = $mongo->hms->documents;

    // Inserta los datos del Request directamente en la colección y obtiene el resultado
    $result = $collection->insertOne($request->json()->all());

    
    if ($result->isAcknowledged()) {
       
        return response()->json([
            'message' => 'Accion exitosa', 
            'data' => $request->json()->all()
        ], 201);
    } else {
        
        return response()->json(['message' => 'Error al insertar datos'], 500);
    }
}
}