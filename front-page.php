<?php 
/* Template Name: FrontPage */

get_header(); ?>

<div class="style-wrapper"><!-- IOS cache fix for style -->


<?php

if( have_rows('hero') ):
    while( have_rows('hero') ) : the_row();

        $heading = get_sub_field('heading');
        $sub_heading = get_sub_field('sub_heading');
        $button = get_sub_field('button');
        $image = get_sub_field('image');
?>

	<section class="hero">
		<div class="container">
			<div class="row">				
				<div class="col-12 col-md-6 col-lg-6 mt-3">
					<?php if($heading) : ?>
						<h1><?php echo $heading; ?></h1>
					<?php endif; ?>
					
					<?php if($sub_heading) : ?>
						<p><?php echo $sub_heading; ?></p>
					<?php endif; ?>

					
					<?php if($image) : ?>
						<img class="d-md-none" src="<?php echo $image['url']; ?>" srcset="<?php echo $image['url']; ?> 2x" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
					
					
					<?php if($button) : ?>
						<a class="btn btn-primary btn-lg" target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
					<?php endif; ?>
				</div>
				<div class="col-12 col-md-6 col-lg-6 d-none d-md-block">
					<?php if($image) : ?>
						<img src="<?php echo $image['url']; ?>" srcset="<?php echo $image['url']; ?> 2x" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

<?php endwhile; else : endif; ?>





<?php

if( have_rows('who_we_are') ):
    while( have_rows('who_we_are') ) : the_row();

        $heading = get_sub_field('heading');
        $sub_heading = get_sub_field('sub_heading');
        $button = get_sub_field('button');
?>


	<section class="who-we-are">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-6 col-lg-6">
					<?php if($heading) : ?>
						<h2><?php echo $heading; ?></h2>
					<?php endif; ?>
					
					<?php if($sub_heading) : ?>
						<p><?php echo $sub_heading; ?></p>
					<?php endif; ?>
					<?php if($button) : ?>
						<a class="btn btn-white d-none d-md-block" target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
					<?php endif; ?>
					
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-6">
					<ul>
						<?php

						if( have_rows('right_column_content') ):
							while( have_rows('right_column_content') ) : the_row();

								$heading = get_sub_field('heading');
								$paragraph = get_sub_field('paragraph');
								$icon = get_sub_field('icon');
						?>
					
						<li class="align-items-center">
							<div class="icons-circles">
							<?php if($icon) : ?>
								<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
							<?php endif; ?>
							</div>
							<div class="icons-list-content">
								<?php if($heading) : ?>
								<strong><?php echo $heading; ?></strong>
								<?php endif; ?>
								
								<?php if($paragraph) : ?>
								<p><?php echo $paragraph; ?></p>
								<?php endif; ?>
							</div>
						</li>
						<?php endwhile; else : endif; ?>

					</ul>
					
					<?php if($button) : ?>
						<a class="btn btn-primary d-block d-md-none" target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
					<?php endif; ?>
					
				</div>
			</div>
		</div>
	</section>
<?php endwhile; else : endif; ?>


<?php

if( have_rows('best_treatment') ):
    while( have_rows('best_treatment') ) : the_row();

        $heading = get_sub_field('heading');
        $sub_heading = get_sub_field('sub_heading');
        $how_we_choose_heading = get_sub_field('how_we_choose_heading');
        $button = get_sub_field('button');
