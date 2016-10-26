<header id="header" role="banner">
    <div class="main-nav">
        <div class="container">
            <div class="header-top">
                <div class="pull-right social-icons">
                	@yield('link_social')     
                	  
                </div>
            </div>
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                    	 @yield('logo')
                        <img class="img-responsive" src="images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    	 @yield('menu')
                        <li class="scroll active"><a href="#home">Inicio</a></li>
                        <li class="scroll"><a href="#explore">Imprensa</a></li>
                        <li class="scroll"><a href="#event">Agenda</a></li>
                        <li class="scroll"><a href="#about">Sobre nós</a></li>
                        <li class="no-scroll"><a href="#sponsor">Apoiadores</a></li>                        
                        <li class="scroll"><a href="#contact">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--/#header-->