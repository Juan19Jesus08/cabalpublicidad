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


class PaymentController extends Controller
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
            'AV-IIEZpen4qsue-JiqyPTPhfnJwb2mrjxPZLa5-dnuZ9iR5YEDJi-YJ5_uHt1npjQoRFWASTw931E6e',
            'EL9w3J7HZKXokQSx9Y6UMrN-TmWrbV-LuKsBP_8n5bRoK1Ba06P4-Od-77JaYKvrqG-i8p2kHt0DQfLe')
        );



		//$this->_api_context = Paypalpayment::ApiContext($this->_ClientId, $this->_ClientSecret);
        $this->_api_context->setConfig($paypal_conf['settings']);
    }
   /* public function index()
    {
        return view('paywithpaypal');
    }*/

    public function payWithpaypal(Request $request)
    {
       
        $query=DB::select("SELECT * FROM adquirir WHERE adquirir.email='$request->email' and adquirir.id_curso=$request->nombre");
        if (empty($query))
        {
            
            $request->nombre;
            Session::put('email',$request->email);
            Session::put('id_curso',$request->nombre);
       
            $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName($request->get('nombre')) /** item name **/
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
         
        else
        {
            return Redirect::to('/');
        }

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
