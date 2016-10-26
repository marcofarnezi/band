<section id="about">
    <div class="guitar2">
        <img class="img-responsive" src="images/guitar2.jpg" alt="guitar">
    </div>
    <div class="about-content">
        <h2>Sobre a banda</h2>
        @yield('about_content')                
        @yield('about_more_link')
    </div>
</section><!--/#about-->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" >
  <div class="modal-dialog" style="width: 750px;">

    <!-- Modal content-->
    <div style="background-image: url('images/transp.png')">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sobre nós</h4>
      </div>
      <div class="modal-body" style="padding: 100px;">
        @yield('about_more')                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>
</div>

