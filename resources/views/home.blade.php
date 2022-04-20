@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container1">
                      <ul class="nav nav-pills nav-stacked" role="tablist">
                        <li ><a href="/petitioners">Petitioner</a></li>
                        <li ><a href="/firs">FIR</a></li>
                        <li ><a href="/accused">Accused</a></li>
                        <li ><a href="/io">Investigation Officer</a></li>
                        <li ><a href="/cases">Cases</a></li>
                        <li ><a href="/lockups">Lockups</a></li>
                      </ul>
                    </div>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
