<?php
// Meta Box Class: Page Options
// Get the field value: $metavalue = get_post_meta( $post_id, $field_id, true );
class pageoptionsMetabox {

	private $screen = array(
		'page',
	);

	private $meta_fields = array(
		array(
			'label' => 'Full-Width Content',
			'id' => 'full-width',
			'default' => '0',
			'type' => 'checkbox',
		),
		array(
			'label' => 'Show Services Sidebar',
			'id' => 'show_service_sidebar',
			'default' => '0',
			'type' => 'checkbox',
		),
		array(
			'label' => 'Hide Page Title',
			'id' => 'hide_page_title',
			'default' => '0',
			'type' => 'checkbox',
		),
		array(
			'label' => 'Related Posts Category',
			'id' => 'related_posts',
			'type' => 'categories',
		),
	);

	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_fields' ) );
	}

	public function add_meta_boxes() {
		foreach ( $this->screen as $single_screen ) {
			add_meta_box(
				'pageoptions',
				__( 'Page Options', 'textdomain' ),
				array( $this, 'meta_box_callback' ),
				$single_screen,
				'normal',
				'high'
			);
		}
	}

	public function meta_box_callback( $post ) {
		wp_nonce_field( 'pageoptions_data', 'pageoptions_nonce' );
		$this->field_generator( $post );
	}

	public function field_generator( $post ) {
		$output = '';
		foreach ( $this->meta_fields as $meta_field ) {
			$label = '<label for="' . $meta_field['id'] . '">' . $meta_field['label'] . '</label>';
			$meta_value = get_post_meta( $post->ID, $meta_field['id'], true );
			if ( empty( $meta_value ) ) {
				if ( isset( $meta_field['default'] ) ) {
					$meta_value = $meta_field['default'];
				}
			}
			switch ( $meta_field['type'] ) {
				case 'checkbox':
					$input = sprintf(
						'<input %s id=" %s" name="%s" type="checkbox" value="1">',
						$meta_value === '1' ? 'checked' : '',
						$meta_field['id'],
						$meta_field['id']
						);
					break;
				case 'categories':
					$categoriesargs = array(
						'selected' => $meta_value,
						'hide_empty' => 0,
						'echo' => 0,
						'name' => $meta_field['id'],
						'id' => $meta_field['id'],
						'show_option_none' => 'Select a category',
					);
					$input = wp_dropdown_categories($categoriesargs);
					break;
				default:
					$input = sprintf(
						'<input %s id="%s" name="%s" type="%s" value="%s">',
						$meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
						$meta_field['id'],
						$meta_field['id'],
						$meta_field['type'],
						$meta_value
					);
			}
			$output .= $this->format_rows( $label, $input );
		}
		echo '<table><tbody>' . $output . '</tbody></table>';
	}

	public function format_rows( $label, $input ) {
		return '<tr><th>'.$label.'</th><td>'.$input.'</td></tr>';
	}

	public function save_fields( $post_id ) {
		if ( ! isset( $_POST['pageoptions_nonce'] ) )
			return $post_id;
		$nonce = $_POST['pageoptions_nonce'];
		if ( !wp_verify_nonce( $nonce, 'pageoptions_data' ) )
			return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;
		foreach ( $this->meta_fields as $meta_field ) {
			if ( isset( $_POST[ $meta_field['id'] ] ) ) {
				switch ( $meta_field['type'] ) {
					case 'email':
						$_POST[ $meta_field['id'] ] = sanitize_email( $_POST[ $meta_field['id'] ] );
						break;
					case 'text':
						$_POST[ $meta_field['id'] ] = sanitize_text_field( $_POST[ $meta_field['id'] ] );
						break;
				}
				update_post_meta( $post_id, $meta_field['id'], $_POST[ $meta_field['id'] ] );
			} else if ( $meta_field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, $meta_field['id'], '0' );
			}
		}
	}
}

if (class_exists('pageoptionsMetabox')) {
	new pageoptionsMetabox;
};