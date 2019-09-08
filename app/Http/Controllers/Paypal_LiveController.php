<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;

/** All Paypal Details class **/
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;
use DB;

class Paypal_LiveController extends Controller
{
    private $_api_context;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        
		$this->_api_context = new ApiContext(new OAuthTokenCredential(
            'AWp9GjvaNJzXrO6arg5a9IDMbqpvc3VY3-KsvPryQ04P59hYrpbLILQcmk6MM_boBQKbpk21X8tzdszV',
            'EH9zZym420FJJEw_YYQWGnZDU78cjb2JiFdiLMf8WiHIQ_IIxCL6TK5ypOHP2RgKz8aM1VXYmSsCIoWc')
        );

		/*$this->_api_context = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AYSq3RDGsmBLJE-...GfwddNXWz0uFU9ztymOhRS',     // ClientID
            'EGnHDxD_qRPdaLd...NKYQvQSBngp4PTTVWkPZRbL'      // ClientSecret
        )
);*/



		//$this->_api_context = Paypalpayment::ApiContext($this->_ClientId, $this->_ClientSecret);
       // $this->_api_context->setConfig($paypal_conf['settings']);

		$this->_api_context->setConfig(
      array(
        'log.LogEnabled' => true,
        'log.FileName' => 'PayPal.log',
        'log.LogLevel' => 'DEBUG',
        'mode' => 'live'
      )
);
    }
    /*public function index()
    {
        return view('paywithpaypal');
    }*/
    public function payWithpaypal(Request $request)
    {
        $email=$correo=Session::get('email');
        if(strlen ($email)>0)
        {
            $query=DB::select("SELECT * FROM adquirir WHERE adquirir.email='$email' and adquirir.id_curso=$request->nombre");
            if (empty($query))
            {
                
                $request->nombre;
                Session::put('email',$request->email);
                Session::put('id_curso',$request->nombre);
    
            $payer = new Payer();
            $payer->setPaymentMethod('paypal');
    
            $item_1 = new Item();
    
            $item_1->setName('Item 1') /** item name **/
                ->setCurrency('MXN')
                ->setQuantity(1)
                ->setPrice($request->get('amount')); /** unit price **/
    
            $item_list = new ItemList();
            $item_list->setItems(array($item_1));
    
            $amount = new Amount();
            $amount->setCurrency('MXN')
                ->setTotal($request->get('amount'));
    
            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setItemList($item_list)
                ->setDescription('Your transaction description');
    
            $redirect_urls = new RedirectUrls();
            $redirect_urls->setReturnUrl(URL::to('status')) /** Specify return URL **/
                ->setCancelUrl(URL::to('status'));
    
            $payment = new Payment();
            $payment->setIntent('Sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirect_urls)
                ->setTransactions(array($transaction));
            /** dd($payment->create($this->_api_context));exit; **/
            try {
    
                $payment->create($this->_api_context);
    
            } catch (\PayPal\Exception\PPConnectionException $ex) {
    
                if (\Config::get('app.debug')) {
    
                    \Session::put('error', 'Connection timeout');
                    return Redirect::to('/');
    
                } else {
    
                    \Session::put('error', 'Some error occur, sorry for inconvenient');
                    return Redirect::to('/');
    
                }
    
            }
    
            foreach ($payment->getLinks() as $link) {
    
                if ($link->getRel() == 'approval_url') {
    
                    $redirect_url = $link->getHref();
                    break;
    
                }
    
            }
    
            /** add payment ID to session **/
            Session::put('paypal_payment_id', $payment->getId());
    
            if (isset($redirect_url)) {
    
                /** redirect to paypal **/
                return Redirect::away($redirect_url);
    
            }
    
            \Session::put('error', 'Unknown error occurred');
            return Redirect::to('/');
    
        }
        else{
            Session::put('error','Este curso ya lo compraste!!');
            return Redirect::to('/');
            }
        }
        Session::put('error','No has iniciado sesion!');
            return Redirect::to('/inciciar_sesion');
     
       
    
}

    public function getPaymentStatus()
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {

            \Session::put('error', 'Payment failed');
            return Redirect::to('/');

        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {

            $fecha = date('y-m-d');
            $correo=Session::get('email');
            $id=Session::get('id_curso');
 

            $query=DB::insert('insert into adquirir (email,id_curso,fecha_de_adquisicion,avance,certificado,comentario,calificacion,fecha_finalizacion) values ( ?, ?, ?, ?, ?,?,?,?)', [$correo, $id,$fecha,0,0,null,0,null]);        
            
            \Session::put('success', 'Payment success');
            //Session::forget('email');
            Session::forget('id_curso');
            return Redirect::to('/mis_cursos');
        }

        \Session::put('error', 'Payment failed');
        return Redirect::to('/');

    }

}
