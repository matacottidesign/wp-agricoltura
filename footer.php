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

<footer>
	<div class="container py-8">
		<div class="row">

		<div class="col-6 col-md-6">
			<h6>© 2020 agricoltura moderna</h6>
			<p class="credits">
			uci unione coltivatori italiani <br>
			via in lucina 10 - 00186 roma <br>
			p.iva 05630521002 <br><br>
			<span style="font-size: 10px;">Made with <i class="fab fa-wordpress-simple"></i> and <i class="fas fa-heart"></i> by <a href="matacottidesign.it">Matacotti Design</a></span>
			</p>
		</div>

		<div class="col-6 col-md-6">
			<ul>
			<li><a href="#">Articoli</a></li>
			<li><a href="#">Temi</a></li>
			<li><a href="#">Chi siamo</a></li>
			<li><a href="#">Uci</a></li>
			<li><a href="#">Contatti</a></li>
			</ul>
		</div>

		<!-- <div class="col-6 col-md-4 d-block">
			<p>Iscriviti alla newsletter</p>
			<button type="submit" class="btn btn-primary bordo-sm">Vai al form</button>
		</div> -->

		</div>
	</div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

  <!--Navbar Animation-->
  <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
    var currentScrollpos = window.pageYOffset;

      if (prevScrollpos > currentScrollpos) {
        //document.getElementsByTagName("nav")[0].style.backgroundColor = 'red';
      } 
      else {
        document.getElementById("indice").style.boxShadow = '0px .5rem 1rem rgba(0,0,0,.15)';
      }

      if(currentScrollpos === 0){
        document.getElementById("indice").style.boxShadow = '0px .5rem 1rem rgba(255,255,255,0)';
      }

      prevScrollpos = currentScrollpos;
    };
  </script>

</body>

</html>

