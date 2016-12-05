@extends('layouts.principal')

@section('content')
<div class="  ">
			
           
		</div>
		
			<div class="top-header">

				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>OCD</p>
				</div>
				<div class="search">
					<form>
						<input type="text" value="Buscar..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Buscar...';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>

     <div class="header">

    		 <div class="header-info">
    		
			    <h1>Cine en casa!!</h1>
			    <a class="video" href="#">Iniciar Sesión</a>
				<a class="book" href="#">Regístrate Aquí</a>
				<br><br>
				<div class="banner">	
				<h3>Sin llegadas tarde.</h3>
				<h2>Reserva una película ahora!!</h2>
				<br><h4>Simple, fácil y rápido.</h4></div>

				<p class="review reviewgo">Genero &nbsp; : &nbsp;&nbsp; Animación, Acción, Comedia, Drama, Terror y mas...</p>	
				<h1>Las mejores peliculas del momento.</h1> </div>

     </div>
                    
<div class="news"><div class="tipo">
<h2>Estrenos</h2>
							</div>

	<div class="review-slider">
			 <ul id="flexiselDemo1">
			<li><img src="images/r1.jpg" alt=""/></li>
			<li><img src="images/r2.jpg" alt=""/></li>
			<li><img src="images/r3.jpg" alt=""/></li>
			<li><img src="images/r4.jpg" alt=""/></li>
			<li><img src="images/r5.jpg" alt=""/></li>
			<li><img src="images/r6.jpg" alt=""/></li>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo1").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 4
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		</div>
                <div class="tipo">

				<h2>Disponibles para compra</h2>
							</div>

	<div class="review-slider">
			 <ul id="flexiselDemo2">
			<li><img src="images/m1.jpg" alt=""/></li>
			<li><img src="images/m2.jpg" alt=""/></li>
			<li><img src="images/m3.jpg" alt=""/></li>
			<li><img src="images/m4.jpg" alt=""/></li>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo2").flexisel({
				visibleItems: 6,
				animationSpeed: 1400,
				autoPlay: true,
				autoPlaySpeed: 3200,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 4
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		</div>
                </div>


@stop


