@extends('layouts.head1')

@section('content')
<body>
</br></br>
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-body">
                  <div class="back"> <a href="/firs/update" type="botton">Back</a></div>
<form class="form-horizontal" action="/firs/disp" method='POST'>
  {{csrf_field()}}
  <div class="form-group"><br>
    <label class="control-label col-sm-2" >FIR Id:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="id" value="{{$new->id}}" readonly="readonly" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >Petitioner's Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="pname" value="{{$new->pname}}" >
    </div>
  </div>
  <div class="form-group">
  <div class="form-group">
    <label class="control-label col-sm-2" >Date of Incident:</label>
    <div class="col-sm-10">
      <input type="date" class="form-control"  name="date_in" value="{{$new->date_in}}">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >Time of Incident:</label>
    <div class="col-sm-10">
      <input type="time" class="form-control"  name="time_in" value="{{$new->time_in}}" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >Accused Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="aname" value="{{$new->aname}}">
    </div>
  </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" onclick="myFunction()">Submit</button>
      </div>
    </div>
    <script>
      function myFunction() {
      alert("FIR Updated!");
      }
  </script>
  </form>
</div>
             </div>
         </div>
     </div>
 </div>

</body>
@endsection
