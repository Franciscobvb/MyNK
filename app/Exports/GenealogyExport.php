<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromQuery;

class GenealogyExport implements FromQuery
{	
	use exportable;
    /**
    * @return \Illuminate\Database\Query\Builder
    */
    public function query()
    {
        //
    }
}
