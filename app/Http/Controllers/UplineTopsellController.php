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

class UplineTopsellController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //////////////////Mandamos los datos a la tabla upliune/////////////////
     public function upline(Request $request,$ab){
             $id = $ab;
            try {

                ini_set('memory_limit', '-1');
                $period='201909';

                $conection = \DB::connection('sqlsrvgenealogy');

                $data=$conection->select('EXEC Sp_UplineView ?,?', array($id, $period));

                \DB::disconnect('sqlsrvgenealogy');

                return DataTables::of($data)->make(true);


               
                
            } catch (Exception $e) {

                echo($e->getMessage());
                
            }
        } 

        

////////////////////cargamos los datos a la tabla de top  sellin////////////////////
    public function top_sell(){
        $conection = \DB::connection('sqlsrvtop');
        $datas = $conection->table('TopSales_USA')->select('No', 'ItemCode', 'Description')->orderBy('No')->get();
        \DB::disconnect('sqlsrvtop');
        //Retornamos la vista con los datos iniciales de la tabla.
         return view('topSelling', ['datas'=>$datas]);   
    }   

}

