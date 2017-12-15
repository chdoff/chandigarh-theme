<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    if ( is_sticky() && is_home() ) :
        echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
    endif;
    ?>
    <div class="post-thumb">
	    <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
                	<?php the_post_thumbnail('chandigarh-thumb'); ?>
                </a>
            </div><!-- .post-thumbnail -->
        <?php endif; ?>
    </div>

    <div class="post-content">
        <div class="entry-content">
           <header class="entry-header">
				<h1 class="entry-title title-font">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?>
						</a>
				</h1>
               <?php if ( 'post' === get_post_type() ) {
               echo '<div class="entry-meta">';
                   if ( is_single() ) {
                   twentyseventeen_posted_on();
                   } else {
                   echo twentyseventeen_time_link();
                   twentyseventeen_edit_link();
                   };
                   echo '</div><!-- .entry-meta -->';
               };?>
               <span class="entry-excerpt"><?php echo substr(get_the_excerpt(),0,300).(get_the_excerpt() ? "..." : "chandigarh-official" ); ?></span>
               <span class="readmore"><a href="<?php the_permalink() ?>"><?php _e('View Post','chandigarh'); ?></a></span>
           </header><!-- .entry-header -->
        </div><!-- .entry-content -->
    </div>
    <?php
    if ( is_single() ) {
        twentyseventeen_entry_footer();
    }
    ?>

</article><!-- #post-## -->
