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
      <li><a href="/io">Investigation Officer's</a></li>
      <li><a href="/cases">Cases</a></li>
      <li class="active"><a href="/lockups">Lockup's</a></li>
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
     <a href="/lockups/store" class="btn btn-primary">Add a lockup</a>
     <a href="/lockups/delete" class="btn btn-primary">Delete a lockup</a>
     <a href="/lockups/update" class="btn btn-primary">Update a lockup</a>
   </div>
</div>
</br>


    <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Type</th>
        <th>Capacity</th>
        <th>Current Availability</th>
      </tr>
    </thead>
    <tbody>
      @foreach($lock as $locks)
      <tr>
        <td>{{$locks->id}}</td>
        <td>{{$locks->type}}</td>
        <td>{{$locks->capacity}}</td>
        <td>{{$locks->current_space}}</td>
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
