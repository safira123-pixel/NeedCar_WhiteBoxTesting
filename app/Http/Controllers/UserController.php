<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   public function index()
   {
   //fungsi eloquent menampilkan data menggunakan pagination
   $data = array('title' => 'User Data');
   $user = User::all(); // Mengambil semua isi tabel
   $paginate = User::orderBy('id', 'asc')->paginate(3);
   return view('user.index', ['user' => $user,'paginate'=>$paginate], $data);
   }
   
   public function create()
   {
   $data = array('title' => 'Data Create Customer');
   return view('user.create', $data);
   }
   
   public function store(Request $request)
   {
   //melakukan validasi data
   $request->validate([
   'name' => 'required',
   'email' => 'required',
   'phone' => 'required',
   'address' => 'required',
   'status' => 'required',
   ]);
   //fungsi eloquent untuk menambah data
   $user = new User;
       $user->name = $request->get('name');
       $user->email = $request->get('email');
       $user->phone = $request->get('phone');
       $user->address = $request->get('address');
       $user->save();
       //jika data berhasil ditambahkan, akan kembali ke halaman utama
   return redirect()->route('user.index')
   ->with('success', 'User Added');
   }
   
   public function show($id)
   {
   $data = array('title' => 'Data Show Customer');
   $User = User::where('id', $id)->first();
   return view('user.detail', compact('User'), $data);
   }
   
   public function edit($id)
   {
   $data = array('title' => 'Data Edit Customer');
   $User = DB::table('user')->where('id', $id)->first();
   return view('user.edit', compact('User'), $data);
   }
   
   public function update(Request $request, $id)
   {
   //melakukan validasi data
   $request->validate([
       'name' => 'required',
       'email' => 'required',
       'phone' => 'required',
       'address' => 'required',
   ]);
   //fungsi eloquent untuk mengupdate data inputan kita
   $user = User::where('id', $id)->first;
       $user->name = $request->get('name');
       $user->email = $request->get('email');
       $user->phone = $request->get('phone');
       $user->address = $request->get('address');
   
       $user->save();
   
   //jika data berhasil diupdate, akan kembali ke halaman utama
   return redirect()->route('user.index')
   ->with('success', 'User Updated!');
   }
   
   public function destroy( $id)
   {
   //fungsi eloquent untuk menghapus data
   User::where('id', $id)->delete();
   return redirect()->route('user.index')
   -> with('success', 'User Deleted!');
   }

}
