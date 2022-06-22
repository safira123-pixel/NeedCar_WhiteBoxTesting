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
      $caritem = Car::orderBy('created_at', 'desc')->paginate(20);
      $data = array('title' => 'Car',
                  'caritem' => $caritem);
         return view('car.index', $data);
                
    }

   public function create()
   {
    $merkitem = Merk::orderBy('created_at', 'desc')->paginate(20);
       $caritem = Merk::orderBy('merk_name', 'asc')->get();
       $data = array('title' => 'Form Create Car',
                   'merkitem' => $merkitem);
       return view('car.create', $data);
   }

   public function store(Request $request)
    {
        $this->validate($request, [
            'merk_id' => 'required',
            'car_code' => 'required|unique:car',
            'car_name' => 'required',
            'car_slug' => 'required',
            'car_description' => 'required',
            'car_photo' => 'required',
            'car_amount' => 'required|numeric',
            'car_price' => 'required|numeric'
        ]);
        // $caritem = $request->user();//ambil data user yang login
        $slug = \Str::slug($request->car_slug);//buat slug dari input slug produk
        $inputan = $request->all();
        $inputan['car_slug'] = $slug;
        $inputan['user_id'] = $itemuser->id;
        $inputan['status'] = 'publish';
        $caritem = Car::create($inputan);
        return redirect()->route('car.index')->with('success', 'Data berhasil disimpan');
    }

public function edit($id)
   {
       $caritem = Car::findOrFail($id);
       $merkitem = Merk::orderBy('merk_name', 'asc')->get();
       $data = array('title' => 'Form Edit Car',
               'caritem' => $caritem,
               'merkitem' => $merkitem);
       return view('car.edit', $data);
   }

public function update(Request $request, $id)
    {
        $this->validate($request, [
            'car_name' => 'required',
            'car_slug' => 'required',
            'car_description' => 'required',
            'car_photo' => 'required',
            'car_amount' => 'required|numeric',
            'car_price' => 'required|numeric'
        ]);
        $caritem = Car::findOrFail($id);
        // kalo ga ada error page not found 404
        $slug = \Str::slug($request->car_slug);//slug kita gunakan nanti pas buka produk
        // kita validasi dulu, biar tidak ada slug yang sama
        $validasislug = Car::where('id', '!=', $id)//yang id-nya tidak sama dengan $id
                                ->where('car_slug', $slug)
                                ->first();
        if ($validasislug) {
            return back()->with('error', 'Slug sudah ada, coba yang lain');
        } else {
            $inputan = $request->all();
            $inputan['slug'] = $slug;
            $caritem->update($inputan);
            return redirect()->route('car.index')->with('success', 'Data berhasil diupdate');
        }
    }

   public function destroy($id)
   {
       $caritem = Car::findOrFail($id);//cari berdasarkan id = $id, 
       // kalo ga ada error page not found 404
       if ($caritem->delete()) {
           return back()->with('success', 'Data Deleted');
       } else {
           return back()->with('error', 'Data cannot been Deleted');
       }
   }
}; 