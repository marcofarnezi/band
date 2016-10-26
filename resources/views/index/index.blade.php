@extends('templates.footer')
@extends('templates.contact')
@extends('templates.sponsor')
@extends('templates.about')
@extends('templates.agenda')
@extends('templates.imprensa')
@extends('templates.home')
@extends('templates.header')
@extends('templates.template')
@section('title')
    Rocka'n'voo
@stop

@section('link_social')
    @if(!empty($config['twitter']))
        <a href="{{ $config['twitter'] }}" target="_blank"><i class="fa fa-twitter"></i></a>
    @endif
    @if(!empty($config['facebook']))
        <a href="{{ $config['facebook'] }}" target="_blank"><i class="fa fa-facebook"></i></a>
    @endif
    @if(!empty($config['googleplus']))
        <a href="{{ $config['googleplus'] }}"><i class="fa fa-google-plus"></i></a>
    @endif
    @if(!empty($config['youtube']))
        <a href="{{ $config['youtube'] }}"><i class="fa fa-youtube"></i></a>              
    @endif
@stop

@section('logo')
    <img class="img-responsive" src="images/logo.png" alt="logo">
@stop

@section('menu_index')
    <li class="scroll active"><a href="#home">Inicio</a></li>
    <li class="scroll"><a href="#explore">Imprensa</a></li>
    <li class="scroll"><a href="#event">Agenda</a></li>
    <li class="scroll"><a href="#about">Sobre nós</a></li>
    <li class="no-scroll"><a href="#sponsor">Apoiadores</a></li>                        
    <li class="scroll"><a href="#contact">Contato</a></li>
@stop

@section('slide')    
    @foreach($slider as $key => $slide)
        <div class="item @if($key==0) {{ 'active' }} @endif">            
            <img class="img-responsive" src="images/slider/{{ $slide['img'] }}" alt="slider">
            @if(!empty($slide['text1']) && !empty($slide['text2'] && !empty($slide['url'])))
            <div class="carousel-caption">
                <h2>{{ $slide['text1'] }}</h2>
                <h4>{{ $slide['text2'] }}</h4>
                <a href="{{ $slide['url'] }}" target='{{ $slide['target'] }}'>{{ $slide['text_link'] }}<i class="fa fa-angle-right"></i></a>
            </div>      
            @endif
        </div>           
    @endforeach    
@stop

@section('slide_btn')    
    @foreach($slider as $key => $slide)
        <li data-target="#main-slider" data-slide-to="{{ $key }}" class="@if($key==0) {{ 'active' }} @endif""></li>        
    @endforeach    
@stop

@section('content')
    
@stop

@section('material_imprensa')    
    {!! $imprensa !!}
@stop
@if(count($agendas) > 0)
    @section('agenda_content')
        
            <div class="item active">
                <div class="row">
                    @foreach($agendas as $key_agenda => $agenda)  
                    
                        @if(($key_agenda)%3 == 0 && $key_agenda != 0)                    
                            </div>
                            </div>   
                            <div class="item ">
                            <div class="row">
                        @endif
                        <div class="col-sm-4">
                            <div class="single-event">
                                <img class="img-responsive" src="images/event/{{ $agenda['img'] }}" alt="event-image">
                                <h4>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $agenda['data'])->format('d/m/Y H:i') }}</h4>
                                <h5>{{ $agenda['valor'] }}</h5>
                            </div>
                        </div>
                    @endforeach            
                </div>
            </div>   
        
    @stop

    @section('agenda_btn')

        @if($key_agenda > 2)
            <a class="even-control-left" href="#event-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="even-control-right" href="#event-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
        @endif
    @stop
@endif
@section('about_content')
    {!! $about['text'] !!}
@stop
@section('about_more_link')
    @if(!empty($about['link']))
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Veja mais<i class="fa fa-angle-right"></i></button>        
    @endif
@stop
@section('about_more')    
    {!! $about['link'] !!}
@stop
@if(count($sponsors) > 0)
    @section('sponsor_content')
        <div class="item active">
            <ul>
            @foreach($sponsors as $key_sponsor => $sponsor)  
                @if(($key_sponsor)%6 == 0 && $key_sponsor != 0)                    
                    </ul>
                    </div>   
                    <div class="item">
                    <ul>
                @endif
                <li>
                    <a href="{{ $sponsor['url'] }}" target="_blank">
                        <img class="img-responsive" src="images/sponsor/{{ $sponsor['img'] }}" alt="">
                    </a>
                </li>
            @endforeach    

            </ul>
        </div>    
    @stop

    @section('sponsor_btn')
        @if($key_sponsor > 5)
            <a class="sponsor-control-left" href="#sponsor-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="sponsor-control-right" href="#sponsor-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a> 
        @endif
    @stop
@endif

@if(!empty($map['lat']) && !empty($map['lng']))
    @section('contact_map')
        <div id="map">
            <div id="gmap-wrap">
                <div id="gmap">
                </div>
            </div>
        </div>
    @stop
        @section('map_lat')
        {{ $map['lat'] }}
    @stop

    @section('map_lng')
        {{ $map['lng'] }}
    @stop
@endif

@section('contact_data')
    <div class="contact-text">
        <h3>Contatos</h3>
        
        <address>                        
            E-mail: {{ $contact['email'] }}<br>
            Telefone: {{ $contact['telefone'] }}<br>                            
        </address>
    </div>
    <div class="contact-address">
        <h3>Região</h3>
        <address>
            {{ $contact['cidade'] }}<br>
            {{ $contact['estado'] }}<br>                            
        </address>
    </div>
@stop

@section('contact_form')
    {!! Form::open(['route' => 'index.mail', 'method' => 'post']) !!}    
        <div class="form-group">
            <input type="text" name="name" class="form-control" required="required" placeholder="Nome">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" required="required" placeholder="Email">
        </div>
        <div class="form-group">
            <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Contrate a Rocka'n'voo"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary pull-right">Enviar</button>
        </div>
    {!! Form::close() !!}
@stop

@if(Session::has('msg_email'))    
    <script type="text/javascript">
        alert('{{ Session::get('msg_email') }} ');
    </script>
@endif
