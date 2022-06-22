<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Car;
use App\Models\Customer;
use Barryvdh\DomPDF\Facade as PDF;
use App\Exports\TransactionExport;
use Maatwebsite\Excel\Facades\Excel;

class TransactionController extends Controller
{
    

}
