<?php

namespace App\Imports;

use App\Models\Sell;
use Maatwebsite\Excel\Concerns\ToModel;

class SellImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $valor = str_replace(".", "", $row[39]);
        $valor = str_replace(",", ".", $valor);

        return new Sell([
            'cliente' => $row[36],
            'uf' => $row[37],
            'valor' => $valor,
            'data_inicial' => date('Y-d-m', strtotime($row[6])),
            'data_final' => date('Y-d-m', strtotime($row[8])),
        ]);
    }
}
