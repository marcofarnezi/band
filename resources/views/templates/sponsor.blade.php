<section id="sponsor">
    <div id="sponsor-carousel" class="carousel slide" data-interval="false">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <h2>Apoiadores</h2>
                    @yield('sponsor_btn')                      
                    <div class="carousel-inner">
                        @yield('sponsor_content')                                                   
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="light">
            <img class="img-responsive" src="images/light.png" alt="">
        </div>--}}
    </div>
</section><!--/#sponsor-->