?>


	<section class="best-treatment">
		<div class="container">
			<?php if($heading) : ?>
				<h2 class="text-center ca"><?php echo $heading; ?></h2>
			<?php endif; ?>
			
			<?php if($sub_heading) : ?>
				<p class="text-center"><?php echo $sub_heading; ?></p>
			<?php endif; ?>
		
			<div class="state-form">
				<form>
					<label>Select a state to get started</label>					
					<select>
						<option value="">Select a state</option>
						<option value="/best-drug-rehab-centers/alabama/">Alabama</option>
						<option value="/best-drug-rehab-centers/alaska/">Alaska</option>
						<option value="/best-drug-rehab-centers/arizona/">Arizona</option>
						<option value="/best-drug-rehab-centers/arkansas/">Arkansas</option>
						<option value="/best-drug-rehab-centers/california/">California</option>
						<option value="/best-drug-rehab-centers/canada/">Canada</option>
						<option value="/best-drug-rehab-centers/colorado/">Colorado</option>
						<option value="/best-drug-rehab-centers/connecticut/">Connecticut</option>
						<option value="/best-drug-rehab-centers/delaware/">Delaware</option>
						<option value="/best-drug-rehab-centers/florida/">Florida</option>
						<option value="/best-drug-rehab-centers/georgia/">Georgia</option>
						<option value="/best-drug-rehab-centers/hawaii/">Hawaii</option>
						<option value="/best-drug-rehab-centers/idaho/">Idaho</option>
						<option value="/best-drug-rehab-centers/illinois/">Illinois</option>
						<option value="/best-drug-rehab-centers/indiana/">Indiana</option>
						<option value="/best-drug-rehab-centers/iowa/">Iowa</option>
						<option value="/best-drug-rehab-centers/kansas/">Kansas</option>
						<option value="/best-drug-rehab-centers/kentucky/">Kentucky</option>
						<option value="/best-drug-rehab-centers/louisiana/">Louisiana</option>
						<option value="/best-drug-rehab-centers/maine/">Maine</option>
						<option value="/best-drug-rehab-centers/maryland/">Maryland</option>
						<option value="/best-drug-rehab-centers/massachusetts/">Massachusetts</option>
						<option value="/best-drug-rehab-centers/michigan/">Michigan</option>
						<option value="/best-drug-rehab-centers/minnesota/">Minnesota</option>
						<option value="/best-drug-rehab-centers/mississippi/">Mississippi</option>
						<option value="/best-drug-rehab-centers/missouri/">Missouri</option>
						<option value="/best-drug-rehab-centers/montana/">Montana</option>
						<option value="/best-drug-rehab-centers/nebraska/">Nebraska</option>
						<option value="/best-drug-rehab-centers/nevada/">Nevada</option>
						<option value="/best-drug-rehab-centers/new-england/">New England</option>
						<option value="/best-drug-rehab-centers/new-hampshire/">New Hampshire</option>
						<option value="/best-drug-rehab-centers/new-jersey/">New Jersey</option>
						<option value="/best-drug-rehab-centers/new-mexico/">New Mexico</option>
						<option value="/best-drug-rehab-centers/new-york/">New York</option>
						<option value="/best-drug-rehab-centers/north-carolina/">North Carolina</option>
						<option value="/best-drug-rehab-centers/north-dakota/">North Dakota</option>
						<option value="/best-drug-rehab-centers/ohio/">Ohio</option>
						<option value="/best-drug-rehab-centers/oklahoma/">Oklahoma</option>
						<option value="/best-drug-rehab-centers/oregon/">Oregon</option>
						<option value="/best-drug-rehab-centers/pennsylvania/">Pennsylvania</option>
						<option value="/best-drug-rehab-centers/rhode-island/">Rhode Island</option>
						<option value="/best-drug-rehab-centers/south-carolina/">South Carolina</option>
						<option value="/best-drug-rehab-centers/south-dakota/">South Dakota</option>
						<option value="/best-drug-rehab-centers/tennessee/">Tennessee</option>
						<option value="/best-drug-rehab-centers/texas/">Texas</option>
						<option value="/best-drug-rehab-centers/united-kingdom/">United Kingdom (UK)</option>
						<option value="/best-drug-rehab-centers/utah/">Utah</option>
						<option value="/best-drug-rehab-centers/vermont/">Vermont</option>
						<option value="/best-drug-rehab-centers/virginia/">Virginia</option>
						<option value="/best-drug-rehab-centers/washington/">Washington</option>
						<option value="/best-drug-rehab-centers/washington-dc/">Washington, D.C.</option>
						<option value="/best-drug-rehab-centers/west-virginia/">West Virginia</option>
						<option value="/best-drug-rehab-centers/wisconsin/">Wisconsin</option>
						<option value="/best-drug-rehab-centers/wyoming/">Wyoming<option>
					</select>					
				</form>
			</div>
			
			<div class="how-we-choose-sec">
				<?php if($how_we_choose_heading) : ?>
					<div class="how-we-choose-heading"><?php echo $how_we_choose_heading; ?></div>
				<?php endif; ?>
				
				<ul class="d-flex">
					<?php
					if( have_rows('how_we_choose') ): ?>
					<?php    
					while( have_rows('how_we_choose') ) : the_row();

						$heading = get_sub_field('heading');
						$paragraph = get_sub_field('paragraph');
						$icon = get_sub_field('icon');
					?>					
						<li>
							<?php if($icon) : ?>
								<span><img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" /></span>
							<?php endif; ?>
							<?php if($heading) : ?>
								<strong><?php echo $heading; ?></strong>
							<?php endif; ?>
							
							<?php if($paragraph) : ?>
								<p><?php echo $paragraph; ?></p>
							<?php endif; ?>
						</li>
					<?php endwhile; ?> 
					<?php endif; ?>
								
				</ul>
				
				
				<a class="btn btn-primary" target="" href="/how-we-choose/">LEARN MORE ON HOW WE CHOOSE</a>

				<div class="accordion" id="accordionStates">
					
				  
				  
					<div class="states-card">
						<button class="text-left" type="button" data-toggle="collapse" data-target="#collapse-02" aria-expanded="true" aria-controls="collapse-02">
							Cities <i class="fa fa-angle-up"></i>
						</button>
						
						<div id="collapse-02" class="collapse show" aria-labelledby="heading-02" data-parent="#accordionStates">
							<ul class="d-flex flex-wrap">
							<li><a href="/best-drug-rehab-centers/new-york/new-york-city/">New York, NY</a></li>
							<li><a href="/best-drug-rehab-centers/california/los-angeles/">Los Angeles, CA</a></li>
							<li><a href="/best-drug-rehab-centers/illinois/chicago/">Chicago, IL</a></li>
							<li><a href="/best-drug-rehab-centers/texas/houston/">Houston, TX</a></li>
							<li><a href="/best-drug-rehab-centers/arizona/phoenix/">Phoenix, AZ</a></li>
							<li><a href="/best-drug-rehab-centers/pennsylvania/philadelphia/">Philadelphia, PA</a></li>
							<li><a href="/best-drug-rehab-centers/texas//san-antonio/">San Antonio, TX</a></li>
							<li><a href="/best-drug-rehab-centers/california/san-diego/">San Diego, CA</a></li>
							<li><a href="/best-drug-rehab-centers/texas/dallas/">Dallas, TX</a></li>
							<li><a href="/best-drug-rehab-centers/california/san-jose/">San Jose, CA</a></li>
							<li><a href="/best-drug-rehab-centers/texas/austin/">Austin, TX</a></li>
							<li><a href="/best-drug-rehab-centers/florida/jacksonville/">Jacksonville, FL</a></li>
							<li><a href="/best-drug-rehab-centers/texas/fort-worth/">Fort Worth, TX</a></li>
							<li><a href="/best-drug-rehab-centers/ohio/columbus/">Columbus, OH</a></li>
							<li><a href="/best-drug-rehab-centers/north-carolina/charlotte/">Charlotte, NC</a></li>
							<li><a href="/best-drug-rehab-centers/california/san-francisco/">San Francisco, CA</a></li>
							<li><a href="/best-drug-rehab-centers/indiana/indianapolis/">Indianapolis, IN</a></li>
							<li><a href="/best-drug-rehab-centers/washington/seattle/">Seattle, WA</a></li>
							<li><a href="/best-drug-rehab-centers/colorado/denver/">Denver, CO</a></li>
							<li><a href="/best-drug-rehab-centers/washington-dc/">Washington, DC</a></li>
							<li><a href="/best-drug-rehab-centers/massachusetts/boston/">Boston, MA</a></li>
							<li><a href="/best-drug-rehab-centers/texas/el-paso/">El Paso, TX</a></li>
							<li><a href="/best-drug-rehab-centers/tennessee/nashville/">Nashville, TN</a></li>
							<li><a href="/best-drug-rehab-centers/michigan/detroit/">Detroit, MI</a></li>
							<li><a href="/best-drug-rehab-centers/oklahoma/oklahoma-city/">Oklahoma City, OK</a></li>
							<li><a href="/best-drug-rehab-centers/oregon/portland/">Portland, OR</a></li>
							<li><a href="/best-drug-rehab-centers/nevada/las-vegas/">Las Vegas, NV</a></li>
							<li><a href="/best-drug-rehab-centers/tennessee/memphis/">Memphis, TN</a></li>
							<li><a href="/best-drug-rehab-centers/kentucky/louisville/">Louisville, KY</a></li>
							<li><a href="/best-drug-rehab-centers/maryland/baltimore/">Baltimore, MD</a></li>
							<li><a href="/best-drug-rehab-centers/wisconsin/milwaukee/">Milwaukee, WI</a></li>
							<li><a href="/best-drug-rehab-centers/new-mexico/albuquerque/">Albuquerque, NM</a></li>
							<li><a href="/best-drug-rehab-centers/arizona/tucson/">Tucson, AZ</a></li>
							<li><a href="/best-drug-rehab-centers/california/fresno/">Fresno, CA</a></li>
							<li><a href="/best-drug-rehab-centers/arizona/mesa/">Mesa, AZ</a></li>
							<li><a href="/best-drug-rehab-centers/california/sacramento/">Sacramento, CA</a></li>
							<li><a href="/best-drug-rehab-centers/georgia/atlanta/">Atlanta, GA</a></li>
							<li><a href="/best-drug-rehab-centers/missouri/kansas-city/">Kansas City, MO</a></li>
							<li><a href="/best-drug-rehab-centers/colorado/colorado-springs/">Colorado Springs, CO</a></li>
							<li><a href="/best-drug-rehab-centers/nebraska/omaha/">Omaha, NE</a></li>
							<li><a href="/best-drug-rehab-centers/north-carolina/raleigh/">Raleigh, NC</a></li>
							<li><a href="/best-drug-rehab-centers/florida/miami/">Miami, FL</a></li>
							<li><a href="/best-drug-rehab-centers/california/long-beach/">Long Beach, CA</a></li>
							<li><a href="/best-drug-rehab-centers/virginia/virginia-beach/">Virginia Beach, VA</a></li>
							<li><a href="/best-drug-rehab-centers/california/oakland/">Oakland, CA</a></li>
							<li><a href="/best-drug-rehab-centers/minnesota/minneapolis/">Minneapolis, MN</a></li>
							<li><a href="/best-drug-rehab-centers/oklahoma/tulsa/">Tulsa, OK</a></li>
							<li><a href="/best-drug-rehab-centers/florida/tampa/">Tampa, FL</a></li>
							<li><a href="/best-drug-rehab-centers/texas/arlington/">Arlington, TX</a></li>
							<li><a href="/best-drug-rehab-centers/louisiana/new-orleans/">New Orleans, LA</a></li>
							<li><a href="/best-drug-rehab-centers/pennsylvania/pittsburgh/">Pittsburg, PA</a></li>
							<li><a href="/best-drug-rehab-centers/ohio/cincinnati/">Cincinnati, OH</a></li>
							<li><a href="/best-drug-rehab-centers/new-jersey/newark/">Newark, NJ</a></li>
							<li><a href="/best-drug-rehab-centers/new-york/buffalo/">Buffalo, NY</a></li>
							<li><a href="/best-drug-rehab-centers/massachusetts/worcester/">Worcester, MA</a></li>							
							</ul>
						</div>
					</div>


					<div class="states-card">
						<button class="text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-01" aria-expanded="false" aria-controls="collapse-01">
						State <i class="fa fa-angle-up"></i>
						</button>

						<div id="collapse-01" class="collapse" aria-labelledby="heading-01" data-parent="#accordionStates">						

							<ul class="d-flex flex-wrap">
							
								<li><a href="/best-drug-rehab-centers/alabama/">Alabama</a></li>
								<li><a href="/best-drug-rehab-centers/alaska/">Alaska</a></li>
								<li><a href="/best-drug-rehab-centers/arizona/">Arizona</a></li>
								<li><a href="/best-drug-rehab-centers/arkansas/">Arkansas</a></li>
								<li><a href="/best-drug-rehab-centers/california/">California</a></li>
								<li><a href="/best-drug-rehab-centers/canada/">Canada</a></li>
								<li><a href="/best-drug-rehab-centers/colorado/">Colorado</a></li>
								<li><a href="/best-drug-rehab-centers/connecticut/">Connecticut</a></li>
								<li><a href="/best-drug-rehab-centers/delaware/">Delaware</a></li>
								<li><a href="/best-drug-rehab-centers/florida/">Florida</a></li>
								<li><a href="/best-drug-rehab-centers/georgia/">Georgia</a></li>
								<li><a href="/best-drug-rehab-centers/hawaii/">Hawaii</a></li>
								<li><a href="/best-drug-rehab-centers/idaho/">Idaho</a></li>
								<li><a href="/best-drug-rehab-centers/illinois/">Illinois</a></li>
								<li><a href="/best-drug-rehab-centers/indiana/">Indiana</a></li>
								<li><a href="/best-drug-rehab-centers/iowa/">Iowa</a></li>
								<li><a href="/best-drug-rehab-centers/kansas/">Kansas</a></li>
								<li><a href="/best-drug-rehab-centers/kentucky/">Kentucky</a></li>
								<li><a href="/best-drug-rehab-centers/louisiana/">Louisiana</a></li>
								<li><a href="/best-drug-rehab-centers/maine/">Maine</a></li>
								<li><a href="/best-drug-rehab-centers/maryland/">Maryland</a></li>
								<li><a href="/best-drug-rehab-centers/massachusetts/">Massachusetts</a></li>
								<li><a href="/best-drug-rehab-centers/michigan/">Michigan</a></li>
								<li><a href="/best-drug-rehab-centers/minnesota/">Minnesota</a></li>
								<li><a href="/best-drug-rehab-centers/mississippi/">Mississippi</a></li>
								<li><a href="/best-drug-rehab-centers/missouri/">Missouri</a></li>
								<li><a href="/best-drug-rehab-centers/montana/">Montana</a></li>
								<li><a href="/best-drug-rehab-centers/nebraska/">Nebraska</a></li>
								<li><a href="/best-drug-rehab-centers/nevada/">Nevada</a></li>
								<li><a href="/best-drug-rehab-centers/new-england/">New England</a></li>
								<li><a href="/best-drug-rehab-centers/new-hampshire/">New Hampshire</a></li>
								<li><a href="/best-drug-rehab-centers/new-jersey/">New Jersey</a></li>
								<li><a href="/best-drug-rehab-centers/new-mexico/">New Mexico</a></li>
								<li><a href="/best-drug-rehab-centers/new-york/">New York</a></li>
								<li><a href="/best-drug-rehab-centers/north-carolina/">North Carolina</a></li>
								<li><a href="/best-drug-rehab-centers/north-dakota/">North Dakota</a></li>
								<li><a href="/best-drug-rehab-centers/ohio/">Ohio</a></li>
								<li><a href="/best-drug-rehab-centers/oklahoma/">Oklahoma</a></li>
								<li><a href="/best-drug-rehab-centers/oregon/">Oregon</a></li>
								<li><a href="/best-drug-rehab-centers/pennsylvania/">Pennsylvania</a></li>
								<li><a href="/best-drug-rehab-centers/rhode-island/">Rhode Island</a></li>
								<li><a href="/best-drug-rehab-centers/south-carolina/">South Carolina</a></li>
								<li><a href="/best-drug-rehab-centers/south-dakota/">South Dakota</a></li>
								<li><a href="/best-drug-rehab-centers/tennessee/">Tennessee</a></li>
								<li><a href="/best-drug-rehab-centers/texas/">Texas</a></li>
								<li><a href="/best-drug-rehab-centers/united-kingdom/">United Kingdom (UK)</a></li>
								<li><a href="/best-drug-rehab-centers/utah/">Utah</a></li>
								<li><a href="/best-drug-rehab-centers/vermont/">Vermont</a></li>
								<li><a href="/best-drug-rehab-centers/virginia/">Virginia</a></li>
								<li><a href="/best-drug-rehab-centers/washington/">Washington</a></li>
								<li><a href="/best-drug-rehab-centers/washington-dc/">Washington, D.C.</a></li>
								<li><a href="/best-drug-rehab-centers/west-virginia/">West Virginia</a></li>
								<li><a href="/best-drug-rehab-centers/wisconsin/">Wisconsin</a></li>
								<li><a href="/best-drug-rehab-centers/wyoming/">Wyoming</a</li>
									
							</ul>								
							
						</div>
					</div>


				</div>				

			</div>
			
			
		</div>
	</section>
