@extends('layouts.head')

@section('content')

<body>
<br>
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">

                  <div class="panel-body">
<div class="back"> <a href="/cases" type="botton">Back</a></div>
<form action="/cases/up" method='POST'>
{{csrf_field()}}
<div class=select1>
<div class="form-group">
      <label for="sel1">Select Id:</label>
      <select class="form-control" name="id">
        @foreach($cas as $cass)

        <option> {{$cass->id}}</option>

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
        <th>Name</th>
        <th>Investigation Officer Id</th>
        <th>FIR number</th>
        <th>Case Status</th>

      </tr>
    </thead>
    <tbody>
      @foreach($cas as $cass)
      <tr>
        <td>{{$cass->id}}</td>
        <td>{{$cass->name}}</td>
        <td>{{$cass->io_id}}</td>
        <td>{{$cass->fir_no}}</td>
        <td>{{$cass->case_status}}</td>
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
