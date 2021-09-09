<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pulang;


class PulangController extends Controller
{
    public function index(Request $request)
    {
        //if($request->keyword)// sekiranya ada search
        //{
            //$user = auth()->user(); 
            //--------contoh query searching kalau nak search 1 column------------
            //$pulang = $user->pulangs()->where('nama_ipt','LIKE','%'.$request->keyword.'%')->paginate(10);

            //--------contoh query searching kalau nak search 2 column------------
            //$schadules = $user->schadules()
            //                          ->where('title','LIKE','%'.$request->keyword.'%')
            //                          ->orWhere('description','LIKE','%'.$request->keyword.'%')
            //                          ->paginate(5);
        //}
       // else// sekiranya tiada search
        //{
            //link ke Models/User.php/function schadules() & schadule()
            //$schadules = Schadule::all(); // <-query untuk Display semua data

            //query untuk Display semua data berkaitan dengan user logmasuk sahaja
            //$user = auth()->user(); 
            //$pulang = $user->pulangs()->paginate(10);
        //}
        $user = auth()->user(); 
        $pulangs = Pulang::all();

        return view('pulangs.index', compact('pulangs'));//pergi ke resources/view/schadule/index.blade.php
    }

    public function create()
    {
        //show create form
        return view('pulangs.create'); //pergi ke resources/view/schadule/create.blade.php
    }

    public function store(Request $request)// Insert create form
    {
        //dd($request ->all());
        //store all input to table
        $pulang = new Pulang();

        $pulang->alamat_semasa = $request->alamat_semasa;
        $pulang->poskod_semasa = $request->poskod_semasa;
        $pulang->daerah_semasa = $request->daerah_semasa;
        $pulang->negeri_semasa = $request->negeri_semasa;

        $pulang->nama_ipt = $request->nama_ipt;
        $pulang->alamat_destinasi = $request->alamat_destinasi;
        $pulang->poskod_destinasi = $request->poskod_destinasi;
        $pulang->daerah_destinasi = $request->daerah_destinasi;
        $pulang->negeri_destinasi = $request->negeri_destinasi;

        $pulang->alamat_kediaman = $request->alamat_kediaman;
        $pulang->poskod_kediaman = $request->poskod_kediaman;
        $pulang->daerah_kediaman = $request->daerah_kediaman;
        $pulang->negeri_kediaman = $request->negeri_kediaman;

        $pulang->status = 'Permohonan Baharu';

        $pulang->user_id = auth()->user()->id;
        $pulang->save();

       
        return redirect()->route('pulang:index')->with([
            'alert-type' => 'alert-primary',
            'alert' => 'Berjaya Simpan'
        ]);

        //reture to index

    }
    public function show(Pulang $pulang)//view create form
    {
        
        return view('pulangs.show', compact('pulang')); 
    }

    public function edit(Pulang $pulang)//edit create form
    {
        
        return view('pulangs.edit', compact('pulang')); 

    }
    public function update(Pulang $pulang, Request $request)//update create form
    {
        
        $pulang->alamat_semasa = $request->alamat_semasa;
        $pulang->poskod_semasa = $request->poskod_semasa;
        $pulang->daerah_semasa = $request->daerah_semasa;
        $pulang->negeri_semasa = $request->negeri_semasa;

        $pulang->nama_ipt = $request->nama_ipt;
        $pulang->alamat_destinasi = $request->alamat_destinasi;
        $pulang->poskod_destinasi = $request->poskod_destinasi;
        $pulang->daerah_destinasi = $request->daerah_destinasi;
        $pulang->negeri_destinasi = $request->negeri_destinasi;

        $pulang->alamat_kediaman = $request->alamat_kediaman;
        $pulang->poskod_kediaman = $request->poskod_kediaman;
        $pulang->daerah_kediaman = $request->daerah_kediaman;
        $pulang->negeri_kediaman = $request->negeri_kediaman;
        $pulang->save();

        return redirect()->route('pulang:index')->with([
            'alert-type' => 'alert-success',
            'alert' => 'Berjaya Update'
        ]);
    }

    public function delete(Pulang $pulang)
    {
        // delete $schedule from  db
        $pulang->delete();

        // return to schedule index
        return redirect()->route('pulang:index')->with([
            'alert-type' => 'alert-danger',
            'alert' => 'Your schedule has been deleted!'
        ]);
    }

    public function forceDelete(Schedule $schedule)
    {
        //$pulang->forceDelete();

        return redirect()->route('schedule:index')->with([
            'alert-type' => 'alert-danger',
            'alert' => 'Your schedule has been force deleted!'
        ]);
    }


}
