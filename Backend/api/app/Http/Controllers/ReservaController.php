<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use JWTAuth;
use Illuminate\Database\QueryException;

class ReservaController extends Controller
{
    public function create(Request $request){
        /* return 'hola'; */
       /*  $data = $request->all();
        $token = $request->bearerToken();
        $doc = JWTAuth::getPayload($token)->toArray()['sub'];
        $data['doc_cliente'] = $doc;
        /* try{
            $created = is_object(Reserva::create($data));
        }catch(QueryException $e){
            $created = false;
        } *//*  */
       /*  $created = Reserva::create($data); */

        /* return array('created' => $created); */

        /* return $created; */ 
        $data = $request->all();
        $token = $request->bearerToken();
        $doc = JWTAuth::getPayload($token)->toArray()['sub'];
        $data['doc_cliente'] = $doc;
        try{
            $created = is_object(Reserva::create($data));
        }catch(QueryException $e){
            $created = false;
        }
        return array('created' => $created); 

    }
    public function showByCliente(Request $request){
        $token = $request->bearerToken();
        $doc = JWTAuth::getPayload($token)->toArray()['sub'];
       /*  $history = Reserva::where('doc_cliente',$doc)->get(); */
       $history = Reserva::where('doc_cliente', $doc)->with(['habitacion.hotel', 'habitacion.tipo'])->get();
        return $history;
    }
}
