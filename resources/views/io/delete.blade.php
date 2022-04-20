@extends('layouts.head')

@section('content')

<body>
</br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                  <div class="back"> <a href="/io" type="botton">Back</a></div>
<form action="/io/del" method='POST'>
{{csrf_field()}}
<div class=select1>
<div class="form-group">
      <label for="sel1">Select Id:</label>
      <select class="form-control" name="id">

@foreach($inv as $invs)

<option>  {{$invs->id}}</option>

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
      <th>Rank</th>
    </tr>
  </thead>
  <tbody>
    @foreach($inv as $invs)
    <tr>
      <td>{{$invs->id}}</td>
      <td>{{$invs->name}}</td>
      <td>{{$invs->gender}}</td>
      <td>{{$invs->age}}</td>
      <td>{{$invs->contact}}</td>
      <td>{{$invs->city}}</td>
      <td>{{$invs->rank}}</td>
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
