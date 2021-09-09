<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schadule;
use File;
use Storage;

class SchaduleController extends Controller
{
    public function index(Request $request)
    {
        if($request->keyword)// sekiranya ada search
        {
            $user = auth()->user(); 
            //--------contoh query searching kalau nak search 1 column------------
            $schadules = $user->schadules()->where('title','LIKE','%'.$request->keyword.'%')->paginate(10);

            //--------contoh query searching kalau nak search 2 column------------
            //$schadules = $user->schadules()
            //                          ->where('title','LIKE','%'.$request->keyword.'%')
            //                          ->orWhere('description','LIKE','%'.$request->keyword.'%')
            //                          ->paginate(5);
        }
        else// sekiranya tiada search
        {
            //link ke Models/User.php/function schadules() & schadule()
            //$schadules = Schadule::all(); // <-query untuk Display semua data

            //query untuk Display semua data berkaitan dengan user logmasuk sahaja
            $user = auth()->user(); 
            $schadules = $user->schadules()->paginate(10);
        }

        return view('schadules.index', compact('schadules'));//pergi ke resources/view/schadule/index.blade.php
    }
    public function create()
    {
        //show create form
        return view('schadules.create'); //pergi ke resources/view/schadule/create.blade.php
    }
    public function store(Request $request)// Insert create form
    {
        //dd($request ->all());
        //store all input to table
        $schadule = new Schadule();
        $schadule->title = $request->title;
        $schadule->description = $request->description;
        $schadule->user_id = auth()->user()->id;
        $schadule->save();

        if($request->hasFile('attachment')){
            //rename format file - DI-Tarikh.format file
            $filename = $schadule->id.'-'.date("Y-m-d").'.'.$request->attachment->getClientOriginalExtension();

            //store attachment on storage
            Storage::disk('public')->put($filename, File::get($request->attachment));

            //upload file
            $schadule->attachment=$filename;
            $schadule->save();


        }
       
        return redirect()->route('schadule:index')->with([
            'alert-type' => 'alert-primary',
            'alert' => 'Berjaya Simpan'
        ]);

        //reture to index

    }
    public function show(Schadule $schadule)//view create form
    {
        
        return view('schadules.show', compact('schadule')); 
    }

    public function edit(Schadule $schadule)//edit create form
    {
        
        return view('schadules.edit', compact('schadule')); 

    }
    public function update(Schadule $schadule, Request $request)//update create form
    {
        
        $schadule->title = $request->title;
        $schadule->description = $request->description;
        $schadule->save();

        return redirect()->route('schadule:index')->with([
            'alert-type' => 'alert-success',
            'alert' => 'Berjaya Update'
        ]);
    }

    public function delete(Schadule $schadule)//delete create form
    {

        if($schadule->attachment){ // delete attachment

            Storage::disk('public')->delete($schadule->attachment);

        }

        $schadule->delete();

        return redirect()->route('schadule:index')->with([
            'alert-type' => 'alert-danger',
            'alert' => 'Berjaya Delete'
        ]);

    }
}
