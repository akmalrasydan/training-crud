<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use File;
use Storage;

class CarController extends Controller
{
    public function index(Request $request)
    {
        if($request->keyword)// sekiranya ada search
        {
            //$user = auth()->user(); 
            //$cars = Car::all();
            //--------contoh query searching kalau nak search 1 column------------
            $cars =cars()->where('model','LIKE','%'.$request->keyword.'%')->paginate(5);

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
            //$user = auth()->user(); 
            //$cars =cars()->paginate(5);
            $cars = Car::all();
        }




        //$cars = Car::all();
        //return view('cars.index');
        return view('cars.index', compact('cars'));
    }
    public function create()
    {
        //show create form
        return view('cars.create'); //pergi ke resources/view/schadule/create.blade.php
    }
    public function store(Request $request)// Insert create form
    {
        //dd($request ->all());
        //store all input to table
        $car = new Car();
        $car->model = $request->model;
        $car->plate_number = $request->plate_number;
        $car->user_id = auth()->user()->id;
        $car->save();

        if($request->hasFile('attachment')){
            //rename format file - DI-Tarikh.format file
            $filename = $car->id.'-'.date("Y-m-d").'.'.$request->attachment->getClientOriginalExtension();

            //store attachment on storage
            Storage::disk('public')->put($filename, File::get($request->attachment));

            //upload file
            $car->attachment=$filename;
            $car->save();


        }
       
        return redirect()->route('car:index')->with([
            'alert-type' => 'alert-primary',
            'alert' => 'Berjaya Simpan maklumat Kereta'
        ]);

        //reture to index

    }
    public function show(Car $car)//view create form
    {
        return view('cars.show', compact('car')); 
    }

    public function edit(Car $car)//edit create form
    {
        
        return view('cars.edit', compact('car')); 

    }
    public function update(Car $car, Request $request)//update create form
    {
        
        $car->model = $request->model;
        $car->plate_number = $request->plate_number;
        $car->save();

        return redirect()->route('car:index')->with([
            'alert-type' => 'alert-success',
            'alert' => 'Berjaya Update maklumat Kereta'
        ]);
    }
    
    public function delete(Car $car)//delete create form
    {
        $car->delete();

        return redirect()->route('car:index')->with([
            'alert-type' => 'alert-danger',
            'alert' => 'Berjaya Delete Maklumat Kereta'
        ]);

    }
}
