<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lockup;

class LockupController extends Controller
{
  public function index()
  {
    $lock=Lockup::all();
    return view('lockups.index',compact('lock'));
  }
  public function store()
  {
    return view('lockups.store');
  }
  public function add(Request $request)
  {
    $cap=$request->cap-$request->cs;
    Lockup::create(['type'=>$request->type,'capacity'=>$request->cap,'current_space'=>$cap]);
    return back();
  }
  public function delete()
  {
    $lock= Lockup::all();
    return view('lockups.delete',compact('lock'));
  }
  public function del(Request $requests)
  {
    $lock= Lockup::all();
     $new=Lockup::where('id',$requests->id);
     $new->forceDelete();
     return back();

  }
  public function update()
  {
    $lock= Lockup::all();
    return view('lockups.update',compact('lock'));
  }
  public function up(Request $requests)
  {
   $new=Lockup::find($requests->id);
   return view('lockups.disp',compact('new'));
  }
  public function disp(Request $requests)
  {
    $lock=Lockup::all();
    $new=Lockup::where('id',$requests->id);
    $new->update(['type'=>$requests->type,
    'capacity'=>$requests->cap,'current_space'=>$requests->cs]);
    return view('lockups.update',compact('lock'));
  }
}
