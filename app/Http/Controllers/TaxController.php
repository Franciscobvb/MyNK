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

class TaxController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    //selectyear
    public function selectyear(Request $request) 
   {
        
    $year = $request->year;
    $id = $request->consultantid;  //HACER QUE SEA VARIADO



           try {


            $conection = \DB::connection('sqlsrvtop');

            $queryTax= $conection
            ->select("select * from Get_TaxSummary(?) WHERE Period LIKE '%/".$year."'", [$id]);

            //Con print_r si me muestra el resultado. pero con el exit, sin el no actualiza nuevamente
           // print_r($queryTax);exit();  

            \DB::disconnect('sqlsrvtop'); 


            return \Response::json($queryTax);

               
           } catch (Exception $e) {

           
            return 0;
               
           }

    } 



    //selecttotalyear
    public function selecttotalyear(Request $request) 
   {
        
    $year = $request->year;
    $id = $request->consultantid;  //HACER QUE SEA VARIADO

           try {


            $conection = \DB::connection('sqlsrvtop');

            $queryTaxTotal= $conection
            ->select("select sum(Purchases) as TotalPurchases, sum(Commission_Amount) as TotalCommission_Amount, sum(Bonus_Deduction) as TotalBonus_Deduction,sum(Other) as TotalOther, sum(Adjusted_Gross) as TotalAdjusted_Gross, sum(Backup_Withholding) as TotalBackup_Withholding
   FROM Get_TaxSummary(?) WHERE Period LIKE '%/".$year."'", [$id]);


            \DB::disconnect('sqlsrvtop'); 


            return \Response::json($queryTaxTotal);

               
           } catch (Exception $e) {

           
            return 0;
               
           }

    } 


    //selecttaxname
    public function selecttaxname(Request $request) 
   {
        
    $year = $request->year;
    $id = $request->consultantid;  
    $nametax = $request->Name;

           try {


            $conection = \DB::connection('sqlsrvtop');

            $queryTaxName= $conection
            ->select("select * from Get_TaxSummary(?) WHERE Period LIKE '%/".$year."' and Name='".$nametax."'  ", [$id]); 


            \DB::disconnect('sqlsrvtop'); 


            return \Response::json($queryTaxName);

           
               
           } catch (Exception $e) {

           
            return 0;
               
           }

    }


    //selecttotaltaxname
    public function selecttotaltaxname(Request $request) 
   {
        
    $year = $request->year;
    $id = $request->consultantid;  
    $nametax = $request->Name;

           try {


            $conection = \DB::connection('sqlsrvtop');

            $queryTotalTaxName= $conection
            ->select("select sum(Purchases) as TotalPurchases, sum(Commission_Amount) as TotalCommission_Amount, sum(Bonus_Deduction) as TotalBonus_Deduction,sum(Other) as TotalOther, sum(Adjusted_Gross) as TotalAdjusted_Gross, sum(Backup_Withholding) as TotalBackup_Withholding
   FROM Get_TaxSummary(?) WHERE Period LIKE '%/".$year."' and Name='".$nametax."'  ", [$id]);


            \DB::disconnect('sqlsrvtop'); 


            return \Response::json($queryTotalTaxName);

               
           } catch (Exception $e) {

           
            return 0;
               
           }

    } 


}
