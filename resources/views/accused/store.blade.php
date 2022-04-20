@extends('layouts.head1')

@section('content')
<body>
</br>
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-body">

              <div class="back"><a href="/accused" type="botton">Back</a></div>
<form class="form-horizontal" action="/accused/add" method='POST'>
  {{csrf_field()}}
    <div class="form-group"><br>
      <label class="control-label col-sm-2" >Enter Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="name" placeholder="Enter name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Gender:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="gender" placeholder="Enter gender">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Age:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="age" placeholder="Enter age">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Contact:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="con" placeholder="Enter Phone number">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >City:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="city" placeholder="Enter City">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" onclick="myFunction()">Submit</button>
      </div>
    </div>
    <script>
      function myFunction() {
      alert("Accused Added!");
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
