@extends('layouts.head')

@section('content')

<body>
<br>
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">

                  <div class="panel-body">
<div class="back"> <a href="/petitioners" type="botton">Back</a></div>
<form action="/petitioners/up" method='POST'>
{{csrf_field()}}
<div class=select1>
<div class="form-group">
      <label for="sel1">Select Id:</label>
      <select class="form-control" name="id">
        @foreach($pet as $pets)

        <option> {{$pets->id}}</option>

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
  </div>



             </div>
         </div>
     </div>
 </div>

</body>

@endsection
