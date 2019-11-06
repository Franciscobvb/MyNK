<?php

namespace App\Http\Controllers\renewals;

use Request;
use App\Http\Controllers\Controller;

class RenewalsController extends Controller
{
    public function index(/*$associateid*/){
        
        $conection = \DB::connection('sqlsrvgenealogy');
            $response = $conection->select("SELECT * FROM Renewal_Date WHERE Associateid = '873040400'");
        \DB::disconnect('sqlsrvgenealogy');
        return view("renewals/index", compact('response'));
    }
}
