<?php get_header(); ?>

	<div id="main">
		<div class="ndest">
		<?php
			$sticky = get_option( 'sticky_posts' );
			rsort( $sticky );
			$sticky = array_slice( $sticky, 0, 1 );
			$query = new WP_Query( array( 'post__in' => $sticky, 'ignore_sticky_posts' => 1 ) );
		?>

			<h3 class="fbup">
				<?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php the_title(); ?>
			</h3>
			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
			<span><a href="<?php the_permalink(); ?>">+ Seguir Leyendo</a></span>
			<?php endwhile; wp_reset_postdata(); endif; ?>
		</div>
	</div>
</header>
<section id="biografia" class="num2">
	<div class="headcol">
		<h2 class="fbup"><i class="fa fa-user" aria-hidden="true"></i> Biografía</h2>
	</div>
	<div class="passo">
		<span class="mp firalight">Marcela</br><b>Passo</b></span>
		<div class="linevert"></div>
		<span>Diputada<b>Nacional</b></span>
	</div>
	<article class="clearfix">
		<div class="colbio">
			<p><b>Mi nombre es Marcela Fabiana Passo. Nací en Dolores Provincia de Buenos Aires el 27 de septiembre de 1976, actualmente me encuentro casada y con dos hijas.</b></p>
			<h3>ESTUDIOS</h3>
				<p>Cursé mis estudios primarios en la E.P Nº 26, ubicada en el Corazón Rural de Gral. Lavalle. Los estudios secundarios los realicé en el “Colegio Nacional General Belgrano” del Partido de General Lavalle, finalizando los mismos en el año 1994.</p>
				<p>Luego como muchos jóvenes del interior que tienen la oportunidad, decidí irme a estudiar a la Universidad Nacional de La Plata, recibiéndome de <b>Contadora Pública</b> en el año 2002.</p>
			<h3>LA POESÍA COMO CABLE A TIERRA</h3>
				<p>En mis atareados días, siempre trato de encontrar un lugar para escribir. En ella puedo describir sobre acontecimientos transcurridos a lo largo de la historia de nuestro país y momentos de mi vida cotidiana que hacen en ella un espacio de profunda reflexión.</p>
		</div>
		<div class="colbio">
			<h3>ACTIVIDAD PÚBLICA</h3>
				<p>Al terminar los estudios universitarios opté por regresar a General Lavalle para ejercer la profesión y participar en política, desempeñando el cargo de <b>Presidente del Consejo Escolar de Gral. Lavalle</b> desde el 2007 al 2010, como <b>Concejal</b> en el 2010, como <b>Jefe de Gabinete Municipal</b> en el 2011 y finalmente como <b>Intendente</b> desde 2011 al 2015, siendo así la <b>primer mujer</b> en ocupar dicho cargo.</p>
				<p>Actualmente desde el 2015 me encuentro cumpliendo la función de <b>Diputada Nacional de la Provincia de Buenos Aires por el espacio del Frente Renovador.</b></p>
				<p>También participo activamente como <b>Presidente en la Comisión de Defensa al Consumidor</b> e integro las Comisiones de: <b>Cultura, Agricultura y Ganadería e Intereses Marítimos, Fluviales, Pesqueros y Portuarios.</b></p>
		</div>
	</article>
</section>

<section id="gestion" class="num3">
	<div class="headcol">
		<h2 class="fbup"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Gestión</h2>
	</div>
	<div class="ineedflex">
		<div class="gestion-container">
			<div class="colg">
				<ul>
					<li class="gestion-1">
						<time datetime="2007">2007-2010</time>
						<h3><b>Presidente del Consejo Escolar</b> de General Lavalle</h3>
						<p>Fueron 3 años muy intensos, desempeñando dicha función con la mayor de las responsabilidades y compromiso, articulando el control de los centros escolares de la ciudad.</p>
					</li>
					<li class="gestion-2">
						<time datetime="2010">2010</time>
						<h3><b>Concejal</b> en General Lavalle</h3>
						<p>Un paso importante en mi carrera política, donde convertí con voto y voz, el control del poder ejecutivo, como también emanar ordenanzas innovadoras para el crecimiento exponencial de todo General Lavalle.</p>
					</li>
					<li class="gestion-3">
						<time datetime="2007">2010-2011</time>
						<h3><b>Jefe de Gabinete</b> Municipalidad de General Lavalle</h3>
						<p>Dirigir, administrar y prevalecer el orden municipal, fueron los tres ejes principales que me hicieron llevar a General Lavalle como unas de las ciudades mas ordenadas financieramente de la Provincia de Buenos Aires.</p>
					</li>
				</ul>
			</div>
			<div class="colg">
				<ul>
					<li class="gestion-4">
						<time datetime="2011">2011-2015</time>
						<h3><b>Intendente</b><br>General Lavalle</h3>
						<p>Luego llego el momento de ponerse la camiseta y salir a luchar por mi ciudad. Recorrer cada barrio, cada rincon de Lavalle y llevar la soluciones al orden del dia fue mi principal objetivo. No fue una tarea sencilla, pero estaba rodeada de un equipo ampliamente comprometido, donde no solo la voz del vecino era nuestro pilar de lucha, sino hacer de Lavalle una ciudad icono de la costa bonaerense.</p>
					</li>
					<li class="gestion-5">
						<time datetime="2015">2015</time>
						<h3><b>Diputada Nacional</b><br>Provincia de Buenos Aires</h3>
						<p>El orgullo de poder desempeñar el cargo que soñé toda mi vida, es infinito. Llevaré a cabo mi labor legislativo de manera transparente, con la responsabilidad y el compromiso que merece el ejercicio de tal función. <br>Hay mucho por hacer en Argentina y eso mismo será mi eje de trabajo.</p>
					</li>
				<ul>
			</div>
		</div>
	</div>
</section>
<section id="contacto"  class="num7">
	<div class="headcol">
		<h2 class="fbup"><i class="fa fa-list-alt" aria-hidden="true"></i> Contacto</h2>
	</div>
	<div class="contacto-container">
		<div class="contacto-text clearfix">
			<span>contacto@marcelapasso<wbr>.com.ar</span>
			<div class="social-icons">
				<a href="https://www.facebook.com/passomarcela/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
				<a href="https://www.instagram.com/passomarcela/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="https://twitter.com/passomarcela"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
				<a href="https://www.youtube.com/channel/UCNxkPeVV5PUNZ3oo_Prz8uQ"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
			</div>
			<p>Enviame tus inquietudes, consultas o sugerencias</p>
			<form>
				<input type="text" name="nombre" placeholder="Tu nombre y apellido"><br>
				<input type="email" name="email" placeholder="Tu Email">
				<textarea name="mensaje" placeholder="¡Dejame tu mensaje!"></textarea>
				<button type="enviar" value="ENVIAR">ENVIAR</button>
			</form>
		</div>
		<div class="sumate">
				<h3>¡Sumate!</h3>
				<p>Dejame tus datos y recibí mis novedades en tu correo todos los meses.</p>
				<form>
					<input type="email" name="semail" placeholder="Tu Email">
					<input type="text" name="ciudad" placeholder="Tu Ciudad">
					<button type="enviar" value="SUBSCRIBIRME">SUBSCRIBIRME</button>
				</form>
		</div>
	</div>
</section>

<?php get_footer(); ?>
