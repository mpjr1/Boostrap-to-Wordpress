<?php
/**
    Template Name: Home Page

 */
 
 
 // Custom Fields
$prelaunch_price       = get_post_meta(20, 'prelaunch_price', true );
$launch_price          = get_post_meta(20, 'launch_price', true );
$final_price           = get_post_meta(20, 'final_price', true );
$course_url            = get_post_meta(20, 'course_url', true);
$button_text           = get_post_meta(20, 'button_text', true);
$optin_text            = get_post_meta(20, 'optin_text', true);
$optin_button_text     = get_post_meta(20, 'optin_button_text', true);

//Advanced Custom Fields
$income_feature_image  = get_field('income_feature_image');
$income_section_title  = get_field('income_section_title');
$income_section_desc   = get_field('income_section_description');
$reason_1              = get_field('reason_1_title');
$reason_1_description  = get_field('reason_1_description');
$reason_2              = get_field('reason_2_title');
$reason_2_description  = get_field('reason_2_description');


$who_feature_image     = get_field('who_feature_image');
$who_section_title     = get_field('who_section_title');
$who_section_body      = get_field('who_section_body');

$features_section_image= get_field('features_section_images');
$features_section_title= get_field('features_section_title');
$features_section_body = get_field('features_section_body');

$project_feature_title = get_field('project_feature_title');
$project_feature_body  = get_field('project_feature_body');

$instructor_section_title = get_field('instructor_section_title');
$instructor_name       = get_field('instructor_name');
$bio_excerpt           = get_field('bio_excerpt');
$full_bio              = get_field('full_bio');
$twitter_username      = get_field('twitter_username');
$facebook_username     = get_field('facebook_username');
$google_plus_username  = get_field('google_plus_username');
$num_students          = get_field('num_students');
$num_reviews           = get_field('num_reviews');
$num_courses           = get_field('num_courses');

get_header(); ?>

