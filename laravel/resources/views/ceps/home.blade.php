@extends('layouts.master')

@section('content')

<h1>Consulta de Endereços por CEP</h1>
<p class="lead">Digite o CEP no campo abaixo para visualizar as informações de endereço sobre o CEP digitado</p>
<hr>

<div class="row">
	<div class="col-md-12 col-xs-12">
		{{ Form::open(array('url'=>'form-submit')) }}
  
  		{{ Form::close() }}
	</div>
</div>


@stop