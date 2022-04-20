<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petitioner;
use App\Fir;
use App\Cases;

class UserController extends Controller
{

    public function index()
    {
      return view('user/petitioner');
    }
    public function fir(Request $request)
    {
      $name=$request->name;
      Petitioner::create(['name'=>$request->name,'gender'=>$request->gender,'age'=>$request->age,'contact'=>$request->con,'city'=>$request->city]);
      return view('user/fir',compact('name'));
    }
    public function cases(Request $request)
    {
      Fir::create(['pname'=>$request->pname,'date_in'=>$request->datein,'time_in'=>$request->timein,'aname'=>$request->aname]);
      $new=Fir::latest()->first();
      $new2=Cases::latest()->first();
    return view('user/cases',compact('new','new2'));
    }
    public function caseadd(Request $request,$id)
    {
      $new=Cases::latest()->first();
      $new2=$new->id+1;
      Cases::create(['name'=>"Case".$new2,'io_id'=>0,'fir_no'=>$id,'case_disc'=>$request->cd ]);

      return view('/home2');
    }
    public function viewstatus()
    {
      return view('user.select');
    }
    public function selected(Request $requests)
    {
      $new=Cases::find($requests->cid);
      return view('user.view',compact('new'));
    }
}
