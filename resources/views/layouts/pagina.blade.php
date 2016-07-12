@extends('layouts.site')
@section('banner')

@endsection
@section('content')
<div class="Pagina">
	<div class="container">
	     <div class="col-md-10 col-md-offset-1 Amarelo Padding-title">
	       	@yield('titulo')
	     </div>
	     <div class="col-md-10 col-md-offset-1 Padding">
	       @yield('texto')
	     </div>
	     <div class="col-md-10 col-md-offset-1 Amarelo-link" style="">
	       <a class="" href="/">	<p>< Voltar </p></a>
	     </div>
    </div>
</div><!-- final do página colocar o V -->
@endsection