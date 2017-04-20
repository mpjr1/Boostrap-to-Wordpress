<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>


<?php wp_footer(); ?>

<!--Sign Up Section-->
<section id="signup" data-type="background" data-speed="4">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
				<p><a href="" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
			</div><!-- end col -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- signup -->

<!--Footer Section-->
<footer>
	<div class="container">
		<div class="col-sm-3">
			<p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a></p>
		</div><!-- end col -->
		<div class="col-sm-6">
			<nav>
				<ul class="list-unstyled list-inline">
					<li><a href="">Home</a></li>
					<li><a href="">Blog</a></li>
					<li><a href="">Resources</a></li>
					<li><a href="">Contact</a></li>
					<li class="signup-link"><a href="">Sign up now</a></li>
				</ul>
			</nav>
		</div><!-- end col -->
		<div class="col-sm-3">
			<p class="pull-right">&copy; 2017 Mario Peña Jr</p>
		</div><!-- end col -->
	</div><!-- container -->
</footer>

<!--Modal Section-->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to Our Mailing List</h4>
            </div> <!--Modal Header-->
            
            <div class="modal-body">
                <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em> for free!</em></p>
                
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-name">Your First Name</label>
                        <input type="text" class="form-control" id="suscribe-name" placeholder="Your First Name">
                    </div> <!--Form Group-->
                    
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-email">and Your Email</label>
                        <input type="text" class="form-control" id="suscribe-email" placeholder="and Your Email">
                    </div> <!--Form Group-->
                    
                    <input type="submit" class="btn btn-danger" value="Subscribe">
                    <hr>
                    
                    <p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
                </form>
                
            </div> <!--Modal Body-->
            
        </div><!--Modal Content-->
    </div> <!--Modal Dialog-->
</div>

<!--Bootstrap Core JavaScript
Placed at the end of the document so the pages load faster-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.2.4.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
