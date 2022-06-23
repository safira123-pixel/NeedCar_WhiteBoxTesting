<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Merk;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index()
    {
        $data = array('title' => '');
        $car = Car::with('merk')->get(1);
        $paginate = Car::orderBy('id', 'asc')->paginate(3);
        return view('data.index', ['car' => $car,'paginate'=>$paginate], $data);
    }
}
