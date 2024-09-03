<div class="bottom-sticky text-center">
	<div class="sticky-content">
  <a id="m-banner-p" href="tel:1-844-616-3400">
    <?php $queried_object = get_queried_object();
    if( get_field('banner_text', $queried_object->ID)) {?>
      <div class="sticky-txt"><?php the_field('banner_text', $queried_object->ID); ?></div>
    <?php } else  { ?>
      <div class="sticky-txt">Get 24/7 treatment help now.</div>
    <?php } ?>
    <div class="sticky-number"><i class="fa fa-phone"></i> (844) 616-3400</div>
  </a>
</div>
</div>