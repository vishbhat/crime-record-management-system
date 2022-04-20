@extends('layouts.head')

@section('content')

<body>
</br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                  <div class="back"> <a href="/accused" type="botton">Back</a></div>
<form action="/accused/del" method='POST'>
{{csrf_field()}}
<div class=select1>
<div class="form-group">
      <label for="sel1">Select Id:</label>
      <select class="form-control" name="id">

@foreach($acc as $accs)

<option>  {{$accs->id}}</option>

@endforeach

</select>
</div>
</div>
<div class=button1>
<button type="submit" class="btn btn-danger" >Delete</button>
</div>

</form>



  <div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Gender</th>
      <th>Age</th>
      <th>Contact</th>
      <th>City</th>
    </tr>
  </thead>
  <tbody>
    @foreach($acc as $accs)
    <tr>
      <td>{{$accs->id}}</td>
      <td>{{$accs->name}}</td>
      <td>{{$accs->gender}}</td>
      <td>{{$accs->age}}</td>
      <td>{{$accs->contact}}</td>
      <td>{{$accs->city}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>

             </div>
           </div>
       </div>
   </div>
</div>




</body>

@endsection