<?php endwhile; else : endif; ?>



<?php

if( have_rows('commonly_abused_substances') ):
    while( have_rows('commonly_abused_substances') ) : the_row();

        $heading = get_sub_field('heading');
        $sub_heading = get_sub_field('sub_heading');
        $button = get_sub_field('button');
        $background = get_sub_field('background');
?>




	<section class="abused-substance">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-center" style="<?php if($background) : ?>background:url('<?php echo $background['url']; ?>'); <?php endif; ?>">
					<div class="substance-content">
						<span>
							<?php if($heading) : ?>
								<h3><?php echo $heading; ?></h3>
							<?php endif; ?>
							
							<?php if($sub_heading) : ?>
								<p><?php echo $sub_heading; ?></p>
							<?php endif; ?>
							<?php if($button) : ?>
								<a class="btn btn-primary d-none d-md-block" target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
							<?php endif; ?>
						</span>
					</div>
					
					<?php if($background) : ?>
						<img class="d-block d-md-none" src="<?php echo $background['url']; ?>" srcset="<?php echo $background['url']; ?> 2x" alt="<?php echo $background['alt']; ?>" />
					<?php endif; ?>
					
					
				</div>
				
				<div class="col-12 col-sm-12 col-md-6 col-lg-6">
				
					<div class="accordion" id="abused-substance">
					
					
						<?php
						$i = 0;
						if( have_rows('right_column_content') ):
							while( have_rows('right_column_content') ) : the_row();

								$title = get_sub_field('title');
								$paragraph = get_sub_field('paragraph');
								$icon = get_sub_field('icon');
								$i++;
						?>
											
					
					
						<div class="accordion-card">
							<button class="text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $i; ?>">
							<?php if($icon) : ?>
								<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
							<?php endif; ?>
							<?php if($title) : ?>
								<?php echo $title; ?>
								<i class="fa fa-angle-up"></i>
							<?php endif; ?>	
							</button>

							<div id="collapse-<?php echo $i; ?>" class="collapse" aria-labelledby="heading-<?php echo $i; ?>" data-parent="#abused-substance">
								<?php if($paragraph) : ?>
								<p><?php echo $paragraph; ?></p>
								<?php endif; ?>
							</div>
							
						</div>
					  
						<?php endwhile; else : endif; ?>
	

					
						
					</div><!-- End accordion -->

				</div>
			</div>
		</div>
	</section>

