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
      <li class="active"><a href="/cases">Cases</a></li>
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
     <a href="/cases/store" class="btn btn-primary">Add a Case</a>
     <a href="/cases/delete" class="btn btn-primary">Delete a Case</a>
     <a href="/cases/update" class="btn btn-primary">Update a Case</a>
   </div>
</div>
</br>


    <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Investigation Officer Name</th>
        <th>FIR number</th>
        <th>Case Status</th>
        <th>Case Description</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cas as $cass)
      <tr>
        <td><?php
        $id=$cass->id;
        $ioid=$cass->io_id;
        echo $id;
        ?></td>
        <td>{{$cass->name}}</td>
        <td><?php
              $iname=App\Investigationofficer::iname($cass->io_id);
              echo $iname;
              ?></td>
        <td><a href="/firs">{{$cass->fir_no}}</a></td>
        <td>{{$cass->case_status}}</td>
        <td><a href="/cases/description/{{$id}}">View</a></td>
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
