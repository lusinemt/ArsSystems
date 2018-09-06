<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CsvDataModel;

class CsvImportController extends Controller
{
    public function __construct()
    {
        $this->pathToCsv = storage_path('csvfiles/Sample.csv');
        $this->columns = ['Id', 'Description', 'Name','Amount', 'Price', 'Category'];

        $this->obj = new CsvDataModel();
    }

    public function index()
    {
        return view('showData');
    }

    public function csvToArray($filename = '')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, ',')) !== false)
            {
                    $combinedArry = array_combine($this->columns, $row);
                    $data[] = $combinedArry;
            }
            fclose($handle);
        }

        return $data;
    }
    public function ImportCsv()
    {
        $file = $this->pathToCsv;

        $customerArr = $this->csvToArray($file);

        CsvDataModel::truncate();
        $response = $this->obj->insertDB($customerArr);
        return $customerArr;


    }

}
