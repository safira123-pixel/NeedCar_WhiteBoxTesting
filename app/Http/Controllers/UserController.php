<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::get();
        $data = array('title' => 'User');
        $paginate = User::orderBy('id_user', 'asc')->paginate(3);
        return view('user.index', ['user' => $user,'paginate'=>$paginate], $data);
    }
 public function create()
 {
    $data = array('title' => 'User Form');
    return view('user.create', $data);
 }
 public function store(Request $request)
 {
    //melakukan validasi data
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required'
    ]);
    $user = new User;
    $user->name = $request->get('name');
    $user->email = $request->get('email');
    $user->phone = $request->get('phone');
    $user->address = $request->get('address');
    $user->save();

    return redirect()->route('user.index')
    ->with('success', 'user Berhasil Ditambahkan');
 }

 public function edit($name)
 {
    $data = array('title' => 'Edit User Form');
 $user = User::where('name', $name)->get();
 return view('user.edit', $data);
 }

 public function update(Request $request, $name)
 {
//melakukan validasi data
 $request->validate([
 'name' => 'required',
 'email' => 'required',
 'phone' => 'required',
 'address' => 'required'
 ]);

 $user = User::where('name', $name)->first();
    $user->name = $request->get('name');
    $user->email = $request->get('email');
    $user->phone = $request->get('phone');
    $user->address = $request->get('address');
    $user->save();

 return redirect()->route('user.index')
 ->with('success', 'user Berhasil Diupdate');
 }

 public function destroy( $name)
 {
 User::where('name', $name)->delete();
 return redirect()->route('user.index') -> with('success', 'Deleted User');
 }

}
