@extends('layouts.head')

@section('content')

<body>
</br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                  <div class="back"> <a href="/cases" type="botton">Back</a></div>
<form action="/cases/del" method='POST'>
{{csrf_field()}}
<div class=select1>
<div class="form-group">
      <label for="sel1">Select Id:</label>
      <select class="form-control" name="id">

@foreach($cas as $cass)

<option>  {{$cass->id}}</option>

@endforeach

</select>
</div>
</div>
<div class=button1>
<button type="submit" class="btn btn-danger" >Delete</button>
</div>
  <br>
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
      <td><a href="\io">{{$cass->io_id}}</a></td>
      <td><a href="\firs">{{$cass->fir_no}}</a></td>
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
   </div>
</div>



</body>

@endsection
