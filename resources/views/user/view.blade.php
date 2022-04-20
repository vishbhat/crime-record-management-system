@extends('layouts.head')

@section('content')
<body>
</br>
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="back"><a href="/viewstatus" type="botton">Back</a></div>
                    <br>
                      <div class="panel-group">
                        <div class="panel panel-info">
                          <div class="panel-heading"><b>{{$new->name}}</b></div>
                          <div class="panel-body"><b>Case Status : </b>{{$new->case_status}}<br><br>
                          <b>  Investigation Officer    :    </b><?php
                                $iname=App\Investigationofficer::iname($new->io_id);
                                echo $iname;
                                ?><br><br>
                        <div>  <b>  Case Description    :    </b>{{$new->case_disc}}<br></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</body>
@endsection
