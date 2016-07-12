@extends('layouts.site')
@section('banner')
<div class="container" >
    <div class="fundo">
     
    </div>
</div>
@endsection
@section('content')
<hr>
<div class="container">
    <div class="col-md-8 col-md-offset-2">
       <div class="panel panel-default">
            <div class="panel-heading Yellow">
                <a href="/sugestao">
                    <h4 class="panel-title"> 
                    <div class="enjoy-css"></div>
                    AVANÇA NO CUIDADO COM A CIDADE
                    </h4>
                </a> 
            </div>
        </div>
      @include('includes.form')
    </div>
</div><!-- container -->
    @endsection