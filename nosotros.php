<?php include "inc/inicio.php";?>
   
   <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Buscar">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item "><a href="index.php" class="nav-link">Inicio</a></li>
	        	<li class="nav-item active "><a href="nosotros.php" class="nav-link">Nosotros</a></li>
	        	<li class="nav-item "><a href="team.php" class="nav-link">Team</a></li>
	        	<li class="nav-item "><a href="casos_contables.php" class="nav-link">Casos Contables</a></li>
	        	<li class="nav-item "><a href="servicios.php" class="nav-link">Servicios</a></li>
	        	<!--<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>-->
	          <li class="nav-item"><a href="contactos.php" class="nav-link">Contactos</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav> 
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Nosotros</h1>
            <!--<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>-->
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-about ftco-no-pt ftco-no-pb ftco-counter" id="section-counter">
			<div class="container consult-wrap">
				<div class="row d-flex align-items-stretch">
					<div class="col-md-6 wrap-about align-items-stretch d-flex">
						<div class="img" style="background-image: url(images/about.jpg);"></div>
					</div>
					<div class="col-md-6 wrap-about ftco-animate py-md-5 pl-md-5">
						<div class="heading-section mb-4">
							<span class="subheading"></span>
							<h2>Lo más inteligente que podes hacer es unirte a Nosotros!</h2>
						</div>
						<p>Somos Una consultora con 15 Años en el mercado, trabajamos para ofrecerte la mejor calidad en servios Contables.</p>
						<div class="tabulation-2 mt-4">
							<ul class="nav nav-pills nav-fill d-md-flex d-block">
							  <li class="nav-item">
							    <a class="nav-link active py-2" data-toggle="tab" href="#home1"><span class="ion-ios-home mr-2"></span> Misión</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2" data-toggle="tab" href="#home2"><span class="ion-ios-person mr-2"></span> Visión</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link py-2" data-toggle="tab" href="#home3"><span class="ion-ios-mail mr-2"></span> Valores</a>
							  </li>
							</ul>
							<div class="tab-content bg-light rounded mt-2">
							  <div class="tab-pane container p-0 active" id="home1">
							  	<p>Proporcionar a nuestros clientes servicios profesionales de auditoría y consultoría de la más alta calidad, analizando y comprendiendo sus necesidades, evaluando sus fortalezas y debilidades y diseñando estrategias de servicio que contribuyan al logro de sus objetivos, brindándoles soluciones de valor concretas y acompañándolos en su crecimiento.</p>
							  </div>
							  <div class="tab-pane container p-0 fade" id="home2">
							  	<p>Ser reconocidos como líderes en asesoramiento de negocios a través de la prestación de servicios de alta calidad, con integridad profesional, soluciones concretas y eficientes y asistencia permanente a nuestros clientes. Ser vistos como una de las mejores firmas de contadores auditores y consultores del Paraguay.</p>
							  </div>
							  <div class="tab-pane container p-0 fade" id="home3">
							  	<ul>
							  	<li>Integridad y Objetividad.</li>
							  	<li>Compromiso con nuestros clientes.<br></li>
							    <li>Competencia profesional.<br></li>
							    <li>Respeto por nuestra gente.</li>	
							    <li>Nuestra gente es uno de los activos clave de nuestra Firma.</li>
								</ul>
							  </div>
							</div>
						</div>
    				<div class="row mt-5">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="500">0</strong>
		                <span>Clientes felices</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="490">0</strong>
		                <span>Informes de éxito</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="15">0</strong>
		                <span>Años De Trabajo</span>
		              </div>
		            </div>
		          </div>
	          </div>
					</div>
				</div>
			</div>
		</section>

   <?php include "inc/presupuesto.php";?>


    <?php include "inc/footer.php";?>