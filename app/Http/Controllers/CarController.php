<?php
namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Merk;
use Illuminate\Http\Request;
class CarController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/

public function index()
    {
        $data = array('title' => '');
        $car = Car::with('merk')->get();
        $paginate = Car::orderBy('id', 'asc')->paginate(3);
        return view('car.index', ['car' => $car,'paginate'=>$paginate], $data);
    }
 public function create()
 {
    $data = array('title' => 'Car Data');
    $merk =Merk::all(); // mendapatkan data dari tabel merk
    return view('car.create',['merk' => $merk], $data);
 }
 public function store(Request $request)
 {
    //melakukan validasi data
    $request->validate([
        'merk' => 'required',
        'code' => 'required',
        'name' => 'required',
        'desc' => 'required',
        'amount' => 'required',
        'price' => 'required',
        'status' => 'required'
    ]);
    $car = new Car;
    $car->code = $request->get('code');
    $car->name = $request->get('name');
    $car->desc = $request->get('desc');
    $car->amount = $request->get('amount');
    $car->price = $request->get('price');
    $car->status = $request->get('status');
    $car->save();

    $merk = new Merk;
    $merk->id = $request->get('merk');

    $car->merk()->associate($merk);
    $car->save();
    
    //jika data berhasil ditambahkan, akan kembali ke halaman utama
    return redirect()->route('car.index')
    ->with('success', 'Car Berhasil Ditambahkan');
 }
 
 public function edit($id)
 {
//menampilkan detail data dengan menemukan berdasarkan Nim Car untuk diedit
$data = array('title' => 'Car Data');
 $car = Car::with('merk')->where('id', $id)->first();
$merk = Merk::all();
 return view('car.edit', compact('car', 'merk'), $data);
 }
 public function update(Request $request, $id)
 {
//melakukan validasi data
 $request->validate([
 'merk' => 'required',
 'code' => 'required',
 'name' => 'required',
 'desc' => 'required',
 'amount' => 'required',
 'price' => 'required',
 'status' => 'required'
 ]);

 $car = Car::with('merk')->where('id', $id)->first();
    $car->code = $request->get('code');
    $car->name = $request->get('name');
    $car->desc = $request->get('desc');
    $car->amount = $request->get('amount');
  $car->price = $request->get('price');
  $car->status = $request->get('status');
    $car->save();

    $merk = new Merk;
    $merk->id = $request->get('merk');

 $car->merk()->associate($merk);
 $car->save();
//jika data berhasil diupdate, akan kembali ke halaman utama
 return redirect()->route('car.index')
 ->with('success', 'Car Berhasil Diupdate');
 }
 public function destroy( $id)
 {
//fungsi eloquent untuk menghapus data
 Car::where('id', $id)->delete();
 return redirect()->route('car.index')
 -> with('success', 'Car Berhasil Dihapus');
 }
}; 