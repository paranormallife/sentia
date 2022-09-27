<?php
function diwp_metabox_mutiple_fields(){
 
 add_meta_box(
         'diwp-metabox-multiple-fields',
         'Page Meta',
         'diwp_add_multiple_fields',
         'page'
     );
}

add_action('add_meta_boxes', 'diwp_metabox_mutiple_fields');

function diwp_add_multiple_fields(){

 global $post;

 // Get Value of Fields From Database
 $diwp_selectfield = get_post_meta( $post->ID, '_diwp_select_field', true);
 $diwp_selectfield_2 = get_post_meta( $post->ID, '_diwp_select_field_2', true);
  
?>
  

<div class="row">
 <label>Featured Testimonial</label>
 <div class="fields">
     <select name="_diwp_select_field">
        <option value="null" <?php if($diwp_selectfield == 'null' ) echo 'selected'; ?>>Select a Testimonial</option>
         <?php
            $testimonials = get_posts( array(
                'numberposts' => -1,
                'post_type' => 'testimonial'
            ) );
            foreach ( $testimonials as $testimonial ) : ?>
                <option value="<?= $testimonial->ID; ?>" <?php if($diwp_selectfield == $testimonial->ID ) echo 'selected'; ?>><?= get_the_title( $testimonial->ID ); ?></option>
            <?php endforeach; ?>
     </select>
 </div>
</div>

<br/>
  
<div class="row">
<label>Related Posts Category</label>
<div class="fields">
    <select name="_diwp_select_field_2">
        <option value="null" <?php if($diwp_selectfield_2 == 'null' ) echo 'selected'; ?>>Select a Category</option>
        <?php
            $categories = get_categories( array(
                'orderby' => 'name',
                'order' => 'ASC'
            ) );
            foreach ( $categories as $category ) : ?>
                <option value="<?= $category->term_id; ?>" <?php if($diwp_selectfield_2 == $category->term_id ) echo 'selected'; ?>><?= $category->name; ?></option>
            <?php endforeach; ?>
    </select>
</div>
</div>

<?php    
}

// Now Save these multiple fields value in the Database
 
function diwp_save_multiple_fields_metabox(){
 
    global $post;
 
    if(isset($_POST["_diwp_select_field"])) :
    update_post_meta($post->ID, '_diwp_select_field', $_POST["_diwp_select_field"]);
    endif;
 
    if(isset($_POST["_diwp_select_field_2"])) :
    update_post_meta($post->ID, '_diwp_select_field_2', $_POST["_diwp_select_field_2"]);
    endif;
 
}
 
add_action('save_post', 'diwp_save_multiple_fields_metabox');