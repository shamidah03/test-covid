

@extends('layouts.app')

@section('content')
<br>
		<div class="col-md-8 banner-sec">
            
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="images/Fight Virus.jpg" alt="First slide" style="max-width: 75%;margin-left:10%;border-radius: 20px;" >
      </div>
      <img class="d-block img-fluid" src="images/h-removebg-preview.png" alt="First slide" style="max-width: 10%;margin-left:100%" >
		<div class="login-sec">
		    <h2 class=" col-md-4 text-center" style="margin-left: 89%;" >Login</h2>
		    <form class="login-form"  method="POST" action="{{ route('login') }}">
            @csrf




            
  <div class="form-group">
    <label for="exampleInputEmail1" class=" col-md-4 text-uppercase"  style="margin-left: 88%;">E-Mail Address</label>
    <input id="email" class="col-md-4 form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail Address"  style="margin-left: 90%;">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="form-group">
    <label for="exampleInputPassword1" class="col-md-4 text-uppercase" style="margin-left: 88%;">Password</label>
    <input id="password" class=" col-md-4 form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" autofocus placeholder="Password" style="margin-left: 90%;">
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
  <div class="form-check">
            <button type="submit" class="col-md-4 btn btn-primary" style="margin-left: 90%;">
                                            Login</button>
        </div>
        
  
</form>

		</div>
   
  </div>
		    
		</div>
	</div>
</div>
</br>
@endsection