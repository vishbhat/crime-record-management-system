@extends('layouts.head1')

@section('content')
<body>
</br></br>
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-body">
                  <div class="back"> <a href="/lockups/update" type="botton">Back</a></div>
<form class="form-horizontal" action="/lockups/disp" method='POST'>
  {{csrf_field()}}
  <div class="form-group"><br>
    <label class="control-label col-sm-2" >Lockup Id:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="id" value="{{$new->id}}" readonly="readonly" >
    </div>
  </div>
  <div class="form-group"></br>
    <label class="control-label col-sm-2" > Lockup Type:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="type" value="{{$new->type}}">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >Lockup Capacity:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="cap" value="{{$new->capacity}}">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >Current Availability:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="cs" value="{{$new->current_space}}">
    </div>
  </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" onclick="myFunction()">Submit</button>
      </div>
    </div>
    <script>
      function myFunction() {
      alert("Lockup Updated!");
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
