<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accused;

class AccusedController extends Controller
{
  public function index()
  {
    $acc=Accused::all();
    return view('accused.index',compact('acc'));
  }
  public function store()
  {
    return view('accused.store');
  }
  public function add(Request $request)
  {
    Accused::create(['name'=>$request->name,'gender'=>$request->gender,'age'=>$request->age,'contact'=>$request->con,'city'=>$request->city]);
    return back();
  }
  public function delete()
  {
    $acc= Accused::all();
    return view('accused.delete',compact('acc'));
  }
  public function del(Request $requests)
  {
    $acc= Accused::all();
     $new=Accused::where('id',$requests->id);
     $new->forceDelete();
     return back();

  }
  public function update()
  {
    $acc= Accused::all();
    return view('accused.update',compact('acc'));
  }
  public function up(Request $requests)
  {
   $new=Accused::find($requests->id);
   return view('accused.disp',compact('new'));
  }
  public function disp(Request $requests)
  {
    $acc=Accused::all();
    $new=Accused::where('id',$requests->id);
    $new->update(['name'=>$requests->name,'gender'=>$requests->gender,'age'=>$requests->age,'contact'=>$requests->con,'city'=>$requests->city]);
    return view('accused.update',compact('acc'));
  }
}
