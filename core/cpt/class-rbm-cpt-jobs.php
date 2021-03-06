<?php

/**
 * Class RBM_CPT_Jobs
 *
 * Creates the post type.
 *
 * @since {{VERSION}}
 */
class RBM_CPT_Jobs extends RBM_CPT {

	public $post_type = 'jobs';
	public $label_singular = null;
	public $label_plural = null;
	public $labels = array();
	public $icon = 'admin-post';
	public $post_args = array(
		'hierarchical' => false,
		'supports'     => array( 'title', 'editor', 'author' ),
		'has_archive'  => true,
		'rewrite'      => array(
			'slug'       => 'jobs',
			'with_front' => false,
			'feeds'      => false,
			'pages'      => true
		),
	);

	/**
	 * RBM_CPT_Jobs constructor.
	 *
	 * @since {{VERSION}}
	 */
	function __construct() {

		// This allows us to Localize the Labels
		$this->label_singular = __( 'Job', RBM_Jobs_CPT_ID );
		$this->label_plural   = __( 'Jobs', RBM_Jobs_CPT_ID );

		$this->labels = array(
			'menu_name' => __( 'Jobs', RBM_Jobs_CPT_ID ),
			'all_items' => __( 'All Jobs', RBM_Jobs_CPT_ID ),
		);

		parent::__construct();
		
	}
}