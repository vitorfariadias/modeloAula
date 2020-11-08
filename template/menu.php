    <!-- Fixed navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
	    <div class="container">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                <span class="sr-only">Navegação</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	                <li <?php echo active($conteudo); ?> ><a href="index.php">Home</a></li>
	                <li <?php echo active($conteudo, 'orcamentos'); ?>> <a href="?pagina=orcamentos">Orçamentos</a></li>
	                <li <?php echo active($conteudo, 'criar'); ?>> <a href="?pagina=criar">Criar</a></li>
	                <li <?php echo active($conteudo, 'sobre'); ?>> <a href="?pagina=sobre">Sobre</a></li>
	            </ul>
	        </div><!--/.nav-collapse -->
	    </div>
	</nav>