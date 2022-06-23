<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $data = array('title' => '');
        $customer = Customer::with('user')->get();
        $paginate = Customer::orderBy('id', 'asc')->paginate(3);
        return view('user.index', ['customer' => $customer,'paginate'=>$paginate], $data);
    }
 public function create()
 {
    //
 }
 public function store(Request $request)
 {
   //
 }
 
 public function edit($id)
 {
    //
 }
 public function update(Request $request, $id)
 {
   //
 }
 public function destroy( $id)
 {
//fungsi eloquent untuk menghapus data
 Customer::where('id', $id)->delete();
 return redirect()->route('user.index')
 -> with('success', 'Successfully Deleted');
 }

}
