<?php

namespace App\Http\Controllers;

use App\Notifications\ContactoFormNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SendMessageController extends Controller
{
    //
    public function auxUserForNotif($request){
        try {
            $user = new User();
            $user->email = config('mail.email-cliente-default');
            $user->datos = $request;
            return $user;
        } catch (\Exception $e) {

        }
    }
    public function validatorForm($form) {
        $rules = [
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
            'telefono' => 'required',
            'email' => 'required|string|email',
            'g-recaptcha-response' => 'recaptcha'];

        $messages = [
            'nombre.required' => 'El nombre no puede estar vacío',
            'apellidos.required' => 'Los apellidos no pueden estar vacíos',
            'telefono.required' => 'El teléfono no puede estar vacío',
            'email.required' => 'El email no puede estar vacío',
        ];

        $validator = Validator::make($form, $rules, $messages);
        return $validator;
    }

    public function send(Request $request){
        $resultJson = $this->recaptchaScore($request);
        try {
            $validator = $this->validatorForm($request->all());
            if ( $validator->fails() ) {
                return view('pages/home')->with('errores', $validator->errors()->getMessages());
            }else{
                if ($resultJson->success != true) {
                    Session::flash('correo-no-enviado','No se ha podido enviar el correo, contacte con nosotros a través del correo info@juralia.es.');
                    return redirect('/');
                }else{
                    if($resultJson->score >= 0.5) {
                        $user = $this->auxUserForNotif($request);

                        $user->notify(new ContactoFormNotification($request));
                    }
                }

            }
            Session::flash('correo-enviado','Se ha enviado un correo con su consulta.');
            return redirect('/');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function recaptchaScore($request){
        $token = $request -> _token;
        $url = 'https://www.google.com/recaptcha/api/siteverify';

        $data = [
            'secret' => config('recaptcha.api_secret_key'),
            'response' => request('g-recaptcha-response')
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded/r/n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);
        return $resultJson;
    }
}
