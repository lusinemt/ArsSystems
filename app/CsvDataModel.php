<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class CsvDataModel extends Model
{
    protected $table = 'CsvData';

    public function insertDB($aryData)
    {
        $query = DB::table($this->table)
            ->insert($aryData);
        if ($query)
            return 'success';
        else
            return 'error';

    }
}
