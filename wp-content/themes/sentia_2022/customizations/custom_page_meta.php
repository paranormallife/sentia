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
 $diwp_selectfield = get_post_meta( $post->ID, 'featured_testimonial', true);
 $diwp_selectfield_2 = get_post_meta( $post->ID, 'related_posts', true);
  
?>
  

<div class="row">
 <label>Featured Testimonial</label>
 <div class="fields">
     <select name="featured_testimonial">
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
    <select name="related_posts">
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
 
    if(isset($_POST["featured_testimonial"])) :
    update_post_meta($post->ID, 'featured_testimonial', $_POST["featured_testimonial"]);
    endif;
 
    if(isset($_POST["related_posts"])) :
    update_post_meta($post->ID, 'related_posts', $_POST["related_posts"]);
    endif;
 
}
 
add_action('save_post', 'diwp_save_multiple_fields_metabox');