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
	       <div class="v"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="45px" height="35px" viewBox="0 0 45 35" xml:space="preserve"><path style="fill:#F9D543;" d="M0,11.639h8.494l4.409,12.741L21.757,0h8.364L16.469,34.495H9.207L0,11.639z"/></svg></div>
	       <br><br>

	        <a style="color: #192854;" href="/menu">	<p><i class="fa fa-play fa-rotate-180"></i> Voltar </p></a>
	     </div>
	     
	      
	     
    </div>
</div><!-- final do página colocar o V -->
@endsection