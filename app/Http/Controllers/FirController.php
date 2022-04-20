<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fir;

class FirController extends Controller
{
  public function index()
  {
    $fir=Fir::all();
    return view('firs.index',compact('fir'));
  }
  public function store()
  {
    return view('firs.store');
  }
  public function add(Request $request)
  {
    Fir::create(['pname'=>$request->pname,'date_in'=>$request->datein,'time_in'=>$request->timein,'aname'=>$request->aname]);
    return back();
  }
  public function delete()
  {
    $fir= Fir::all();
    return view('firs.delete',compact('fir'));
  }
  public function del(Request $requests)
  {
    $fir= Fir::all();
     $new=Fir::where('id',$requests->id);
     $new->forceDelete();
     return back();

  }
  public function update()
  {
    $fir= Fir::all();
    return view('firs.update',compact('fir'));
  }
  public function up(Request $requests)
  {
   $new=Fir::find($requests->id);
   return view('firs.disp',compact('new'));
  }
  public function disp(Request $requests)
  {
    $fir=Fir::all();
    $new=Fir::where('id',$requests->id);
    $new->update(['pname'=>$requests->pname,'date_in'=>$requests->date_in,'time_in'=>$requests->time_in,'aname'=>$requests->aname]);
    return view('firs.update',compact('fir'));
  }
}
