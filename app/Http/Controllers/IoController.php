<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Investigationofficer;

class IoController extends Controller
{
  public function index()
  {
    $inv=Investigationofficer::all();
    return view('io.index',compact('inv'));
  }
  public function store()
  {
    return view('io.store');
  }
  public function add(Request $request)
  {
    Investigationofficer::create(['name'=>$request->name,'gender'=>$request->gender,'age'=>$request->age,'contact'=>$request->con,'city'=>$request->city,'rank'=>$request->rank]);
    return back();
  }
  public function delete()
  {
    $inv= Investigationofficer::all();
    return view('io.delete',compact('inv'));
  }
  public function del(Request $requests)
  {
    $inv= Investigationofficer::all();
     $new=Investigationofficer::where('id',$requests->id);
     $new->forceDelete();
     return back();

  }
  public function update()
  {
    $inv= Investigationofficer::all();
    return view('io.update',compact('inv'));
  }
  public function up(Request $requests)
  {
   $new=Investigationofficer::find($requests->id);
   return view('io.disp',compact('new'));
  }
  public function disp(Request $requests)
  {
    $inv=Investigationofficer::all();
    $new=Investigationofficer::where('id',$requests->id);
    $new->update(['name'=>$requests->name,'gender'=>$requests->gender,
    'age'=>$requests->age,'contact'=>$requests->con,'city'=>$requests->city,'rank'=>$requests->rank]);
    return view('io.update',compact('inv'));
  }
}
