
@extends('layouts.head1')

@section('content')
<body>
</br>
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="back"><a href="/lockups" type="botton">Back</a></div>
<form class="form-horizontal" action="/lockups/add" method='POST'>
  {{csrf_field()}}
    <div class="form-group"></br>
      <label class="control-label col-sm-2" >Enter Lockup Type:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="type" placeholder="Enter type">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Enter Lockup Capacity:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="cap" placeholder="Enter Capacity">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Number of prisoners in the lockup:</label>
      <div class="col-sm-10"><br><br>
        <input type="text" class="form-control"  name="cs" placeholder="Enter number">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" onclick="myFunction()">Submit</button>
      </div>
    </div>
    <script>
      function myFunction() {
      alert("Lockup Added!");
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
