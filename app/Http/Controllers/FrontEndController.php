<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use Sentinel;
use URL;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home()
    {
    	$active = 'index';
    	$title = 'INICIO';
    	return view('index', compact('active', 'title'));
    }

    public function aboutus()
    {
    	$active = 'aboutus';
    	$title = 'NOSOTROS';
    	return view('aboutus', compact('active', 'title'));
    }

    public function video()
    {
        $active = 'video';
        $title = 'VIDEO';
        return view('video', compact('active', 'title'));
    }

    public function services()
    {
        $active = 'services';
        $title = 'Servicios';
        return view('services', compact('active', 'title'));
    }

    public function portfolio()
    {
        $active = 'portfolio';
        $title = 'Portafolio';
        return view('portfolio', compact('active', 'title'));
    }

    public function contact()
    {
        $active = 'contact';
        $title = 'Contacto';
        return view('contact', compact('active', 'title'));
    }

    public static function SMTPMail()
    {
        $mail = new PHPMailer(true);

        /* Cuando el proyecto se suba al servidor, descomentar la siguiente línea para que el envío de corre funcione correctamente y no llegue a SPAM */
        $mail->isSMTP();

        $mail->SMTPAuth = true;
        $mail->SMTPDebug  = 4;
        $mail->SMTPSecure = env('MAIL_ENCRYPTION');
        $mail->Host = env('MAIL_HOST');
        $mail->Port = env('MAIL_PORT');
        $mail->Username = env('MAIL_USERNAME');
        $mail->Password = env('MAIL_PASSWORD');


        $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        return $mail;
    }

    public static function postContact(Request $request)
    {
        // dd($request->all());
        $subject = 'Prueba Mail';
        $msg = '<p>Prueba Mail</p>';

        try {
            $mail = self::SMTPMail();
            $mail->CharSet = 'UTF-8'; // set charset to utf8
            $mail->Subject = $subject;
            $mail->MsgHTML($msg);
            $mail->addAddress('erodriguez@fabricadesoluciones.com', 'Enrique Rodriguez');
            if($mail->send()) dd("good");
            else dd("bad");
        } catch (phpmailerException $e) {
            dd($e);
        } catch (Exception $e) {
            dd($e);
        }
    }
}
