<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use DB;
//use Maatwebsite\Excel\Facades\Excel;
//use Excel;
use App;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function login(){
        
    	return view('login');
    }



    public function welcome(Request $request){
            //validacion de daotos enviados desde login
            $this->validate(request(), [
                'username'=>'required'
            ]);
            //recojemos el  id que envian desde el  loguin
            $id = $request ->input('username');

            $locale = $request ->input('eshi');

            App::setLocale($locale);

            $ids = $id;

            $baseids = base64_encode($ids); //base 64 

            //TAX SUMMARY
            $id=$id;
            $contPurchases=0;
            $contCommission_Amount=0;
            $contBonus_Deduction=0;
            $contOther=0;
            $contAdjusted_Gross=0;
            $contBackup_Withholding=0;

           $conection = \DB::connection('sqlsrvtop');
           //Busca en la BD el último año
           $getlastyear= $conection
           ->select("select MAX(Period) as lastyear from Get_TaxSummary(?)", [$id]);

           $lastyear=$getlastyear[0]->lastyear;
           $lastyear=substr($lastyear, -4);


           //Información del select Name
            $queryTaxNames= $conection
            ->select("select distinct Name from Get_TaxSummary(?) WHERE Period LIKE '%/".$lastyear."'", [$id]);  
            //info de la tabla
            $queryTax= $conection
            ->select("select * from Get_TaxSummary(?) WHERE Period LIKE '%/".$lastyear."'", [$id]); //QUITAR ;  //QUERY QUE BUSCA POR AÑO  


            \DB::disconnect('sqlsrvtop');   

            foreach($queryTax as $infotax){
                $contPurchases = $contPurchases + $infotax->Purchases;
                $contCommission_Amount = $contCommission_Amount + $infotax->Commission_Amount;
                $contBonus_Deduction = $contBonus_Deduction + $infotax->Bonus_Deduction;
                $contOther = $contOther + $infotax->Other;
                $contAdjusted_Gross = $contAdjusted_Gross + $infotax->Adjusted_Gross;
                $contBackup_Withholding = $contBackup_Withholding + $infotax->Backup_Withholding;

            }  

             $conection = \DB::connection('sqlsrvgenealogy');
            $response = $conection->select("SELECT * FROM Renewal_Date WHERE Associateid ='".$ids."'");
            \DB::disconnect('sqlsrvgenealogy');
            

            //return view('welcome', ['ids'=>$ids]);
            return view('welcome', ['ids'=>$ids,'queryTaxNames' => $queryTaxNames, 'queryTax' => $queryTax,'lastyear' => $lastyear, 'contPurchases' => $contPurchases, 'contCommission_Amount' => $contCommission_Amount, 'contBonus_Deduction' => $contBonus_Deduction, 'contOther' => $contOther, 'contAdjusted_Gross' => $contAdjusted_Gross, 'contBackup_Withholding' => $contBackup_Withholding, 'response'=>$response, 'baseids'=>$baseids]);

           

           //  return view('welcome', ['ids'=>$ids]);      
    }



////////////////////////Para cambiar idioma/////////////////////////////
   public function lang(Request $request)
    {       
              session(['lang' => $lang]);
                return \Redirect::back();
                
    }

//////////////////////Vista volume////////////////////////////////////////////
    public function volume(){
        return view('volume');
    }
}
