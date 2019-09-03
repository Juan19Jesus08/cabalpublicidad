<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Mail;
use View;

use Illuminate\Http\Request;
use Swift_Mailer;
use Swift_MailTransport;
use Swift_Message;

class EmailController extends Controller
{
   public function email(){
       // Configuration
       $smtpAddress = 'smtp.live.com';
       $port = 587;
       $encryption = 'tls';
       $yourEmail = 'septjose@hotmail.com';
       $yourPassword = 'Erinbrauer';

       // Prepare transport
$transport = (new \Swift_SmtpTransport($smtpAddress,$port,$encryption))
->setUsername($yourEmail)
->setPassword($yourPassword )
;

$mailer = new \Swift_Mailer($transport);
       // Prepare content
       $view = View::make('email_template', [
           'message' => '<h1>A Juan le gusta la espesa y pegajosa miel de la peach ;) po!</h1>',
           'message2'=>'jose se come toda del dick head '
       ]);


       $html = $view->render();
      
       // Send email
$message = new \Swift_Message('Cambio de Contraseña');
$message->setFrom([$yourEmail => 'Cabal Publicidad'])->setTo(["14030619@itcelaya.edu.mx" => "juanitoki"])->setBody($html, 'text/html');

           
       if($mailer->send($message)){
           return "Check your inbox";
       }

       return "Something went wrong :(";
   }

   public function obtener_contraseña(Request $input)
	{
        $email = $input['email_show'];
        echo $email;

    }
}
