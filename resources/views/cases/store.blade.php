@extends('layouts.head1')

@section('content')
<body>
</br>
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="back"><a href="/cases" type="botton">Back</a></div>
<form class="form-horizontal" action="/cases/add" method='POST'>
  {{csrf_field()}}
    <div class="form-group"></br>
      <label class="control-label col-sm-2" >Enter Case Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="name" placeholder="Enter name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Investigation Officer Id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="ioid" placeholder="Enter Id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Enter FIR number:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="firno" placeholder="Enter number">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Case Status:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="cs" placeholder="Enter Status">
      </div>
    </div>


    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" onclick="myFunction()">Submit</button>
      </div>
    </div>
    <script>
      function myFunction() {
      alert("Case Added!");
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
