@if(count($agendas))
<section id="event">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <div id="event-carousel" class="carousel slide" data-interval="false">
                    <h2 class="heading">Agenda</h2>
                    @yield('agenda_btn')                     
                    <div class="carousel-inner">
                    	@yield('agenda_content')                           
                    </div>
                </div>
            </div>
            <div class="guitar">
                <img class="img-responsive" src="images/guitar.png" alt="guitar">
            </div>
        </div>
    </div>
</section><!--/#event-->
@endif