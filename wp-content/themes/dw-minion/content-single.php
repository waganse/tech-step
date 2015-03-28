<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if( ! has_post_format('quote') ) : ?><h1 class="entry-title"><?php the_title(); ?></h1><?php endif; ?>
		<?php dw_minion_entry_meta(); ?>
	</header>
	<?php if( has_post_thumbnail() ) : ?>
	<div class="entry-thumbnail"><?php the_post_thumbnail(); ?></div>
	<?php endif; ?>
	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'dw-minion' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">',
				'after'  => '</div>',
				'link_before' => '<span class="btn btn-small">',
				'link_after'  => '</span>',
			) );
		?>
	</div>
	<?php endif; ?>
	<footer class="entry-footer">
		<?php
			$tags_list = get_the_tag_list();
			if ( $tags_list ) :
		?>
		<div class="entry-tags">
			<span class="tags-title"><?php _e('Tags', 'dw-minion') ?></span>
			<span class="tags-links"><?php printf( __( '%1$s', 'dw-minion' ), $tags_list ); ?></span>
		</div>
		<?php endif; ?>
	</footer>


<!-- Temporary Banner FROM HARE -->
<div style="margin-top:30px;">
<a href="http://px.a8.net/svt/ejp?a8mat=2HFMWM+1WGVCI+2GMK+NTZCH" target="_blank">
<img border="0" width="728" height="90" alt="" src="http://www22.a8.net/svt/bgt?aid=150215350115&wid=001&eno=01&mid=s00000011486004003000&mc=1"></a>
<img border="0" width="1" height="1" src="http://www10.a8.net/0.gif?a8mat=2HFMWM+1WGVCI+2GMK+NTZCH" alt="">
</div>

<div>
<a href="http://px.a8.net/svt/ejp?a8mat=25XZV9+6MQUCY+2JK4+ZWFS1" target="_blank">
<img border="0" width="728" height="90" alt="" src="http://www22.a8.net/svt/bgt?aid=130916565401&wid=001&eno=01&mid=s00000011866006030000&mc=1"></a>
<img border="0" width="1" height="1" src="http://www19.a8.net/0.gif?a8mat=25XZV9+6MQUCY+2JK4+ZWFS1" alt="">
</div>

<div>
<a href="http://px.a8.net/svt/ejp?a8mat=25TYX8+GEM0VM+1WP2+6DC69" target="_blank">
<img border="0" width="728" height="90" alt="" src="http://www24.a8.net/svt/bgt?aid=130728716992&wid=001&eno=01&mid=s00000008903001070000&mc=1"></a>
<img border="0" width="1" height="1" src="http://www15.a8.net/0.gif?a8mat=25TYX8+GEM0VM+1WP2+6DC69" alt="">
</div>

</article>