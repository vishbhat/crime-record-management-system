<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<h1>

  <div class="container">

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
        <td>{{$pets->age}}5</td>
        <td>{{$pets->contact}}</td>
        <td>{{$pets->city}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