<!--Hero Section-->
        <section id="hero" data-type="background" data-speed="5">
            <article>
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
                        </div> <!--Column-->
                            
                        <div class="col-sm-7 hero-text">
                            <h1><?php bloginfo('name'); ?></h1>
                            <p class="lead"><?php bloginfo('description'); ?></p>
                            <div id="price-timeline">
                                <div class="price active">
                                    <h4>Pre-Launch Price <small>Ends Soon!</small></h4>
                                    <span><?php echo $prelaunch_price; ?></span>
                                </div> <!--Price-->
                                <div class="price">
                                    <h4>Launch Price <small>Coming Soon!</small></h4>
                                    <span><?php echo $launch_price; ?></span>
                                </div> <!--Price-->
                                <div class="price">
                                    <h4>Final Price <small>Coming Soon!</small></h4>
                                    <span><?php echo $final_price; ?></span>
                                </div> <!--Price-->
                            </div><!--Price Timeline-->
                            <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $button_text; ?></a></p>
                        </div> <!--Column-->
                    </div> <!--Row-->
                </div> <!--Container-->
            </article>
            
            
        </section> <!-- Hero Section-->

        
        <!--Opt In Section-->
        <section id="optin">
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-8">
                        <p class="lead"><?php echo $optin_text; ?></p>
                    </div> <!--Col 8-->
                    
                    <div class="col-sm-4">
                        <button class="btn btn-success btn-lg btn-block"  data-toggle="modal" data-target="#myModal">
                            <?php echo $optin_button_text; ?>
                        </button>
                    </div> <!--Col 4-->
                    
                    
                </div>
            </div> <!--Container-->
        </section>
        
        <!--Boost Your Income Section-->
        <section id="boost-income">
            <div class="container">
                <div class="section-header">
                    
                    <!-- If user uploaded an image-->
                    <?php if( !empty($income_feature_image) ) :  ?>
                   
                    <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
                    
                    <?php endif; ?>
                    
                    
                    <h2><?php echo $income_section_title; ?></h2>
                </div> <!--Section Header-->
                <p class="lead"><?php echo $income_section_desc; ?></p>
                <div class="row">
                    <div class="col-sm-6">
                        <h3><?php echo $reason_1; ?></h3>
                        <p><?php echo $reason_1_description; ?></p>
                    </div><!--Column-->
                    <div class="col-sm-6">
                        <h3><?php echo $reason_2; ?></h3>
                        <p><?php echo $reason_2_description; ?></p>
                    </div><!--Column-->
                </div> <!--Row-->
                
            </div>
            
            
            
        </section>
        
        <!--Who Benefits Section-->
        <section id="who-benefits">
            <div class="container">
                <div class="section-header">
                
                <!-- If user uploaded an image-->
                    <?php if( !empty($who_feature_image) ) :  ?>
                   
                    <img src="<?php echo $who_feature_image['url']; ?>" alt="<?php echo $who_feature_image['alt']; ?>">
                    
                    <?php endif; ?>
                
                    <h2><?php echo $who_section_title; ?></h2>
                </div> <!--Section Header-->
                
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                       
                       <?php echo $who_section_body; ?>
                       
                    </div><!--Column-->
                </div><!--Row-->
            </div><!--Container-->
        </section> <!--Who Benefits-->
        
        
        <!--Course Features Section-->
        <section id="course-features">
            <div class="container">
                
                <div class="section-header">
               
               <!-- If user uploaded an image-->
                    <?php if( !empty($features_section_image) ) :  ?>
                   
                    <img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
                    
                    <?php endif; ?>
               
                    <h2><?php echo $features_section_title; ?></h2>
                    
                    <!-- If user added body text -->
                    <?php if( !empty($features_section_body) ) :  ?>
                    
                    <p class="lead"><?php echo $features_section_body; ?></p>
                    
                    <?php endif; ?>
                </div><!--Section Header-->
                
                <div class="row">
                    
                    <?php $loop = new WP_Query( array( 'post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC'  )  );  ?>
                    
                    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                    
                       <div class="col-sm-2">
                        <i class="<?php the_field('course_feature_icon'); ?>"></i>
                        <h4><?php the_title();  ?></h4>
                    </div><!--Column-->
                    
                    
                    <?php endwhile; ?>
                    
                    
                    
                </div><!--Row-->
                
            </div> <!--Container-->
        </section> <!--Course Features-->
        
        
        <!--Project Features Section-->
        <section id="project-features">
            <div class="container">
                
                <h2><? php echo $project_feature_title ?></h2>
                <p class="lead"><?php echo $project_feature_body   ?></p>
                
                <div class="row">
                    
                    <?php $loop = new WP_Query( array( 'post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC'  )  );  ?>
                    
                    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                    
                    <div class="col-sm-4">
                        <?php if(has_post_thumbnail() ) { the_post_thumbnail(); }  ?>
                        
                        <h3><?php the_title();   ?></h3>
                        <p><?php the_content();   ?></p>
                    </div><!--Column-->
                    
                    
                    <?php endwhile; ?>
                    
                    
                    
                    
                </div><!--Row-->
                
                
            </div> <!--Container-->
            
            
        </section><!-- Project Features-->
        
        <!--Video Featurette Section-->
        <section id="featurette">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h2>Watch the Course Introduction</h2>
                        <iframe width="100%" height="415" src="https://www.youtube.com/embed/Fdo7DGAqSdA" frameborder="0" allowfullscreen></iframe>
                    </div>
                    
                </div><!--Row-->
            </div><!--Container-->
            
            
        </section>
        
        <!--Instructor Section-->
        <section id="instructor">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-8">
                                <h2><?php echo $instructor_section_title;  ?> <small><?php echo $instructor_name;    ?></small></h2>
                            </div><!--Column-->
                            <div class="col-lg-4">
                                
                                <?php if( !empty($twitter_username) ): ?>
                                    <a href="https://twitter.com/<?php echo $twitter_username;   ?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
                                <?php endif;  ?>
                                
                                <?php if( !empty($facebook_username) ): ?>
                                    <a href="https://facebook.com/<?php echo $facebook_username; ?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
                                <?php endif;   ?>
                                
                                <?php if( !empty($google_plus_username) ): ?>
                                    <a href="https://plus.google.com/<?php echo $google_plus_username; ?>" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
                                <?php endif;   ?>
                            </div> <!--Column-->
                        </div><!--Row-->
                        
                        <p class="lead"><?php echo $bio_excerpt;  ?></p>
                           
                           <?php echo $full_bio;   ?>
                        
                        <h3>The numbers <small>They Don't Lie</small></h3>
                        
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="num">
                                    <div class="num-content">
                                       <?php echo $num_students;  ?> <span>students</span>
                                    </div><!--Num Content-->
                                </div> <!--Num-->
                            </div><!--End Column-->
                            
                            <div class="col-xs-4">
                                <div class="num">
                                    <div class="num-content">
                                        <?php echo $num_reviews;  ?> <span>reviews</span>
                                    </div><!--Num Content-->
                                </div> <!--Num-->
                            </div><!--End Column-->
                            
                            <div class="col-xs-4">
                                <div class="num">
                                    <div class="num-content">
                                        <?php echo $num_courses;  ?> <span>courses</span>
                                    </div><!--Num Content-->
                                </div> <!--Num-->
                            </div><!--End Column-->
                        </div> <!--Row-->
                    </div><!--Column-->
                </div><!--Row-->
            </div><!--Container-->
            
            
            
        </section>
        
        <!--Testimonials Section-->
        <section id="kudos">
    		<div class="container">
    			<div class="row">
    			
    				<div class="col-sm-8 col-sm-offset-2">
    					<h2>What People Are Saying About Brad</h2>
    					
    					<!-- TESTIMONIAL -->
    					<div class="row testimonial">
    						<div class="col-sm-4">
    							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
    						</div><!-- end col -->
    						<div class="col-sm-8">
    							<blockquote>
    								These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you chuckling as you're slamming out lines of code. I've taken 3 courses from this instructor. Whenever I have questions he is right there with a simple solution or a helpful suggestion to keep me going forward with the course work.
    								<cite>&mdash; Brennan, graduate of all of Brad's courses</cite>
    							</blockquote>
    						</div><!-- end col -->
    					</div><!-- row -->
    					
    					<!-- TESTIMONIAL -->
    					<div class="row testimonial">
    						<div class="col-sm-4">
    							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Illustration of a man with a moustache">
    						</div><!-- end col -->
    						<div class="col-sm-8">
    							<blockquote>
    								I found Brad to be a great teacher, and a very inspiring person. It's clear he is very passionate about helping designers learn to code, and I look forward to more courses from him!
    								<cite>&mdash; Ben, graduate of Build a Website from Scratch with HTML &amp; CSS</cite>
    							</blockquote>
    						</div><!-- end col -->
    					</div><!-- row -->
    					
    					<!-- TESTIMONIAL -->
    					<div class="row testimonial">
    						<div class="col-sm-4">
    							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="Illustration of a man with a beard">
    						</div><!-- end col -->
    						<div class="col-sm-8">
    							<blockquote>
    								Brad is amazing and I honestly think he's the best tutor of all the courses I have taken on Udemy. Will definitely be following him in the future. Thanks Brad!
    								<cite>&mdash; AJ, graduate of Code a Responsive Website with Bootstrap 3</cite>
    							</blockquote>
    						</div><!-- end col -->
    					</div><!-- row -->
    	
    					<!-- TESTIMONIAL -->
    					<div class="row testimonial">
    						<div class="col-sm-4">
    							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Illustration of a man with a goatee">
    						</div><!-- end col -->
    						<div class="col-sm-8">
    							<blockquote>
    								Brad is an excellent instructor. His content is super high quality, and you can see the love and care put into every section. The tutorials are the perfect length, and you feel like your doing something right out the gate! I really can't believe this is free. I highly recommend taking advantage of this course.
    								<cite>&mdash; Ernest, graduate of Code Dynamic Websites with PHP</cite>
    							</blockquote>
    						</div><!-- end col -->
    					</div><!-- row -->
    					
        			</div><!-- end col -->
        				
        		</div><!-- row -->
        	</div><!-- container -->
        </section><!-- kudos -->

<?php get_footer(); ?>