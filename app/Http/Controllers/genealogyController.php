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

class genealogyController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



///////////////////////Cargar  datos a la Genealogia//////////////////////////////////
    public function reloadTab(Request $request){
        $idsponsor = $request->idsponsor;
        $period = $request->period;

        ini_set('memory_limit', '-1');
        $conection = \DB::connection('sqlsrvgenealogy');
            //$response = $conection->select("EXEC Sp_TreePerId_Watch ?, ?",array(14960100, 201909));
            $response = $conection->select('EXEC Sp_TreePerId ?,?', array($idsponsor, $period));
        \DB::disconnect('sqlsrvgenealogy');
        $data = [
            'data' => $response,
        ];
        return \Response::json($data);

    }


/////////////////////////save Filters//////////////////////////////////////////////
    public function saveFilters(Request $request){
               $ids= $request->ids;
               $Line= $request->Line;
               $Level= $request->Level;
               $associateid= $request->associateid;
               $associatename= $request->associatename;
               $Distributor_status= $request->Distributor_status;
               $email= $request->email;
               $mobile_number= $request->mobile_number;
               $alternative_number= $request->alternative_number;
               $country= $request->country;
               $PinRank= $request->PinRank;
               $PayRank= $request->PayRank;
               $InactiveMonths= $request->InactiveMonths;
               $RenewalDate= $request->RenewalDate;
               $period1= $request->period1;
               $period2= $request->period2;
               $period3= $request->period3;


               $conection = \DB::connection('sqlsrvgenealogy');

                    $valida = $conection->select("SELECT [Owner_Genealogy] FROM [NA_MyNIKKEN].[dbo].[Config_Genealogy] WHERE [Owner_Genealogy] = ".$ids);
                    print_r($valida);
               
               if ($valida) {
                    $update = $conection->table('Config_Genealogy')
                        ->where('Owner_Genealogy', $ids)
                            ->update(
                                 ['Line_Number' => $Line,
                                 'Levels' => $Level,
                                 'consultant_id' => $associateid,
                                 'email_address' => $email,
                                 'mobile_phone' => $mobile_number,
                                 'alternative_phone' => $alternative_number,
                                 'country' => $country,
                                 'pay_rank' => $PayRank,
                                 'distributor_status' => $Distributor_status,
                                 'inactive_months' => $InactiveMonths,
                                 'renewal_date' => $RenewalDate,
                                 'period_1' => $period1,
                                 'period_2' => $period2,
                                 'period_3' => $period3]
                            );
                    if ($update) {
                        echo "Exito al modificar los datos";
                    }else{
                        echo "Fallo la carga del update";
                    }
               }else
               {
                    $insert = $conection->table('Config_Genealogy')->insert([
                         'Owner_Genealogy' => $ids,
                         'Line_Number' => $Line,
                         'Levels' => $Level,
                         'consultant_id' => $associateid,
                         'email_address' => $email,
                         'mobile_phone' => $mobile_number,
                         'alternative_phone' => $alternative_number,
                         'country' => $country,
                         'pay_rank' => $PayRank,
                         'distributor_status' => $Distributor_status,
                         'inactive_months' => $InactiveMonths,
                         'renewal_date' => $RenewalDate,
                         'period_1' => $period1,
                         'period_2' => $period2,
                         'period_3' => $period3
                    ]);
                    if ($insert) {
                        echo "Exito al guardar los datos";
                    }else{
                        echo "Fallo la carga del insert";
                    }
               }

               \DB::disconnect('sqlsrvgenealogy');
    }
////////////////////////////filtros dela genealogia/////////////////////////////////////////7

    public function loadFilters(Request $request){
        $sponsorid = $request->sponsorid;
        $conection = \DB::connection('sqlsrvgenealogy');
        $response = $conection->select("SELECT * FROM Config_Genealogy WHERE Owner_Genealogy = ?", array($sponsorid));
        \DB::disconnect('sqlsrvgenealogy');
        return \Response::json($response);
    }

///////////////////////////exportamos a excel el  sp de la genealogia//////////////////////////
    public function ExportGenealogy(Request $request, $abi){

        $ids = $abi;
        $period='201909';

        $conection = \DB::connection('sqlsrvgenealogy');

        //$fileName = 'test';
        $response = $conection->select('EXEC Sp_TreePerId ?,?', array($ids, $period));
        
        ini_set('memory_limit', '-1');

        \DB::disconnect('sqlsrvgenealogy');

        //Exportamos consulta en formato xls
      //  \Excel::create('Genealogy User: '.$ids, function($excel) use ($response){
            \Excel::create('Genealogy User: '.$ids, function($excel) use ($response){

            
                $excel->sheet('Genealogy', function($sheet) use ($response){

                
                // === Definimos estilos base ===
                $sheet->setBorder('A1:H1', 'thin'); //Colocamos borde a los encabezados
                $sheet->setHeight(7, 25); //Especificamos el tamaño de los encabezados
                //$sheet->mergeCells('B3:E3'); //Combinamos las columnas del título de la hoja
               

                // Especificamos los encabezados del documento
                $sheet->cell('A1', function($cell){
                    $cell->setValue('Line');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });


                $sheet->cell('B1', function($cell){
                    $cell->setValue('Level');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });

                $sheet->cell('C1', function($cell){
                    $cell->setValue('associateid');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });

                $sheet->cell('D1', function($cell){
                    $cell->setValue('associatename');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });



                $sheet->cell('E1', function($cell){
                    $cell->setValue('Distributor_status');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });

                 $sheet->cell('F1', function($cell){
                    $cell->setValue('email');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });

                $sheet->cell('G1', function($cell){
                    $cell->setValue('mobile_number');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });

                $sheet->cell('H1', function($cell){
                    $cell->setValue('alternative_number');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });

                 $sheet->cell('I1', function($cell){
                    $cell->setValue('country');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });
                // Mostramos los registros
                foreach ($response as $idx => $item)
                {
                    $idx = ($idx  + 2); // Indica la posición de la fila en el documento

                    // === Iniciamos asignación de celdas ===

                    // Asignamos el NOMBRE
                    $sheet->cell('A'.$idx, function($cell) use ($item) {
                      $cell->setValue($item->Line);
                    });

                    // Asignamos EL TIPO
                    $sheet->cell('B'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->Level);
                       
                    });

                    // Asignamos el status
                    $sheet->cell('C'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->associateid);
                    });

                     // Asignamos el status
                    $sheet->cell('D'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->associatename);
                    });

                    // Asignamos el status
                    $sheet->cell('E'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->Distributor_status);
                    });

                     // Asignamos el status
                    $sheet->cell('F'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->email);
                    });


                    // Asignamos el status
                    $sheet->cell('G'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->mobile_number);
                    });


                    // Asignamos el status
                    $sheet->cell('H'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->alternative_number);
                    });

                     // Asignamos el status
                        $sheet->cell('I'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->country);
                    });
                }

            });

        })->export('csv');
    }



    

}

