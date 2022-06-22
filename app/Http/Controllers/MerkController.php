<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class MerkController extends Controller
{

    public function __construct()
    {
        $this->merk = new Merk();
    }

    public function index(Request $request)
    {
        $merk = Merk::get();
        $data = array('title' => 'Merk Home');
        $paginate = merk::orderBy('id', 'asc')->paginate(3);
        return view('merk.index', ['merk' => $merk,'paginate'=>$paginate], $data);
    }

    public function create()
    {        
        $data = array('title' => 'Merk Form');
        return view('merk.create', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'merk_code' => 'required|unique:merk',
            'merk_name'=>'required',
            'merk_slug' => 'required',
            'merk_description' => 'required',
            'merk_status' => 'required',
            'merk_photo' => 'required'
        ]);
        $merk = new Merk;
        $merk->merk_code = $request->get('merk_code');
        $merk->merk_name = $request->get('merk_name');
        $merk->merk_slug = $request->get('merk_slug');
        $merk->merk_description = $request->get('merk_description');
        $merk->merk_status = $request->get('merk_status');
        $merk->merk_photo = $image_name ;
        $merk->save();

        return redirect()->route('merk.index')
        ->with('success', 'Merk Added!');

    }

    public function edit($id)
    {
        $data = array('title' => 'Edit Form');
        $merk = Merk::where('merk_code', $merk_code)->get();
         return view('merk.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'merk_code'=>'required',
            'merk_name'=>'required',
            'merk_slug' => 'required',
            'merk_description' => 'required',
            'merk_status' => 'required',
            'merk_photo' => 'required'
        ]);
        $merk = Merk::where('id', $id)->first();
        $merk->merk_code = $request->get('merk_code');
        $merk->merk_name = $request->get('merk_name');
        $merk->merk_slug = $request->get('merk_slug');
        $merk->merk_description = $request->get('merk_description');
        $merk->merk_status = $request->get('merk_status');
    
        if($merk->merk_photo && file_exists(storage_path('./app/public/images'. $merk->merk_photo))){
          Storage::delete(['./public/images', $merk->merk_photo]); }
    
      $image_name = $request->file('merk_photo')->store('image', 'public');
      $merk->merk_photo = $image_name;
        $merk->save();
    }

    public function destroy($id)
    {
        Merk::where('merk_code', $merk_code)->delete();
 return redirect()->route('merk.index')
 -> with('success', 'merk Deleted');
    }

}
