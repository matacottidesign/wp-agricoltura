<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<!-- Link utili -->
<div class="bg-link-utili">
    <div class="container lista-link-utili">
      	<div class="py-8">
		  	<h2 class="mb-5">Link utili</h2>
			<div class="row row-link-utili">
				<div class="col-6 col-md-6">
				<ul>
					<li><a target="_blank" href="https://www.uci.it/">Uci</a></li>
					<li><a target="_blank" href="https://cafinforma.it/">Caf Uci</a></li>
					<li><a target="_blank" href="https://www.patronatoenac.it/">Patronato Enac</a></li>
					<li><a target="_blank" href="http://unapinforma.it/">Unap</a></li>
				</ul>
				</div>

				<div class="col-6 col-md-6">
				<ul>
					<li><a target="_blank" href="https://turismouci.it/">Unaat</a></li>
					<li><a target="_blank" href="http://formazione.anapia.it/">Anapia</a></li>
					<li><a target="_blank" href="https://www.politicheagricole.it/flex/cm/pages/ServeBLOB.php/L/IT/IDPagina/202">Mipaaf</a></li>
				</ul>
				</div>
			</div>
		</div>
    </div>
</div>

<footer>
	<div class="container">
		<div class="py-8">
			<div class="row">
				<div class="col-6 col-md-4">
					<h6>© <span id="current_year">...</span> agricoltura moderna</h6>
					<p class="credits">
					uci unione coltivatori italiani <br>
					via in lucina 10 - 00186 roma <br>
					p.iva 05630521002 <br><br>
					</p>
				</div>

				<div class="col-6 col-md-4">
					<h6>Menu</h6>
					<ul>
						<li><a href="#">Chi siamo</a></li>
						<li><a href="#">Uci</a></li>
						<li><a href="#">Contatti</a></li>
					</ul>
				</div>

				<div class="col-12 col-md-4">
					<ul>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Cookie Policy</a></li>
					</ul>
					<span>Made with <i class="fab fa-wordpress-simple"></i> and <i class="fas fa-heart"></i> by <a href="matacottidesign.it">Matacotti Design</a></span>
				</div>
			</div>
		</div>
	</div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>


  <script>
	  	let data = new Date();
		let Yy =  data.getFullYear();
		document.getElementById("current_year").innerHTML = Yy;
		console.log(Yy);

		//Rinomina widget Tag
		document.getElementById("tag_cloud-2").firstChild.innerHTML = "Temi"; 
  </script>

</body>

</html>

