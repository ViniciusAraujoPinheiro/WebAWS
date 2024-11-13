<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class webhookTestController extends Controller
{
    public function webhook(Request $request)
    {
        // Recebe todos os dados da requisição
        $data = $request->all();
        // Log::info('Webhook received:', $data);

        // Se o evento não existir no payload, o valor será 'unknown'
        $log = $data['event'] ?? 'unknown';
        $test = $data['test'] ?? 0 ;
        // Cria um novo log com a descrição do evento
        products::create([
            'name' => $log, 
            'qts' => $test,
        ]);

        // Retorna uma resposta JSON
        return response()->json(['status' => 'success'], 200);
    }
}
