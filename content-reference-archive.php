<?php namespace DevHub;
/**
 * The template used for displaying reference content in archive.php & search.php
 *
 * @package wporg-developer
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

	<div class="description">
		<?php the_excerpt(); ?>
	</div>
	<div class="sourcefile">
		<p>Source: <?php echo get_source_file(); ?>:<?php echo get_line_number(); ?></p>
	</div>

	<?php
		$used_by = get_used_by()->post_count;
		$uses    = get_uses()->post_count;
	?>
	<div class="meta">
		Used by <a href="<?php the_permalink(); ?>#usage"><?php printf( _n( '1 function', '%d functions', $used_by ), $used_by ); ?></a>
		|
		Uses <a href="<?php the_permalink(); ?>#usage"><?php printf( _n( '1 function', '%d functions', $uses ), $uses ); ?></a>
		<?php /*
		|
		<a href="<?php the_permalink(); ?>#examples">2 examples</a>
		*/ ?>
	</div>
</article>