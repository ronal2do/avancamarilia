@extends('layouts.site')
@section('banner')
@endsection
@section('content')
 <div class="Home">
     <div class="col-md-10 col-md-offset-1">
       <div class="container Menu">
       	<div class="Menu-item waves Flex">
       		<a href="/cidade">
             		<div class="Menu-texto">Avança no cuidado com a cidade</div>
                  </a>  
                  <a href="/cidade" class="Menu-btn">
                        <div class="Menu-btn"><i class="fa fa-play"></i></div>
       		</a>
		</div>
       	<div class="Menu-item waves Flex">
       		<a href="/pessoas">
             		<div class="Menu-texto">Avança na atenção com as pessoas</div>
                  </a> 
                  <a href="/pessoas" class="Menu-btn">
                        <div class="Menu-btn"><i class="fa fa-play"></i></div>
       		</a>
		</div>
       	<div class="Menu-item waves Flex">
       		<a href="/oportunidades">
             		<div class="Menu-texto">Avança na geração de oportunidades</div>
                  </a> 
                  <a href="/oportunidades" class="Menu-btn">
                        <div class="Menu-btn"><i class="fa fa-play"></i></div>
       		</a>
		</div>
       	<div class="Menu-item waves Flex">
       		<a href="/bem-estar">
             		<div class="Menu-texto">Avança na promoção do bem-estar</div>
                  </a> 
                  <a href="/bem-estar" class="Menu-btn">
                        <div class="Menu-btn"><i class="fa fa-play"></i></div>
       		</a>
		</div>
       	<div class="Menu-item waves Flex" >
       		<a href="/transparencia">
             		<div class="Menu-texto">Avança na eficiência<br> e na tranparência</div>
             	</a>
                  <a href="/transparencia" class="Menu-btn">
                        <div class="Menu-btn"><i class="fa fa-play"></i></div>
       		</a>
		</div>
       	<div class="Menu-item waves Flex">
       		<a href="/sugestao" class="Menu-texto">
             		<div class="Menu-texto">Sugestão <span style="visibility: hidden;">Sugestão Sugestão</span><br></div>
                  </a> 
                  <a href="/sugestao" class="Menu-btn">
                        <div>    <i class="fa fa-play"></i></div>
       		</a>
		</div>
       
       </div>
     </div>
</div><!-- container -->
@endsection