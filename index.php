	<?php get_header(); ?>
	<div class="header">
		<div class="container">
			<div class="slider">
				<div id="myCarousel" class="carousel slide">
				 	<ol class="carousel-indicators">
				    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    	<li data-target="#myCarousel" data-slide-to="1"></li>
				    	<li data-target="#myCarousel" data-slide-to="2"></li>
				  	</ol>
				  	<!-- Carousel items -->
				  	<div class="carousel-inner">
				    	<div class="active item">
				    		<img src="<?php bloginfo('template_url'); ?>/img/banner1.jpg" alt="">
				    	</div>
				    	<div class="item">
				    		<img src="<?php bloginfo('template_url'); ?>/img/banner2.jpg" alt="">
				    	</div>
				    	<div class="item">
				    		<img src="<?php bloginfo('template_url'); ?>/img/banner3.jpg" alt="">
				    	</div>
				  	</div>
				  	<!-- Carousel nav -->
				  	<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				  	<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>
			</div>
		</div>
	</div>
	<div class="topcontent">
		<div class="container">
			<div class="row-fluid">
				<div class="span3">
					<div class="icontile pencil"><a href="/">Clean Theme</a></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, ullam excepturi deleniti molestiae asperiores deserunt obcaecati perferendis illo dolore. Sapiente minima sequi architecto dolore doloribus consectetur expedita eveniet commodi eius.</p>
				</div>
				<div class="span3">
					<div class="icontile air"><a href="">Clean Theme</a></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, adipisci, nisi autem illum laboriosam omnis odio molestias laborum voluptatem ad repellendus libero doloribus! Provident molestiae at nesciunt fuga magnam eum.</p>
				</div>
				<div class="span3">
					<div class="icontile square"><a href="">Clean Theme</a></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, blanditiis, veritatis tenetur quod earum minus aspernatur ab delectus est quis culpa fugit architecto ratione debitis voluptate odit voluptatem provident deleniti!</p>
				</div>
				<div class="span3">
					<div class="icontile three"><a href="">Clean Theme</a></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex repellat earum consequatur officiis? Natus, asperiores, maxime itaque ex expedita veniam ipsa cupiditate obcaecati a eius dolorum iusto sequi aperiam provident.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="maincontent">
		<div class="container">
			<div class="icontile arrow">Latest Work</div>
			<div class="row-fluid">
				
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<div class="span3">
							<?php if (has_post_thumbnail()) : ?>
								<a href="<?php the_permalink(); ?>">
		                        	<?php the_post_thumbnail(array(200, 145), array('class' => 'img-polaroid')); ?>
	    						</a>
	                        <?php else: ?>							
								<img src="<?php bloginfo('template_url') ?>/img/1.jpg" alt="" class="img-polaroid">
							<?php endif; ?>
							<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							
							<?php the_excerpt(); ?>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					<h2>Not Found</h2>
				<?php endif; ?>
			
			</div>

			<div class="row-fluid">
				<div class="span6">
					<div class="icontile arrow">Testimonials</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, mollitia error iusto accusamus repudiandae quo officia facilis culpa voluptates eaque esse nisi minus earum velit cumque at laborum enim quibusdam.</p>
				</div>
				<div class="span6">
					<div class="icontile client">Our Clients</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, doloribus officia dolorum eaque est voluptatem minus maiores vitae aliquid perspiciatis consectetur ratione. Sequi, perferendis, asperiores omnis tenetur quam aut fugit.</p>
				</div>
			</div>

			<div class="row-fluid download">
				<div class="span9">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, quo, vel, a earum blanditiis animi quibusdam minus architecto quam officiis nobis ipsa excepturi ex dolorem quis nostrum laudantium ipsam voluptate.</p>
				</div>
				<div class="span3">
					<a href="" class="btn">
						<div class="down">Download PSD</div>
					</a>
				</div>
				
			</div>
		</div>
	</div>
	<?php get_footer(); ?>

