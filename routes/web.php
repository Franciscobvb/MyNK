<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
////////////////////Loguin/////////////////////////////
Route::get('/', 'Controller@login');    


///////////////////Home////////////////////////////////////////
Route::post('welcome', 'Controller@welcome');


//////////////vista Volume///////////////////////////////
Route::get('/volume', 'Controller@volume'); 

/////////////////////////report upline/////////////////////////
Route::get('/upline/{ab}', 'UplineTopsellController@upline'); 


//////////////////Tabla de top Selling//////////////////////
Route::get('/top', 'UplineTopsellController@top_sell');


////////////////////////////////Rutas de genealogia/////////////////////////////////
Route::get('reloadTab', 'genealogyController@reloadTab');
Route::get('/gene/{abi}', 'genealogyController@ExportGenealogy');
Route::get('saveFilters', 'genealogyController@saveFilters');
Route::get('loadFilters', 'genealogyController@loadFilters');


/////////////////////Tax Summanry erick/////////////////////////////////////////
Route::get('selectyear',"TaxController@selectyear");
Route::get('selecttotalyear',"TaxController@selecttotalyear");
Route::get('selecttaxname',"TaxController@selecttaxname");
Route::get('selecttotaltaxname',"TaxController@selecttotaltaxname");


//////////////////Renewal Routes//////////////////////////////////////////////////////////////////
Route::get('renewals/', "renewals\RenewalsController@index");
Route::post('/charge', function (\Illuminate\Http\Request $request) {
    $_token = $request->input('_token');
    $billingContact = $request->input('billingContact');
    $street = $request->input('street');
    $city = $request->input('city');
    $state = $request->input('state');
    $zipCode = $request->input('zipCode');
    $cardNumber = $request->input('cardNumber');
    $securityCode = $request->input('securityCode');
    $expireMonth = $request->input('expireMonth');
    $expireYear = $request->input('expireYear');
    $associateid = $request->input('associateid');

    $token    = $request->input('token');
    $total    = 79;
    $key      = config('worldpay.sandbox.client');
    $worldPay = new Alvee\WorldPay\lib\Worldpay($key);
    
    $billing_address = array(
        'address1'    => "$street",
        'address2'    => '',
        'address3'    => '',
        'postalCode'  => (int)($zipCode),
        'city'        => $city,
        'state'       => $state,
        'countryCode' => 'US',
    );
    
    try {
        $response = $worldPay->createOrder(array(
            'token'             => $token,
            'amount'            => (int)($total . "00"),
            'currencyCode'      => 'USD',
            'name'              => "$billingContact",
            'billingAddress'    => $billing_address,
            'orderDescription'  => 'Renewal',
            'customerOrderCode' => '01100001'
        ));
        if ($response['paymentStatus'] === 'SUCCESS') {
            $fecha = date('Y-m-j');
            $nuevafecha = strtotime ( '+1 year' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'Y-m-j h:m:s' , $nuevafecha );

            $conection = \DB::connection('sqlsrvgenealogy');
                $sponsor = $conection->update("UPDATE Renewal_Date SET Renewal_Date = '$nuevafecha' WHERE Associateid = '$associateid';");
            \DB::disconnect('sqlsrvgenealogy');

            // Start sending a mail to confirm the payment of renewal
            $data = array(
                'name' => "$billingContact",
            );
            Mail::send('emails.email', $data, function ($message) {
                $message->from('fmelchor@nikkenlatam.com', 'My Nikken');
                $message->to('franciscoshark385@gmail.com')->subject('My Nikken membership renewal');
            });
            // End sending a mail to confirm the payment of renewal

            return \Response::json($response);
        } else {
            // The card has been declined
            throw new \Alvee\WorldPay\lib\WorldpayException(print_r($response, true));
        }
    } catch (Alvee\WorldPay\lib\WorldpayException $e) {
        echo 'Error code: ' . $e->getCustomCode() . '
                HTTP status code:' . $e->getHttpStatusCode() . '
                Error description: ' . $e->getDescription() . '
                Error message: ' . $e->getMessage();

        // The card has been declined
    } catch (\Exception $e) {
        // The card has been declined
        echo 'Error message: ' . $e->getMessage();
    }
});

///////////////////////////// watch list //////////////////////////////////////
Route::get("/welcome/watchlist", "watchlist\WatchList@index");
Route::get("/welcome/watchlist/welcome/{idsponsor}{period}", "watchlist\WatchList@store");
Route::get("/welcome/watchlist/addAsoc", "watchlist\WatchList@addAssoc");
Route::get("/welcome/watchlist/reloadtabw", "watchlist\WatchList@reloadTabw");
Route::get("/welcome/watchlist/delAsoc/{id}", "watchlist\WatchList@delAsoc");
Route::get("/welcome/watchlist/saveTableConf/{idsponsor}{line_number}{levels}{name}{consultant_id}{email}{mobile_number}{alternative_num}{country}{pay_rank}{distributor_status}{inactive_months}{renewal_date}{period1}{period2}{period3}", "watchlist\WatchList@saveTableConfig");
Route::get("/welcome/watchlist/loadInitConf", "watchlist\WatchList@initTableConfig");