@extends('layouts.head')

@section('content')

<body>
  <nav class="navbar navbar-default">

    <div class="abc">
      <ul class="nav nav-pills nav-justified" role="tablist">
      <li><a href="/home">Home</a></li>
      <li><a href="/petitioners">Petitioner's</a></li>
      <li><a href="/firs">FIR's</a></li>
      <li><a href="/accused">Accused</a></li>
      <li class="active"><a href="/io">Investigation Officer's</a></li>
      <li><a href="/cases">Cases</a></li>
      <li><a href="/lockups">Lockup's</a></li>
    </ul>
  </div>
  </nav>
  <br>
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                

                  <div class="panel-body">
                  </br>
<div class="one">
  <div class="btn-group btn-group-justified">
     <a href="/io/store" class="btn btn-primary">Add Investigation Officer</a>
     <a href="/io/delete" class="btn btn-primary">Delete Investigation Officer</a>
     <a href="/io/update" class="btn btn-primary">Update Investigation Officer</a>
   </div>
</div>
</br>


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
