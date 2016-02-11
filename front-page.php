<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Popperscores
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;
				?>

			<?php endwhile; // End of the loop. ?>
	
  
		<div id='tabbed-nav'>
		   <ul class="main-tab-nav">
                <li><a>Calculators</a></li>
                <li><a>FAQ</a></li>
                <li><a>Credit Factors</a></li>
           
            </ul>

            <!-- Content container -->
            <div id="fpzozoContainer">

                <!-- Calculator -->
                <div>
                	<div>
                	<div class='nested-tabs'>
					   	<ul>
			                <li><a>MONTHLY PAYMENT<span>Purchase Calculator</span></a></li>
			                <li><a>AMORTIZATION SCHEDULE<span>Purchase Calculator</span></a></li>
			                <li><a>COMPARE RATES AND TERMS<span>Refinance Calculator</span></a></li>
			                <li><a>WHAT IF I PAY MORE<span>Refinance Calculator</span></a></li>
			           
			            </ul>
			            <!-- Content container -->
			            <div>
				            <div>
	                    		<h4>Calculate Your Monthly Payment</h4>
	                    		<p>DOWN PAYMENT TYPE:</p>
	                		</div>
	                		 <div>
	                    		<h4>See Where Your Money Goes Every Month</h4>
	                    		<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer</p>
	                		</div>
	                		 <div>
	                    		<h4>Compare Rates and Terms</h4>
	                    		<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer</p>
	                		</div>
	                		 <div>
	                    		<h4>What If You Paid More Monthly?</h4>
	                    		<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer</p>
	                		</div>
                	</div>
                </div>
            	</div>
        	</div>

                <!-- FAQ -->
                <div>
                    <h4>Frequently Asked Questions</h4>
             		<ul id="demo-accordion">
             			  <li>
					    	<h3>What Should I know Before I Buy A House?</h3>
					        <div>The first thing you should do before you consider purchasing a home is to meet with a licensed loan officer who will help you understand how much you can afford to buy. Some people think they must pay off all their debt before they can qualify for a mortgage, but this is not the case. After determining how much you may qualify for, it is the important to assess your needs such as the size of home you’d like to purchase, location, and condition of the property. Writing down the elements important to you will help your real estate agent to find your dream home.</div>
					      </li>
					      <li>
					    	<h3>What Should I know Before I Buy A House?</h3>
					        <div>The first thing you should do before you consider purchasing a home is to meet with a licensed loan officer who will help you understand how much you can afford to buy. Some people think they must pay off all their debt before they can qualify for a mortgage, but this is not the case. After determining how much you may qualify for, it is the important to assess your needs such as the size of home you’d like to purchase, location, and condition of the property. Writing down the elements important to you will help your real estate agent to find your dream home.</div>
					      </li>
					    
					      <li>
					    	<h3>What Should I know Before I Buy A House?</h3>
					        <div>The first thing you should do before you consider purchasing a home is to meet with a licensed loan officer who will help you understand how much you can afford to buy. Some people think they must pay off all their debt before they can qualify for a mortgage, but this is not the case. After determining how much you may qualify for, it is the important to assess your needs such as the size of home you’d like to purchase, location, and condition of the property. Writing down the elements important to you will help your real estate agent to find your dream home.</div>
					      </li>
					      <li>
					    	<h3>What Should I know Before I Buy A House?</h3>
					        <div>The first thing you should do before you consider purchasing a home is to meet with a licensed loan officer who will help you understand how much you can afford to buy. Some people think they must pay off all their debt before they can qualify for a mortgage, but this is not the case. After determining how much you may qualify for, it is the important to assess your needs such as the size of home you’d like to purchase, location, and condition of the property. Writing down the elements important to you will help your real estate agent to find your dream home.</div>
					      </li>
					      <li>
					    	<h3>What Should I know Before I Buy A House?</h3>
					        <div>The first thing you should do before you consider purchasing a home is to meet with a licensed loan officer who will help you understand how much you can afford to buy. Some people think they must pay off all their debt before they can qualify for a mortgage, but this is not the case. After determining how much you may qualify for, it is the important to assess your needs such as the size of home you’d like to purchase, location, and condition of the property. Writing down the elements important to you will help your real estate agent to find your dream home.</div>
					      </li>
					      <li>
					    	<h3>What Should I know Before I Buy A House?</h3>
					        <div>The first thing you should do before you consider purchasing a home is to meet with a licensed loan officer who will help you understand how much you can afford to buy. Some people think they must pay off all their debt before they can qualify for a mortgage, but this is not the case. After determining how much you may qualify for, it is the important to assess your needs such as the size of home you’d like to purchase, location, and condition of the property. Writing down the elements important to you will help your real estate agent to find your dream home.</div>
					      </li>
					</ul>
                </div>

                <!-- Credit Factors -->
                 <div>
                	<div>
                	<div class='vertical-nested-tabs'>
					   	<ul>
			                <li><a>PAYMENT HISTORY<span>Credit Factor 1</span></a></li>
			                <li><a>CREDIT BALANCES<span>Credit Factor 2</span></a></li>
			                <li><a>CREDIT HISTORY<span>Credit Factor 3</span></a></li>
			                <li><a>TYPE OF CREDIT<span>Credit Factor 4</span></a></li>
			                <li><a>INQUIRIES<span>Credit Factor 5</span></a></li>
			           
			            </ul>
			            <!-- Content container -->
			            <div>
				            <div>
	                    		<h4>PAYMENT HISTORY - 35%</h4>
	                    		<h5>Overall Credit History</h5>
	                    		<p>Paying debt on time and in full has the greatest positive impact on your credit score. Late payments, judgments and charge-offs all have a negative impact. Missing a high payment will have a more severe impact than missing a low payment, and delinquencies that have occurred in the last two years carry more weight than older items.</p>
	                		</div>
	                		<div>
	                    		<h4>CREDIT BALANCES - 30%</h4>
	                    		<h5>Overall Credit History</h5>
	                    		<p>Paying debt on time and in full has the greatest positive impact on your credit score. Late payments, judgments and charge-offs all have a negative impact. Missing a high payment will have a more severe impact than missing a low payment, and delinquencies that have occurred in the last two years carry more weight than older items.</p>
	                		</div>
	                		<div>
	                    		<h4>CREDIT HISTORY - 15%</h4>
	                    		<h5>Overall Credit History</h5>
	                    		<p>Paying debt on time and in full has the greatest positive impact on your credit score. Late payments, judgments and charge-offs all have a negative impact. Missing a high payment will have a more severe impact than missing a low payment, and delinquencies that have occurred in the last two years carry more weight than older items.</p>
	                		</div>
	                		<div>
	                    		<h4>TYPE OF CREDIT - 10%</h4>
	                    		<h5>Overall Credit History</h5>
	                    		<p>Paying debt on time and in full has the greatest positive impact on your credit score. Late payments, judgments and charge-offs all have a negative impact. Missing a high payment will have a more severe impact than missing a low payment, and delinquencies that have occurred in the last two years carry more weight than older items.</p>
	                		</div>
	                		<div>
	                    		<h4>INQUIRIES - 10%</h4>
	                    		<h5>Overall Credit History</h5>
	                    		<p>Paying debt on time and in full has the greatest positive impact on your credit score. Late payments, judgments and charge-offs all have a negative impact. Missing a high payment will have a more severe impact than missing a low payment, and delinquencies that have occurred in the last two years carry more weight than older items.</p>
	                		</div>
	                		 
                	    </div>
                    </div>
            	</div>
        	</div>

            </div>

        </div>
        <hr>
        		<!-- Advanced Custom Fields -->
        				<h3> Repeater </h3>
        					<!-- //check field group -->
						<?php if( have_rows('fieldwrap') ): ?>

							<div class="repeaterz">

							<?php while( have_rows('fieldwrap') ): the_row(); 

							// vars
							$content = get_sub_field('text');
							$image = get_sub_field('image');
							$size = 'medium'; // (thumbnail, medium, large, full or custom size)

							?>
								<div class="tile">

									<?php 

									if( $image) { 
										echo wp_get_attachment_image( $image, $size );
									}
								    echo $content; 
								    
								    ?>

							<?php endwhile; ?>

								</div>

							</div>

						<?php endif; ?>

						<h3>Flex Content</h3>
						<?php
						// check if the flexible content field (field group) has rows of data
						if( have_rows('albumLink') ):

     					// loop through the rows of data
    						while ( have_rows('albumLink') ) : the_row();

        						if( get_row_layout() == 'flexarea' ): ?>
								<div class="flexlayout">
									 <?php $gallery = get_sub_field('album');

									if( $gallery ): ?>
									    <ul>
									        <?php foreach( $gallery as $photo ): ?>
									            <li>
												    <img src="<?php echo $photo['sizes']['thumbnail']; ?>" alt="<?php echo $photo['alt']; ?>" />        
									            </li>
									        <?php endforeach; ?>
									    </ul>
									<?php endif; ?>

        							<?php the_sub_field('contents'); ?>
	        						
	        						<p class="link"> <?php the_sub_field('link'); ?> </p>

									</div> <!-- class flexlayout -->
								
								<?php	
        						elseif( get_row_layout() == 'flexarea2' ): ?>
        						<div class="flexlayout">
        							<?php
        							$input = get_sub_field('text'); ?>
        							<h2><?php echo $input; ?></h2>
									<?php 
										echo the_sub_field('newcontent');
									?>
	
								</div>
        						
							<?php
        						endif;

    						endwhile;

						else :

    						// no layouts found

						endif;

						?>	

		        	<?php 
						echo do_shortcode('[ess_grid alias="opslider"]');
					?>

			   <div class="map">
			
		<div id="map-contact-c"> <!-- <section wrapper> -->
			<div id="map-wrapper"> <!--map wrapper-->
<!--DOM element-->	<div id="map-canvas" 
					data-lat="36.8460240" 
					data-lng="75.9881690" 
					data-address="1000 19th St, Virginia Beach, VA 23451" 
					data-addr-top="1000 19th St"
					data-addr-bot="Virginia Beach, VA, 23451">
				</div>
			</div>
		</div>     
			  </div> 

		</main><!-- #main -->
	</div><!-- #primary -->		

<?php get_footer(); ?>
