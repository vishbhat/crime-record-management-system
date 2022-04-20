@extends('layouts.head1')

@section('content')
<body>
</br>
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-body">

                    <?php
                      $id=$new->id;
                    ?>


<form class="form-horizontal" action="/caseadd/{{$id}}" method='POST'>
  {{csrf_field()}}

    <div class="form-group">
      <label class="control-label col-sm-2" >Case Description:</label>
      <div class="col-sm-10">
        &nbsp;&nbsp;&nbsp;&nbsp;<textarea name="cd" rows="10" cols="30" placeholder="Enter description"></textarea>

      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" onclick="myFunction()">Submit</button>
      </div>
    </div>

    <script>
      function myFunction() {
      alert("FIR Added! Your Case Number is: <?php  echo $new2->id+1   ?> ");
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
