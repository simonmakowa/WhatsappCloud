<?php

namespace App\Http\Controllers;

use App\Models\Webhook;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function index(Request $request){
        $data = $request->all();
        $challenge=$request->hub_challenge;
        $dataToSTring = json_encode($data);
//        Webhook::create([
//            'webhook' => $dataToSTring,
//            'type' => '123'
//        ]);
        return response ($challenge, 200);
    }
}
