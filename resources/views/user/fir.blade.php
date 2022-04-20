@extends('layouts.head1')


@section('content')
<body>
</br>
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-body">

<form class="form-horizontal" action="/cases" method='POST'>
  {{csrf_field()}}
    <div class="form-group"></br>
      <label class="control-label col-sm-2" >Petitioner's Name:</label>&nbsp;&nbsp;
      <div class="col-sm-10">
        &nbsp;&nbsp;<input type="text" class="form-control"  name="pname" value="{{$name}}" readonly="readonly">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Date of Incident:</label>
      <div class="col-sm-10">
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="date" class="form-control"  name="datein" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Time of Incident:</label>
      <div class="col-sm-10">
      &nbsp;&nbsp;&nbsp;&nbsp;  <input type="time" class="form-control"  name="timein" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Enter Accused Name:</label>
      <div class="col-sm-10">
      &nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" class="form-control"  name="aname" placeholder="Enter name">
      </div>
    </div>


    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" >Submit</button>
      </div>
    </div>

  </form>
</div>
             </div>
         </div>
     </div>
 </div>

</body>
@endsection
