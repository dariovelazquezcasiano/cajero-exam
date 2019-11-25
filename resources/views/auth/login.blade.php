@extends('layouts.app')

@section('titulo')
	Cajero | Login
@endsection

@section('styles')
	<link rel="stylesheet" type="text/css" href="css/login.css">
@endsection

@section('contenido')
	<div class="container-fluid bg">
		<br>
		<div class="row justify-content-center">
			<div class="col-12 col-sm-6 col-md-3">

				<form class="form-container " method="POST" action="{{ route('login') }}">
					{{ csrf_field() }}

					<div class="form-group">
					    <label for="email">Email</label>
					    <input class="form-control @error('email') error-login @enderror" 
					    type="email" 
					    name="email" 
					    value="{{ old('email') }}" 
					    placeholder="Usuario">
					    @error('email') <span>{{ $message }}</span>@enderror
					 </div>
					 <div class="form-group">
					 	<label for="password">Password</label>
					    <input class="form-control @error('password') error-login @enderror"
					    type="password"  
					    name="password"  
					    placeholder="Contraseña">
					    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
					 </div>
					 <button type="submit" class="btn btn-primary btn-block">Submit</button>
				</form>

			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection