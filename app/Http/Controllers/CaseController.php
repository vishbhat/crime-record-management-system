<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cases;
use App\Investigationofficer;

class CaseController extends Controller
{
  public function index()
  {
    $cas=Cases::all();

    return view('cases.index',compact('cas'));
  }
  public function store()
  {
    return view('cases.store');
  }
  public function add(Request $request)
  {
    Cases::create(['name'=>$request->name,'io_id'=>$request->ioid,'fir_no'=>$request->firno,'case_status'=>$request->cs]);
    return back();
  }
  public function delete()
  {
    $cas= Cases::all();
    return view('cases.delete',compact('cas'));
  }
  public function del(Request $requests)
  {
    $cas= Cases::all();
     $new=Cases::where('id',$requests->id);
     $new->forceDelete();
     return back();
  }
  public function update()
  {
    $cas= Cases::all();
    return view('cases.update',compact('cas'));
  }
  public function up(Request $requests)
  {
   $new=Cases::find($requests->id);
   return view('cases.disp',compact('new'));
  }
  public function disp(Request $requests)
  {
    $cas=Cases::all();
    $new=Cases::where('id',$requests->id);
    $new->update(['name'=>$requests->name,'io_id'=>$requests->io_id,
    'fir_no'=>$requests->fir_no,'case_status'=>$requests->case_status]);
    return view('cases.update',compact('cas'));
  }
  public function desc($id)
  {
    $new=Cases::find($id);
    return view('cases.description',compact('new'));
  }
}
