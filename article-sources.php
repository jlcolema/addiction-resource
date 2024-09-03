<?php if( have_rows('article_sources') ): ?>
<a class="collapsed tsa" data-toggle="collapse" data-parent="#tsa_source" href="#tsa_collapse" aria-expanded="false" aria-controls="tsa_collapse">Article resources</i>
</a>
<div id="tsa_collapse" class="collapse a_sb" role="tabpanel" aria-labelledby="a_sources" data-parent="#tsa_source">
<p>Addiction Resource aims to provide only the most current, accurate information in regards to addiction and addiction treatment, which means we only reference the most credible sources available.</p>
<p>These include peer-reviewed journals, government entities and academic institutions, and leaders in addiction healthcare and advocacy. Learn more about how we safeguard our content by viewing our editorial policy.</p>
<ul>
<?php while ( have_rows('article_sources') ) : the_row(); ?>
<li class="a_si"><?php the_sub_field('article_source_text');?><br><a href="<?php the_sub_field('article_source_url'); ?>" target="_blank"><?php the_sub_field('article_source_url'); ?></a></li>
<?php endwhile; ?>
</ul>
</div>
<?php else : ?>
<?php endif; ?>