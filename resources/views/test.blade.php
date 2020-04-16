@extends('layouts.app')

@section('content')
<br>
<div>

<div class="row" >
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="margin-left: 15%;">Hallo {{Auth::User()->name}}!</h2> 
        </div>
    </div>
</div>
<div class="row" >
@if($count >= 0 && $count< 8)
    
    <p style="margin-left: 10%;">Hasil tes Anda Resiko tertular rendah.</p>
    
@elseif($count > 7 && $count< 14)

    <p style="margin-left: 15%;">Hasil tes Anda Resiko tertular Sedang.</p>
    
@else

    <p style="margin-left: 15%;">Hasil tes Anda Resiko tertular Tinggi.</p>

    @endif
</div>
</div>
<div>
<img class="d-block img-fluid" src="images/3682911__2_-removebg-preview.png" alt="First slide" style="max-width: 75%;margin-left:% " >
</div>
</br>
@endsection
