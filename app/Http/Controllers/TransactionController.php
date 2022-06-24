<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use Transactionbon\Transactionbon;
use App\Models\Customer;
use Barryvdh\DomPDF\Facade as PDF;
use App\Exports\TransactionExport;
use Maatwebsite\Excel\Facades\Excel;

class TransactionController extends Controller
{
    public function index()
    {
        $title = array('title' => 'Data Edit Merk');
        $data = Transaction::join('users', 'users.id', '=', 'transaction.customer_id')
              		->join('car', 'car.id', '=', 'transaction.car_id')
              		->get();

        return view('transaction.index', compact('data'), $title);
    }   
    
    public function destroy( $id)
 {
//fungsi eloquent untuk menghapus data
 Transaction::where('id', $id)->delete();
 return redirect()->route('transaction.index')
 -> with('success', 'Transaction Berhasil Dihapus');
 }

 public function report($id){
    // dd('tetsing');
    $title = array('title' => 'Data Transaksi');
    $data = Transaction::join('users', 'users.id', '=', 'transaction.customer_id')
                  ->join('car', 'car.id', '=', 'transaction.car_id')
                  ->get();

    $pdf = PDF::loadview('report_pdf', compact('data'), $title);
    return $pdf->stream();

}
}