<?php endwhile; else : endif; ?>




<?php

if( have_rows('top_resources') ):
    while( have_rows('top_resources') ) : the_row();

        $heading = get_sub_field('heading');
        $sub_heading = get_sub_field('sub_heading');
        $button = get_sub_field('button');
?>


	<section class="top-resources-sec">
		<div class="container">
			<?php if($heading) : ?>
				<h2 class="text-center"><?php echo $heading; ?></h2>
			<?php endif; ?>
			
			<?php if($sub_heading) : ?>
				<p><?php echo $sub_heading; ?></p>
			<?php endif; ?>
			
			<div class="row">
				<?php
				if( have_rows('resources') ):
					while( have_rows('resources') ) : the_row();

						$heading = get_sub_field('heading');
						$content = get_sub_field('content');
						$image = get_sub_field('image');
						$view_more_link = get_sub_field('view_more_link');
				?>
			
				<div class="col-12 col-sm-12 col-md-6 col-lg-3">
					<i class="icon-arrow"></i>
					<a href="<?php if($view_more_link) : echo $view_more_link; else : echo '#'; endif; ?>">
						<?php if($image) : ?>
							<img src="<?php echo $image['url']; ?>" srcset="<?php echo $image['url']; ?> 2x" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<?php if($heading) : ?>
							<div class="heading-block">
							<h5><?php echo $heading; ?></h5>
							</div>
						<?php endif; ?>
						
						<?php if($content) : ?>
							<p><?php echo $content; ?></p>
						<?php endif; ?>
						<span>View Full Guide <i class="fa fa-angle-right"></i></span>
					</a>
				</div>
				<?php endwhile; else : endif; ?>
				
			</div>
		
			<?php if($button) : ?>
				<a class="btn btn-primary" target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
			<?php endif; ?>
			
		</div>
	</section>

