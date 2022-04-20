@extends('layouts.head')

@section('content')
<body>
<nav class="navbar navbar-default">

  <div class="abc">
    <ul class="nav nav-pills nav-justified" role="tablist">
    <li><a href="/home">Home</a></li>
    <li class="active"><a href="/petitioners">Petitioner's</a></li>
    <li><a href="/firs">FIR's</a></li>
    <li><a href="/accused">Accused</a></li>
    <li><a href="/io">Investigation Officer's</a></li>
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
                     <a href="/petitioners/store" class="btn btn-primary">Add Petitioner</a>
                     <a href="/petitioners/delete" class="btn btn-primary">Delete Petitioner</a>
                     <a href="/petitioners/update" class="btn btn-primary">Update Petitoner</a>
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
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($pet as $pets)
                      <tr>
                        <td>{{$pets->id}}</td>
                        <td>{{$pets->name}}</td>
                        <td>{{$pets->gender}}</td>
                        <td>{{$pets->age}}</td>
                        <td>{{$pets->contact}}</td>
                        <td>{{$pets->city}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  Total number of Petitioners={{$count}}
                  </div>


                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
