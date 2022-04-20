@extends('layouts.head1')


@section('content')
<body>
</br>
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="back"><a href="/firs" type="botton">Back</a></div>
<form class="form-horizontal" action="/firs/add" method='POST'>
  {{csrf_field()}}
    <div class="form-group"></br>
      <label class="control-label col-sm-2" >Enter Petitioner's Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="pname" placeholder="Enter name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Date of Incident:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control"  name="datein" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Time of Incident:</label>
      <div class="col-sm-10">
        <input type="time" class="form-control"  name="timein" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Enter Accused Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="aname" placeholder="Enter name">
      </div>
    </div>


    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" onclick="myFunction()">Submit</button>
      </div>
    </div>
    <script>
      function myFunction() {
      alert("FIR Added!");
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
