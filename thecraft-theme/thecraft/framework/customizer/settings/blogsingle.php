<?php
/**
 * Blog Single setting for Customizer
 *
 * @package thecraft
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Blog Single General
$this->sections['wprt_blog_single_general'] = array(
	'title' => esc_html__( 'General', 'thecraft' ),
	'panel' => 'wprt_blogsingle',
	'settings' => array(
		array(
			'id' => 'wprt_blog_single_media_heading',
			'control' => array(
				'type' => 'wprt-heading',
				'label' => esc_html__( 'Media', 'thecraft' ),
			),
		),
		array(
			'id' => 'blog_single_media',
			'default' => true,
			'control' => array(
				'label' => esc_html__( 'Enable Post Media on Single Post', 'thecraft' ),
				'type' => 'checkbox',
			),
		),
		array(
			'id' => 'wprt_blog_single_meta_heading',
			'control' => array(
				'type' => 'wprt-heading',
				'label' => esc_html__( 'Meta', 'thecraft' ),
			),
		),
		array(
			'id' => 'blog_single_meta',
			'default' => true,
			'control' => array(
				'label' => esc_html__( 'Enable Post Meta on Single Post', 'thecraft' ),
				'type' => 'checkbox',
			),
		),
		array(
			'id' => 'blog_single_meta_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Meta Margin', 'thecraft' ),
				'description' => esc_html__( 'Top Right Bottom Left.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-content-single-wrap .post-meta',
				'alter' => 'margin',
			),
		),
		array(
			'id' => 'wprt_blog_single_title_heading',
			'control' => array(
				'type' => 'wprt-heading',
				'label' => esc_html__( 'Title', 'thecraft' ),
			),
		),
		array(
			'id' => 'blog_single_title',
			'default' => true,
			'control' => array(
				'label' => esc_html__( 'Enable Post Title on Single Post', 'thecraft' ),
				'type' => 'checkbox',
			),
		),
		array(
			'id' => 'blog_single_title_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Title Margin', 'thecraft' ),
				'description' => esc_html__( 'Top Right Bottom Left. Default: 0 0 10px 0.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-content-single-wrap .post-title',
				'alter' => 'margin',
			),
		),
		array(
			'id' => 'blog_single_title_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Title Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => array(
					'.hentry .post-content-single-wrap .post-title'
				),
				'alter' => 'color',
			),
		),
		array(
			'id' => 'wprt_blog_single_tags_heading',
			'control' => array(
				'type' => 'wprt-heading',
				'label' => esc_html__( 'Tags', 'thecraft' ),
			),
		),
		array(
			'id' => 'blog_single_tags',
			'default' => true,
			'control' => array(
				'label' => esc_html__( 'Enable Post Tags on Single Post', 'thecraft' ),
				'type' => 'checkbox',
			),
		),
		array(
			'id' => 'wprt_blog_single_nav_header',
			'control' => array(
				'type' => 'wprt-heading',
				'label' => esc_html__( 'Post Navigation', 'thecraft' ),
			),
		),
		array(
			'id' => 'wprt_blog_single_nav',
			'default' => true,
			'control' => array(
				'label' => esc_html__( 'Enable Post Navigation on Single Post', 'thecraft' ),
				'type' => 'checkbox',
			),
		),
	),
);

// Blog Single Post Author
$this->sections['wprt_blog_single_post_author'] = array(
	'title' => esc_html__( 'Blog Single Post - Author', 'thecraft' ),
	'panel' => 'wprt_blogsingle',
	'settings' => array(
		array(
			'id' => 'blog_single_author_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Margin', 'thecraft' ),
				'description' => esc_html__( 'Top Right Bottom Left.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-author',
				'alter' => 'margin',
			),
		),
		array(
			'id' => 'blog_single_author_name_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Name Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-author .name',
				'alter' => 'color',
			),
		),
		array(
			'id' => 'blog_single_author_text_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Text Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-author .author-desc > p',
				'alter' => 'color',
			),
		),
		array(
			'id' => 'blog_single_author_avatar_width',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Image Width', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => array(
					'.hentry .post-author .author-avatar',
					'.hentry .post-author .author-avatar a'
				),
				'alter' => 'width',
			),
		),
		array(
			'id' => 'blog_single_author_avatar_margin_right',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Image Right Margin', 'thecraft' ),
				'description' => esc_html__( 'Example: 40px.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-author .author-avatar',
				'alter' => 'margin-right',
			),
		),
	),
);

// Blog Single Comment
$this->sections['wprt_blog_single_post_comment'] = array(
	'title' => esc_html__( 'Blog Single Post - Comment', 'thecraft' ),
	'panel' => 'wprt_blogsingle',
	'settings' => array(
		array(
			'id' => 'heading_comment_title',
			'control' => array(
				'type' => 'wprt-heading',
				'label' => esc_html__( 'Title', 'thecraft' ),
			),
		),
		array(
			'id' => 'blog_single_comment_title_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Title Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => array(
					'.comments-area .comments-title',
					'.comments-area .comment-reply-title'
				),
				'alter' => 'color',
			),
		),
		array(
			'id' => 'blog_single_comment_title_margin_bottom',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Title Bottom Margin', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => array(
					'.comments-area .comments-title',
					'.comments-area .comment-reply-title'
				),
				'alter' => 'margin-bottom',
			),
		),
		// Comment List
		array(
			'id' => 'heading_comment_list',
			'control' => array(
				'type' => 'wprt-heading',
				'label' => esc_html__( 'Comment List', 'thecraft' ),
			),
		),
		array(
			'id' => 'blog_single_comment_avatar_width',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Avatar Width', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.comment-list article .gravatar',
				'alter' => 'width',
			),
		),
		array(
			'id' => 'blog_single_comment_avatar_margin_right',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Avatar Right Margin', 'thecraft' ),
				'description' => esc_html__( 'Example: 30px.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.comment-list article .gravatar',
				'alter' => 'margin-right',
			),
		),
		array(
			'id' => 'blog_single_comment_avatar_rounded',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Avatar Rounded', 'thecraft' ),
				'description' => esc_html__( 'Example: 10px. 0px is square.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.comment-list article .gravatar',
				'alter' => 'border-radius',
			),
		),
		array(
			'id' => 'blog_single_comment_article_margin_bottom',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Article Bottom Margin', 'thecraft' ),
				'description' => esc_html__( 'Example: 40px.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.comment-list article',
				'alter' => 'margin-bottom',
			),
		),
		array(
			'id' => 'blog_single_comment_name_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Name Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.comment-author, .comment-author a',
				'alter' => 'color',
			),
		),
		// Comment Form
		array(
			'id' => 'heading_comment_form',
			'control' => array(
				'type' => 'wprt-heading',
				'label' => esc_html__( 'Comment Form', 'thecraft' ),
			),
		),
		array(
			'id' => 'blog_single_comment_form_border_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Form Border Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.name-wrap input, .email-wrap input, .message-wrap textarea',
				'alter' => 'border-color',
			),
		),
		array(
			'id' => 'blog_single_comment_form_rounded',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Form Rounded', 'thecraft' ),
				'description' => esc_html__( 'Example: 3px. 0px is square.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.name-wrap input, .email-wrap input, .message-wrap textarea',
				'alter' => 'border-radius',
			),
		),
		array(
			'id' => 'blog_single_comment_form_border_width',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Form Border Width', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.name-wrap input, .email-wrap input, .message-wrap textarea',
				'alter' => 'border-width',
			),
		),
	),
);


