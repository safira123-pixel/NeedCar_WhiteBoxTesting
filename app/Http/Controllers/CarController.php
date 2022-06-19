<?php
namespace App\Http\Controllers;
use App\Models\Car;
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
        $car = Car::with('merk')->get();
        $paginate = Car::orderBy('id', 'asc')->paginate(3);
        return view('car.index', ['car' => $car,'paginate'=>$paginate]);
    }
 public function create()
 {
    $merk =Merk::all(); // mendapatkan data dari tabel merk
    return view('car.create',['merk' => $merk]);
 }
 public function store(Request $request)
 {
    //melakukan validasi data
    $request->validate([
        'name' => 'required',
        'liscense_number' => 'required',
        'merk' => 'required',
        'year' => 'required',
        'status' => 'required',
      'price' => 'required',
         'carfile' => 'required'
    ]);
    $car = new car;
    $car->name = $request->get('name');
    $car->liscense_number = $request->get('liscense_number');
    $car->year = $request->get('year');
    $car->photo_car = $image_name;
    $car->status = $request->get('status');
    $car->price = $request->get('price');
    $car->save();

    $merk = new Merk;
    $merk->id = $request->get('merk');

    $car->merk()->associate($merk);
    $car->save();
    
    //jika data berhasil ditambahkan, akan kembali ke halaman utama
    return redirect()->route('car.index')
    ->with('success', 'Car Sucessfully Added');
 }

 public function show($name)
 {
 $car = Car::with('Merk')->where('name', $name)->first();
 return view('car.detail', ['Car' => $car]);
 }
 public function edit($name)
 {
 $car = Car::with('merk')->where('name', $name)->first();
$merk = Merk::all();
 return view('car.edit', compact('car', 'merk'));
 }
 public function update(Request $request, $name)
 {
//melakukan validasi data
 $request->validate([
 'name' => 'required',
 'liscense_number' => 'required',
 'merk' => 'required',
 'year' => 'required',
 'status' => 'required',
 'price' => 'required',
 'carfile' => 'required'
 ]);

 $car = Car::with('merk')->where('name', $name)->first();
    $car->name = $request->get('name');
    $car->liscense_number = $request->get('liscense_number');
    $car->year = $request->get('year');

    if($car->photo_car && file_exists(storage_path('./app/public/'. $car->photo_car))){
      Storage::delete(['./public/', $car->photo_car]); }

  $image_name = $request->file('carfile')->store('image', 'public');
  $car->photo_car = $image_name;

  $car->status = $request->get('status');
  $car->price = $request->get('price');
    $car->save();

    $merk = new Merk;
    $merk->id = $request->get('merk');

 $car->merk()->associate($merk);
 $car->save();

 return redirect()->route('car.index')
 ->with('success', 'Success Update!');
 }
 public function destroy( $name)
 {
//fungsi eloquent untuk menghapus data
 Car::where('name', $name)->delete();
 return redirect()->route('car.index')
 -> with('success', 'Car Deleted');
 }

 public function search(Request $request){
    // Get the search value from the request
    $search = $request->input('search');
    //dd($search);
    // Search in the title and body columns from the posts table
    $paginate = Car::where('name', 'LIKE', "%{$search}%")
        ->orWhere('merk', 'LIKE', "%{$search}%")
        ->paginate();

    // Return the search view with the resluts compacted
    return view('car.search', compact('paginate'));
}
}; 