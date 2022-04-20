@extends('layouts.head')

@section('content')

<body>
<br>
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">

                  <div class="panel-body">
<div class="back"> <a href="/firs" type="botton">Back</a></div>
<form action="/firs/up" method='POST'>
{{csrf_field()}}
<div class=select1>
<div class="form-group">
      <label for="sel1">Select Id:</label>
      <select class="form-control" name="id">
        @foreach($fir as $firs)

        <option> {{$firs->id}}</option>

        @endforeach

      </select>
</div>
</div>
<div class=button2>
<button type="submit" class="btn btn-warning">Update</button>
</div>
</form>


  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Petitioners Name</th>
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

</body>

@endsection
