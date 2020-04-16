@extends('layouts.app')

@section('content')
<br>
		<div class="col-md-8 banner-sec">
            
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="images/Fight Virus.jpg" alt="First slide" style="max-width: 75%;margin-left:10%" >
      </div>
      
		<div class="login-sec">
		    <h2 class=" col-md-4 text-center" style="margin-left: 88%;" >Registrasi</h2>
		    <form class="login-form"  method="POST" action="{{ route('register') }}">
            @csrf
        <div class="form-group">
        <label for="name" class="col-md-4 col-form-label text-md-right"style="margin-left: 61%;">{{ __('Name') }}</label>
        <input id="name" type="text" class=" col-md-4 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="margin-left: 88%;">

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="form-group">
        <label for="email" class="col-md-4 col-form-label text-md-right" style="margin-left: 69%;">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="col-md-4 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="margin-left: 88%;">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="form-group">
        <label for="password" class="col-md-4 col-form-label text-md-right" style="margin-left: 64%;">{{ __('Password') }}</label>
        <input id="password" type="password" class="col-md-4 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="margin-left: 88%;">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="form-group">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="margin-left: 71%;">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="col-md-4 form-control" name="password_confirmation" required autocomplete="new-password" style="margin-left: 88%;">
        </div>
        </div>
        <div class="form-check">
            <label class="form-check-label" for="remember" style="margin-left: 90%;">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <small>Remember Me</small>
            </label>
            <button type="submit" class="col-md-4 btn btn-primary" style="margin-left: 88%;">
                                            {{ __('Register') }}</button>
        </div>
        
</form>

		</div>
   
  </div>
 
  
  
      <div class="carousel-caption d-none d-md-block">
    </div>
    <div class="container">
	<div class="row">
  </div>
	
  
    
    
    	
               
		    
		</div>
	</div>
</div>
</br>
@endsection