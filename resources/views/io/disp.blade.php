@extends('layouts.head1')

@section('content')
<body>
</br></br>
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-body">
                  <div class="back"> <a href="/io/update" type="botton">Back</a></div>
<form class="form-horizontal" action="/io/disp" method='POST'>
  {{csrf_field()}}
  <div class="form-group"><br>
    <label class="control-label col-sm-2" >IO Id:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="id" value="{{$new->id}}" readonly="readonly" >
    </div>
  </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Enter Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="name" value="{{$new->name}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Gender:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="gender" value="{{$new->gender}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Age:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="age" value="{{$new->age}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Contact:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="con" value="{{$new->contact}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >City:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="city" value="{{$new->city}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Rank:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="rank" value="{{$new->rank}}">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" onclick="myFunction()">Submit</button>
      </div>
    </div>
    <script>
      function myFunction() {
      alert("Investigation Officer Updated!");
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