<?php endwhile; else : endif; ?>




<?php

if( have_rows('unique_programs') ):
    while( have_rows('unique_programs') ) : the_row();

        $heading = get_sub_field('heading');
        $sub_heading = get_sub_field('sub_heading');
        $image = get_sub_field('image');
?>

	<section class="unique-programs">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-6 col-lg-6">
					<?php if($image) : ?>
						<img class="d-none d-md-block" src="<?php echo $image['url']; ?>" srcset="<?php echo $image['url']; ?> 2x" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-6">
					<div class="programs-wrapper">
						<?php if($heading) : ?>
							<h2 class=""><?php echo $heading; ?></h2>
						<?php endif; ?>
						
						<?php if($sub_heading) : ?>
							<p><?php echo $sub_heading; ?></p>
						<?php endif; ?>

						<?php if($image) : ?>
							<img class="d-block d-md-none" src="<?php echo $image['url']; ?>" srcset="<?php echo $image['url']; ?> 2x" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<ul>
							<?php

							if( have_rows('unique_programs_links') ):
								while( have_rows('unique_programs_links') ) : the_row();

									$link = get_sub_field('link');
							?>
								<li><a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?> <i class="fa fa-angle-right"></i></a></li>
							<?php endwhile; else : endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php endwhile; else : endif; ?>



