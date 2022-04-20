@extends('layouts.head')

@section('content')

<body>
  <nav class="navbar navbar-default">

    <div class="abc">
      <ul class="nav nav-pills nav-justified" role="tablist">
      <li><a href="/home">Home</a></li>
      <li><a href="/petitioners">Petitioner's</a></li>
      <li class="active"><a href="/firs">FIR's</a></li>
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
     <a href="/firs/store" class="btn btn-primary">Add FIR</a>
     <a href="/firs/delete" class="btn btn-primary">Delete FIR</a>
     <a href="/firs/update" class="btn btn-primary">Update FIR</a>
   </div>
 </div>
</br>


    <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Petitioner Name</th>
        <th>Date and Time of Petition</th>
        <th>Date of Incidence</th>
        <th>Time of Incidence</th>
        <th>Accused Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach($fir as $firs)
      <tr>
        <td>{{$firs->id}}</td>
        <td>{{$firs->pname}}</td>
        <td>{{$firs->created_at}}</td>
        <td>{{$firs->date_in}}</td>
        <td>{{$firs->time_in}}</td>
        <td>{{$firs->aname}}</td>
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
