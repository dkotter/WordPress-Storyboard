<?php

// get active theme directory name
$theme_name = next(explode('/themes/', get_template_directory()));

include_once('lib/metabox/metaboxes.php');
include_once('includes/dkk-admin.php');
include_once('includes/dkk-cleanup.php');
include_once('includes/dkk-htaccess.php');

if ( ! isset( $content_width ) )
	$content_width = 650;

function dkk_setup() {
	load_theme_textdomain( 'storyboard', TEMPLATEPATH . '/languages' );
	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );
		
	// tell the TinyMCE editor to use editor-style.css
	add_editor_style('editor-style.css');
	
	// http://codex.wordpress.org/Post_Thumbnails
	add_theme_support( 'post-thumbnails' );
  /*set_post_thumbnail_size( 158, 106, true );*/
  
}

add_action('after_setup_theme', 'dkk_setup');

add_theme_support( 'automatic-feed-links' );

// Register Widgetized Sidebar Areas
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Sidebar'
	));

if ( ! function_exists( 'twentyeleven_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyeleven_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'storyboard' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'storyboard' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
						$avatar_size = 68;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 39;

						echo get_avatar( $comment, $avatar_size );

						/* translators: 1: comment author, 2: date and time */
						printf( __( '%1$s on %2$s <span class="says">said:</span>', 'storyboard' ),
							sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
							sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( __( '%1$s at %2$s', 'storyboard' ), get_comment_date(), get_comment_time() )
							)
						);
					?>

					<?php edit_comment_link( __( 'Edit', 'storyboard' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'storyboard' ); ?></em>
					<br />
				<?php endif; ?>

			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'storyboard' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for twentyeleven_comment()

add_filter( 'comment_form_defaults', 'dkk_comment_form_defaults' );

function dkk_comment_form_defaults( $defaults ) {
	$defaults['comment_notes_after'] = '';
	return $defaults;
}

?>