<?php

if ( ! class_exists( 'Timber' ) ) {
	add_action( 'admin_notices', function() {
			echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
		} );
	return;
}

Timber::$dirname = array('templates', 'views');

class StarterSite extends TimberSite {

	function __construct() {
		add_theme_support( 'post-formats' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menus' );
		add_filter( 'timber_context', array( $this, 'add_to_context' ) );
		add_filter( 'comment_form_default_fields', array( $this, 'bootstrap3_comment_form_fields' ) );
		add_filter( 'comment_form_defaults', array( $this, 'bootstrap3_comment_form' ) );
		add_filter( 'get_twig', array( $this, 'add_to_twig' ) );
		add_action( 'init', array( $this, 'register_post_types' ) );
		add_action( 'init', array( $this, 'register_taxonomies' ) );
		add_action( 'init', array( $this, 'register_my_menu' ) );
		add_action( 'customize_register', [$this, 'cdtheme_customizer']);
		parent::__construct();
	}

	function register_my_menu() {
		register_nav_menu('main-menu', __( 'Main Menu' ));
	}

	function bootstrap3_comment_form_fields( $fields ) {
	    $commenter = wp_get_current_commenter();

	    $req      = get_option( 'require_name_email' );
	    $aria_req = ( $req ? " aria-required='true'" : '' );
	    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;

	    $fields   =  array(
	        'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
	                    '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
	        'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
	                    '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
	        'url'    => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website' ) . '</label> ' .
	                    '<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>'
	    );

	    return $fields;
	}

	function bootstrap3_comment_form( $args ) {
	    $args['comment_field'] = '<div class="form-group comment-form-comment">
	            <label for="comment">' . _x( 'Comment', 'noun' ) . '</label>
	            <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
	        </div>';
	    $args['class_submit'] = 'btn btn-default'; // since WP 4.1

	    return $args;
	}

	function register_post_types() {
		//this is where you can register custom post types
	}

	function register_taxonomies() {
		//this is where you can register custom taxonomies
	}

	function add_to_context( $context ) {
		$context['menu'] = new TimberMenu('main-menu');
		$context['site'] = $this;

		$context['posts'] = Timber::get_posts();
		$context['pagination'] = Timber::get_pagination();
		$context['categories'] = Timber::get_terms('category');
		$context['theme_options'] = get_theme_mods();

		return $context;
	}

	function myfoo( $text ) {
		$text .= ' bar!';
		return $text;
	}

	function add_to_twig( $twig ) {
		/* this is where you can add your own fuctions to twig */
		$twig->addExtension( new Twig_Extension_StringLoader() );
		$twig->addFilter('myfoo', new Twig_SimpleFilter('myfoo', array($this, 'myfoo')));
		return $twig;
	}

	/**
	 * Adds the individual sections, settings, and controls to the theme customizer
	 */
	function cdtheme_customizer( $wp_customize ) {
		$this->set_postal_address_section($wp_customize);
		$this->set_social_accounts_section($wp_customize);

	}

	function set_postal_address_section($wp_customize) {
		$defaults = [
			'CoderDojo Foundation,',
			'Dogpatch Labs Unit 1,',
			'The CHQ building,',
			'Custom House Quay,',
			'Dublin 1, Ireland'
		];
		$wp_customize->add_section(
			'postal_address',
				[
					'title' => 'Postal address',
					'description' => 'Set your postal address',
					'priority' => 35,
				]
		);

		foreach($defaults as $i => $value) {
			$wp_customize->add_setting(
					'postal_line'.($i+1), ['default' => $value]
			);

			$wp_customize->add_control(
				'postal_line'.($i+1),
				[
					'label' => 'Line '.($i+1),
					'section' => 'postal_address',
					'type' => 'text',
				]
			);
		}
	}

	function set_social_accounts_section($wp_customize) {
		$accounts = [
			[
				'label' => 'Twitter',
				'slug' => 'twitter',
				'default' => ''
			],
			[
				'label' => 'Facebook',
				'slug' => 'facebook',
				'default' => ''
			],
			[
				'label' => 'Google+',
				'slug' => 'googleplus',
				'default' => ''
			],
			[
				'label' => 'LinkedIn',
				'slug' => 'linkedin',
				'default' => ''
			],
			[
				'label' => 'Contact page',
				'slug' => 'contact_url',
				'default' => '/contact'
			],
		];
		$wp_customize->add_section(
			'social_accounts',
			[
				'title' => 'Social accounts',
				'description' => 'Leave empty to hide',
				'priority' => 36,
			]
		);

		foreach($accounts as $account) {
			$wp_customize->add_setting('online_'.$account['slug'], ['default' => $account['default']]);

			$wp_customize->add_control(
				'online_'.$account['slug'],
				[
					'label' => $account['label'],
					'section' => 'social_accounts',
					'type' => 'text',
				]
			);
		}
	}

}

new StarterSite();
