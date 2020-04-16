@extends('layouts.app')

@section('content')
<div class="row" style="text-align:center">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>{{Auth::User()->name}}</h2> 
        </div>
    </div>
</div>
<div class="row" style="text-align:center">
@if($test>=1>-1 && $test>=1 < 8)
        <div>rendah</div>
    @else if($test>=1>7 & $test>=1 < 15)
        <div>Sedang</div>
    @else
        <div>Tinggi</div>
    @endif
</div>
@endsection