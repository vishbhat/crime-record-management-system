@extends('layouts.head1')

@section('content')
<body>
<br>
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-body">



                  <form class="form-horizontal" action="/placefir" method='POST'>
                    {{csrf_field()}}
                      <div class="form-group"><br>
                        <label class="control-label col-sm-2" >Enter Name:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="name" placeholder="Enter name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Gender:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="gender" placeholder="Enter gender">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Age:</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control"  name="age" placeholder="Enter age" id="age" min="1">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Contact:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="con" placeholder="Enter Phone number">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" >City:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="city" placeholder="Enter City">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <input type="submit" class="btn btn-success" onclick="myFunction()" value="Submit">
                        </div>
                      </div>
                      <script>
                        function myFunction() {
                          if(document.getElementById("age").value<0)
                          {
                            alert("Age is negative!");
                          }

                        }
                    </script>

                    </form>


                      </div>
                    </div>
                  </div>
                </div>
              </div>

</body>
@endsection
