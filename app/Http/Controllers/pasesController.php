<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pase;
use Telegram\Bot\Api;
use Telegram\Bot\Actions;
use Telegram\Bot\FileUpload\InputFile;

class pasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function updatedActivity(Request $request)
    {
        $requestn = $request->phone_number;
        $id_pase = Pase::where('telefono', $requestn)->first();
        $totalpases = Pase::where('telefono', $requestn)->value("total_pases");

        Pase::where('telefono', $requestn)->update([
            'pases_usados' => $request->pasesocupados,
            'pases_restantes' => $totalpases - $request->pasesocupados
         ]);
        
        $chat_id = Pase::where('telefono', $requestn)->value("chat_id");
        $pases_usados = Pase::where('telefono', $requestn)->value("pases_usados");
        $familia = Pase::where('telefono', $requestn)->value("nombre_familia");


        $qr = \QrCode::size(250)->color(182, 149, 192)->backgroundColor(255,255,255)->errorCorrection('H')->margin(5)->format('png')->generate('Total de pases confirmados: '. $pases_usados . ' Familia: ' . $familia, '../public/qrcodes/'.$id_pase->idpases.'.png');
      

        $bienvenida = '¡Bienvenidos a la gran celebración de los XV años de nuestra querida hija Ximena! 
                        . Esperamos que disfruten de esa noche mágica y
                         llena de emociones, rodeados de amigos y familiares. Que la alegría, el amor y la felicidad
                          nos acompañen en todo momento y que cada uno de ustedes se sienta como en casa. Agradecemos
                           su presencia y su apoyo en este día tan especial para nosotros.';
        
        $enviarbienvenida =  \Telegram::sendMessage([
            'chat_id' => $chat_id,
            'parse_mode' => 'HTML',
            'text' => $bienvenida
        ]);  
        
        
        
        $ubicacion = 'Te compartimos la ubicación de nuestra celebracion';

        $enviarbienvenida =  \Telegram::sendMessage([
            'chat_id' => $chat_id,
            'parse_mode' => 'HTML',
            'text' => $ubicacion
        ]);  

        $url = 'https://goo.gl/maps/vgXGBpegKhyLAsLt5';
        $message = 'En este link lo encontraras: ' . $url;

        $enviarubicacionsalon = \Telegram::sendMessage([
            'chat_id' => $chat_id,
            'text' => $message
        ]);  

        $enviarmapasalon = \Telegram::sendLocation([
            'chat_id' => $chat_id, 
            'latitude' => 19.0718102,
            'longitude' => -98.1949129,
        ]);

        $enviarpasesusados = \Telegram::sendMessage([
            'chat_id' => $chat_id, 
            'text' => 'Pases generados: ' . $pases_usados
        ]);

        // Ruta local de la imagen a enviar
        $localImagePath =  '../public/qrcodes/'.$id_pase->idpases.'.png';

        // Crea un objeto InputFile a partir de la ruta local de la imagen
        $photo = InputFile::create($localImagePath, 'imagen.jpg');


        // Envía la imagen al chat
        $response = \Telegram::sendPhoto([
            'chat_id' => $chat_id,
            'photo' => $photo,
            'caption' => 'Presenta este qr al ingresar a la fista😊'
        ]);


//  $activity = \Telegram::getUpdates();

//  dd($activity);
}

    public function showPasses($phone_number)
    {
       

        $passes = Pase::where('telefono', $phone_number)
        ->first();
        
    return response()->json([
        'passes' => $passes,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
