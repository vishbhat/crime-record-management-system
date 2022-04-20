@extends('layouts.head1')

@section('content')
<body>
</br></br>
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-body">
                  <div class="back"> <a href="/cases/update" type="botton">Back</a></div>
<form class="form-horizontal" action="/cases/disp" method='POST'>
  {{csrf_field()}}
  <div class="form-group"><br>
    <label class="control-label col-sm-2" >Case Id:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="id" value="{{$new->id}}" readonly="readonly" >
    </div>
  </div>
  <div class="form-group"></br>
    <label class="control-label col-sm-2" > Case Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="name" value="{{$new->name}}">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >IO Id:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="io_id" value="{{$new->io_id}}">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >FIR number:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="fir_no" value="{{$new->fir_no}}">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >Case Status:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="case_status" value="{{$new->case_status}}">
    </div>
  </div>


    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" onclick="myFunction()">Submit</button>
      </div>
    </div>
    <script>
      function myFunction() {
      alert("Case Updated!");
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
