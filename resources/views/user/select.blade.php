@extends('layouts.head1')

@section('content')
<body>
</br>
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-body">
                      <div class="back"><a href="/home" type="botton">Back</a></div><br>

<form class="form-horizontal" action="/select" method='POST'>
  {{csrf_field()}}

    <div class="form-group">
      <label class="control-label col-sm-2" >Enter Case Number:</label><br>
      <div class="col-sm-10">
        <input type="text" name="cid"  placeholder="Enter number">

      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" >Submit</button>
      </div>
    </div>


  </form>
</div>
             </div>
         </div>
     </div>
 </div>
</body>
@endsection
