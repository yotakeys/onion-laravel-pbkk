<?php

namespace App\Http\Controllers;

class ContohController extends Controller
{
    public function url2parameter(int $as, string $df)
    {
        echo 'di dalam kelas contoh controller ' . PHP_EOL;
        echo 'parameter yang dikasih di url adalah :' . $as . ' dengan sub : ' . $df;
    }

    public function url1parameter($id)
    {
        echo 'parameter yang dikasih di url adalah :' . $id;
    }
}
