@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-3 col-lg-3">
			{!! Form::open(['route' => 'Usuarios.store' ,'method'=>'POST','files'=>true]) !!}
			<div class="form-group">
				{!!  Form::label('nombre','Nombre') !!}
				{!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre Completo']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('email','Email') !!}
				{!! Form::text('email',null,['class'=>'form-control','placeholder'=>'algo@example.com']) !!}
			<div class="form-group">
				{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
	
			</div>
			{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection
