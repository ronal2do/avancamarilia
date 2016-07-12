@extends('layouts.site')
@section('banner')

@endsection
@section('content')
<div class="Pagina">
	<div class="Amarelo ">
		<div class="container">
			<div class="col-md-8 col-md-offset-2">
				<h4 class="Padding-title">
			       	@yield('titulo')
			    </h4>
		    </div>
	    </div>
	</div>
	<div class="container">

	     <div class="col-md-8 col-md-offset-2 Padding">
	       @yield('texto')

	       <br><br>

	        <a style="color: #192854;" href="/menu">	<p><i class="fa fa-play fa-rotate-180"></i> Voltar </p></a>
	     </div>
	     
	      
	     
    </div>
</div><!-- final do página colocar o V -->
@endsection