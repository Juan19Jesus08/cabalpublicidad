<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Mail;
use View;
use DB;
use Illuminate\Http\Request;
use Swift_Mailer;
use Swift_MailTransport;
use Swift_Message;

class EmailController extends Controller
{
   public function email($email, $nombre, $password){
       // Configuration
       $smtpAddress = 'smtp.gmail.com';
       $port = 465;
       $encryption = 'ssl';
       $yourEmail = 'robertocabal1981@gmail.com';
       $yourPassword = 'cuentagoogle1';

       // Prepare transport
$transport = (new \Swift_SmtpTransport($smtpAddress,$port,$encryption))
->setUsername($yourEmail)
->setPassword($yourPassword )
;

$mailer = new \Swift_Mailer($transport);
       // Prepare content
       $view = View::make('email_template', [
           'message' => ' Estimado '.$nombre,
           'message2'=>'En Cabal Publicidad cuidamos tu seguridad, por tal motivo, te estamos enviando la contraseña que nos solicitaste',
           'message3'=>'Nombre de usuario :'.$nombre,
           'message4'=>'Nueva Contraseña :'.$password,
           'message5'=>'Es recomendable cambiar las contraseñas continuamente para obtener la más alta seguridad en nuestro sitio.'

       ]);

       $html = $view->render();
      
       // Send email
$message = new \Swift_Message('Cambio de Contraseña');
$message->setFrom([$yourEmail => 'Cabal Publicidad'])->setTo([$email => $nombre])->setBody($html, 'text/html');

           
       if($mailer->send($message)){
           return "Check your inbox";
       }

       return "Something went wrong :(";
       
   }

   public function obtener_contraseña(Request $input)
	{
        $email = $input['email_show'];
      

        $query = "select * from usuario where email='$email'";
        $data=DB::select($query);
       
        
        $cantidad= sizeof($data);
      
        if($cantidad>0)
        {
            $nombre=$data[0]->nombre;
            $length=10;
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $password = '';
            for ($i = 0; $i < $length; $i++) {
                $password .= $characters[rand(0, $charactersLength - 1)];
                }
            
                $encryptedPassword = bcrypt($password);
                $query2=DB::update("update  usuario set password='$encryptedPassword' where email=?",[$email]);
            $this->email($email, $nombre, $password);
            return redirect('/iniciar_sesion');
        }
        else{
            return redirect('/mi_contraseña');
        }
    }
}
