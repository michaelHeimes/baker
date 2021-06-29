<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					<div class="grid-container">
					
						<div class="inner-footer grid-x grid-padding-x align-justify" data-equalizer>
							
							<div class="logo-wrap cell small-12"><a href="<?php echo home_url(); ?>">
								
								<?php 
								$image = get_field('footer_logo', 'option');
								if( !empty( $image ) ): ?>
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
																	
								<span class="show-for-sr"><?php bloginfo('name'); ?></span></a>
							
							</div>
							
							<div class="left cell small-12 medium-5">
								
								<div class="spacer" data-equalizer-watch data-equalize-on="medium"></div>
								
								<div class="contact-wrap grid-x grid-padding-x">
									<div class="cell shrink">
										<div class="contact-label">Location</div>
										<div>
											<?php the_field('location', 'option');?>
										</div>
										
											<?php 
											$link = get_field('google_maps_link', 'option');
											if( $link ): 
											    $link_url = $link['url'];
											    $link_title = $link['title'];
											    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
											<div>
											    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
											</div>
											<?php endif; ?>											
									</div>
	
									<div class="cell shrink">
										<div class="contact-label">Contact</div>
										<div><?php the_field('phone_number', 'option');?></div>
										<div><a href="mailto:<?php the_field('email', 'option');?>"><?php the_field('email', 'option');?></a></div>
									</div>
								</div>
								
							</div>
	
	
							<div class="right cell small-12 medium-7 large-6 large-offset-1">
								
								<?php if( $footer_heading = get_field('footer_heading', 'option') ):?>
									<h2 data-equalizer-watch><?php echo $footer_heading;?></h2>
								<?php endif;?>
								
								<div class="footer-pipe"></div>
								
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>							
								
							</div>
							
	
							
							<div class="bottom cell">
								
								<div class="grid-x grid-padding-x align-justify align-middle">
								
									<div class="left cell small-12 medium-4 tablet-shrink">
										<div class="inner">
											<a href="<?php the_field('facebook_url', 'option');?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="6.548" height="13.094" viewBox="0 0 6.548 13.094">
  <path id="Path_8" data-name="Path 8" d="M137.341,2.174h1.2V.092A15.439,15.439,0,0,0,136.8,0a2.765,2.765,0,0,0-2.9,3.077V4.91h-1.9V7.238h1.9v5.856h2.332V7.238h1.825l.29-2.327h-2.115v-1.6c0-.673.182-1.133,1.119-1.133Z" transform="translate(-131.989)" fill="#2bc640"/>
</svg></a>
											<a href="<?php the_field('instagram_url', 'option');?>" target="_blank"><svg id="Group_6" data-name="Group 6" xmlns="http://www.w3.org/2000/svg" width="13.276" height="13.279" viewBox="0 0 13.276 13.279">
  <g id="Group_5" data-name="Group 5" transform="translate(0 0)">
    <path id="Path_5" data-name="Path 5" d="M14.14,3.9a4.852,4.852,0,0,0-.309-1.611A3.4,3.4,0,0,0,11.889.35,4.865,4.865,0,0,0,10.278.042C9.567.008,9.341,0,7.539,0S5.51.008,4.8.039A4.853,4.853,0,0,0,3.191.348a3.24,3.24,0,0,0-1.178.768,3.269,3.269,0,0,0-.765,1.175A4.865,4.865,0,0,0,.94,3.9C.906,4.612.9,4.838.9,6.641S.906,8.669.937,9.377a4.852,4.852,0,0,0,.309,1.611,3.4,3.4,0,0,0,1.943,1.943A4.866,4.866,0,0,0,4.8,13.24c.708.031.934.039,2.737.039s2.028-.008,2.737-.039a4.851,4.851,0,0,0,1.611-.309,3.4,3.4,0,0,0,1.943-1.943,4.868,4.868,0,0,0,.309-1.611c.031-.708.039-.934.039-2.737S14.171,4.612,14.14,3.9Zm-1.2,5.421a3.639,3.639,0,0,1-.228,1.232,2.2,2.2,0,0,1-1.261,1.261,3.653,3.653,0,0,1-1.232.228c-.7.031-.91.039-2.682.039s-1.984-.008-2.682-.039a3.638,3.638,0,0,1-1.232-.228,2.044,2.044,0,0,1-.763-.5,2.065,2.065,0,0,1-.5-.763,3.653,3.653,0,0,1-.228-1.232c-.031-.7-.039-.911-.039-2.682s.008-1.984.039-2.682a3.637,3.637,0,0,1,.228-1.232,2.018,2.018,0,0,1,.5-.763,2.061,2.061,0,0,1,.763-.5,3.655,3.655,0,0,1,1.232-.228c.7-.031.911-.039,2.682-.039s1.984.008,2.682.039a3.639,3.639,0,0,1,1.232.228,2.042,2.042,0,0,1,.763.5,2.064,2.064,0,0,1,.5.763,3.654,3.654,0,0,1,.228,1.232c.031.7.039.91.039,2.682S12.976,8.625,12.945,9.325Z" transform="translate(-0.898 0)" fill="#2bc640"/>
    <path id="Path_6" data-name="Path 6" d="M128.59,124.281A3.411,3.411,0,1,0,132,127.692,3.412,3.412,0,0,0,128.59,124.281Zm0,5.624a2.213,2.213,0,1,1,2.213-2.213A2.213,2.213,0,0,1,128.59,129.9Z" transform="translate(-121.949 -121.051)" fill="#2bc640"/>
    <path id="Path_7" data-name="Path 7" d="M363.854,89.242a.8.8,0,1,1-.8-.8A.8.8,0,0,1,363.854,89.242Z" transform="translate(-352.871 -86.148)" fill="#2bc640"/>
  </g>
</svg></a>
											<a href="<?php the_field('twitter_url', 'option');?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="13.941" height="11.327" viewBox="0 0 13.941 11.327">
  <g id="Group_10" data-name="Group 10" transform="translate(0 0)">
    <g id="Group_37" data-name="Group 37" transform="translate(0 0)">
      <path id="Path_131" data-name="Path 131" d="M13.941,49.341a5.959,5.959,0,0,1-1.647.451,2.842,2.842,0,0,0,1.257-1.58,5.712,5.712,0,0,1-1.812.692A2.858,2.858,0,0,0,6.8,50.859a2.943,2.943,0,0,0,.066.652,8.09,8.09,0,0,1-5.891-2.99,2.859,2.859,0,0,0,.878,3.82,2.822,2.822,0,0,1-1.291-.352v.031a2.871,2.871,0,0,0,2.29,2.808,2.853,2.853,0,0,1-.749.094,2.527,2.527,0,0,1-.541-.049,2.885,2.885,0,0,0,2.671,1.991A5.743,5.743,0,0,1,.684,58.084,5.353,5.353,0,0,1,0,58.045a8.046,8.046,0,0,0,4.385,1.283,8.079,8.079,0,0,0,8.135-8.133c0-.126,0-.248-.01-.369A5.7,5.7,0,0,0,13.941,49.341Z" transform="translate(0 -48)" fill="#2bc640"/>
    </g>
  </g>
</svg></a>
										</div>
									</div>
									
									<div class="right cell small-12 medium-8 tablet-auto">
										<div class="source-org copyright">By Authority, Friends of Rushern L. Baker, III, Calvin Brown, Treasurer | &copy; Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a href="https://proprdesign.com/" target="_blank">Made by Propr Design</a></div>
									</div>
								
								</div>
								
							</div>
	
						
						</div> <!-- end #inner-footer -->
						
					</div>
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->