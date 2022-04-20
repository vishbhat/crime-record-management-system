@extends('layouts.head')

@section('content')

<body>
<br>
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">

                  <div class="panel-body">
<div class="back"> <a href="/lockups" type="botton">Back</a></div>
<form action="/lockups/up" method='POST'>
{{csrf_field()}}
<div class=select1>
<div class="form-group">
      <label for="sel1">Select Id:</label>
      <select class="form-control" name="id">
        @foreach($lock as $locks)

        <option> {{$locks->id}}</option>

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

</body>

@endsection
