<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petitioner;

class PetitionerController extends Controller
{
    public function index()
    {
      $pet= Petitioner::all();
      $count=count($pet);
      return view('petitioners.index',compact('pet','count'));
    }
    public function store()
    {
      return view('petitioners.store');
    }
    public function add(Request $request)
    {
      Petitioner::create(['name'=>$request->name,'gender'=>$request->gender,'age'=>$request->age,'contact'=>$request->con,'city'=>$request->city]);
      return back();
    }
    public function delete()
    {
      $pet= Petitioner::all();
      return view('petitioners.delete',compact('pet'));
    }
    public function del(Request $requests)
    {
      $pet= Petitioner::all();
       $new=Petitioner::where('id',$requests->id);
       $new->forceDelete();
       return back();
    }
    public function update()
    {
      $pet= Petitioner::all();
      return view('petitioners.update',compact('pet'));
    }
    public function up(Request $requests)
    {
     $new=Petitioner::find($requests->id);
     return view('petitioners.disp',compact('new'));
    }
    public function disp(Request $requests)
    {
      $pet=Petitioner::all();
      $new=Petitioner::where('id',$requests->id);
      $new->update(['name'=>$requests->name,'gender'=>$requests->gender,'age'=>$requests->age,'contact'=>$requests->con,'city'=>$requests->city]);
      return view('petitioners.update',compact('pet'));
    }
}