<?php

if( have_rows('blog') ):
    while( have_rows('blog') ) : the_row();

        $heading = get_sub_field('heading');
        $sub_heading = get_sub_field('sub_heading');
        $button = get_sub_field('button');
?>

	<section class="latest-blog">
		<div class="container">
			<?php if($heading) : ?>
				<h2 class="text-center"><?php echo $heading; ?></h2>
			<?php endif; ?>
			
			<?php if($sub_heading) : ?>
				<p><?php echo $sub_heading; ?></p>
			<?php endif; ?>
			
			<ul class="blog-carousel">
			
				<?php
				$queryObject = new  Wp_Query( array(
					'showposts' => 4,
					'post_type' => array('post'),
					'orderby' => 1,
					));

				// The Loop
				if ( $queryObject->have_posts() ) :
				while ( $queryObject->have_posts() ) :
				$queryObject->the_post(); ?>
			
				
				<li>
					
					<div>
					<a href="<?php the_permalink(); ?>">
					  <?php the_post_thumbnail('custom-lrg-md'); ?>
						<span>
							<h5><?php the_title(); ?></h5>
							<p><?php echo excerpt('22');?></p>
							<span class="blog-txt-links">Learn more</span>
						</span>
					</a>
					</div>
					
				</li>
				
			<?php endwhile; endif;?>
		
				
			</ul>
			<?php if($button) : ?>
				<a class="btn btn-primary" target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
			<?php endif; ?>
		</div>
	</section>
<?php endwhile; else : endif; ?>

</div>



<?php get_footer(); ?>