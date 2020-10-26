<?php

function insidesalarium_setup() {
	load_theme_textdomain( 'insidesalarium' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 267, 183, true );
	add_image_size( 'insidesalarium-featured-image', 2000, 1200, true );
	add_image_size( 'insidesalarium-thumbnail-avatar', 267, 183, true );

    //navigation menus
    register_nav_menus( 
        array(
            'primary' => 'Main Menu',
            'salariummenu' => 'Salarium Menu',
            'footercol1' => 'Footer Menu 1',
            'footercol2' => 'Footer Menu 2',
            'footercol3' => 'Footer Menu 3',
            'footercol4' => 'Footer Menu 4',
            'footercol5' => 'Footer Menu 5'
        )
    );
}
add_action( 'after_setup_theme', 'insidesalarium_setup' );
function insidesalarium_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Archive Sidebar', 'insidesalarium-sidebar' ),
            'id' => 'salarium-side-bar',
            'description' => __( 'Inside Salarium Sidebar 2019', 'insidesalarium-sidebar' ),
            'before_widget' => '',
            'after_widget' => "",
            'before_title' => '<h6>',
            'after_title' => '</h6>',
        )
    );
}
add_action( 'widgets_init', 'insidesalarium_sidebar' );

define('FS_METHOD', 'direct');
function insidesalarium_resources(){
    wp_enqueue_style('bootstrap-style', get_template_directory_uri(). '/assets/css/bootstrap.min.css');
    //wp_enqueue_style('bootstrap-grid', get_template_directory_uri(). '/assets/css/bootstrap-grid.min.css');
    //wp_enqueue_style('bootstrap-reboot', get_template_directory_uri(). '/assets/css/bootstrap-reboot.min.css');
    
    wp_enqueue_style('main-style', get_template_directory_uri(). '/assets/css/style.css');
    
	wp_register_script( 'jquery-min-js', get_template_directory_uri() . '/assets/js/new/jquery-slim.js', 'jquery' );
    wp_enqueue_script( 'jquery-min-js', 'jquery');
    wp_enqueue_script( 'popper-min-js', get_template_directory_uri() . '/assets/js/new/popper.js',array('jquery-min-js'), '1.0', true);
    wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri() . '/assets/js/bootstrap.js',array('jquery-min-js'), '1.0', true);
    //wp_enqueue_script( 'bootstrap-bundle-min-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',array('jquery-min-js'), '1.0', true);
    

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action('wp_enqueue_scripts', 'insidesalarium_resources');
function native_resize($url, $width, $height = null, $crop = null, $single = true) {
    //validate inputs
    if (!$url OR !$width)
        return false;
    //define upload path & dir
    $upload_info = wp_upload_dir();
    $upload_dir = $upload_info['basedir'];
    $upload_url = $upload_info['baseurl'];
    //check if $img_url is local
    if (strpos($url, $upload_url) === false)
        return false;
    //define path of image
    $rel_path = str_replace($upload_url, '', $url);
    $img_path = $upload_dir . $rel_path;
    //check if img path exists, and is an image indeed
    if (!file_exists($img_path) OR !getimagesize($img_path))
        return false;
    //get image info
    $info = pathinfo($img_path);
    $ext = $info['extension'];
    list($orig_w, $orig_h) = getimagesize($img_path);
    //get image size after cropping
    $dims = image_resize_dimensions($orig_w, $orig_h, $width, $height, $crop);
    $dst_w = $dims[4];
    $dst_h = $dims[5];
    //use this to check if cropped image already exists, so we can return that instead
    $suffix = "{$dst_w}x{$dst_h}";
    $dst_rel_path = str_replace('.' . $ext, '', $rel_path);
    $destfilename = "{$upload_dir}{$dst_rel_path}-{$suffix}.{$ext}";
    if (!$dst_h) {
    //can't resize, so return original url
        $img_url = $url;
        $dst_w = $orig_w;
        $dst_h = $orig_h;
    }
    //else check if cache exists
    elseif (file_exists($destfilename) && getimagesize($destfilename)) {
        $img_url = "{$upload_url}{$dst_rel_path}-{$suffix}.{$ext}";
    }
    //else, we resize the image and return the new resized image url
    else {
    // Note: pre-3.5 fallback check
        if (function_exists('wp_get_image_editor')) {
            $editor = wp_get_image_editor($img_path);
            if (is_wp_error($editor) || is_wp_error($editor->resize($width, $height, $crop)))
                return false;
            $resized_file = $editor->save();
            if (!is_wp_error($resized_file)) {
                $resized_rel_path = str_replace($upload_dir, '', $resized_file['path']);
                $img_url = $upload_url . $resized_rel_path;
            } else {
                return false;
            }
        } else {
            $resized_img_path = image_resize($img_path, $width, $height, $crop);
            if (!is_wp_error($resized_img_path)) {
                $resized_rel_path = str_replace($upload_dir, '', $resized_img_path);
                $img_url = $upload_url . $resized_rel_path;
            } else {
                return false;
            }
        }
    }
    //return the output
    if ($single) {
    //str return
        $image = $img_url;
    } else {
    //array return
        $image = array(
            0 => $img_url,
            1 => $dst_w,
            2 => $dst_h
        );
    }
    return $image;
}

 
// filter_hook function to react on sub_menu flag
function my_wp_nav_menu_objects_sub_menu( $sorted_menu_items, $args ) {
    if($args->theme_location == "sidemenu"){
      if ( isset( $args->sub_menu ) ) {
        $root_id = 0;

        // find the current menu item
        foreach ( $sorted_menu_items as $menu_item ) {
          if ( $menu_item->current ) {
            // set the root id based on whether the current menu item has a parent or not
            $root_id = ( $menu_item->menu_item_parent ) ? $menu_item->menu_item_parent : $menu_item->ID;
            break;
          }
        }

        // find the top level parent
        if ( ! isset( $args->direct_parent ) ) {
          $prev_root_id = $root_id;
          while ( $prev_root_id != 0 ) {
            foreach ( $sorted_menu_items as $menu_item ) {
              if ( $menu_item->ID == $prev_root_id ) {
                $prev_root_id = $menu_item->menu_item_parent;
                // don't set the root_id to 0 if we've reached the top of the menu
                if ( $prev_root_id != 0 ) $root_id = $menu_item->menu_item_parent;
                break;
              } 
            }
          }
        }

        $menu_item_parents = array();
        foreach ( $sorted_menu_items as $key => $item ) {
          // init menu_item_parents
          if ( $item->ID == $root_id ) $menu_item_parents[] = $item->ID;

          if ( in_array( $item->menu_item_parent, $menu_item_parents ) ) {
            // part of sub-tree: keep!
            $menu_item_parents[] = $item->ID;
          } else {
            // not part of sub-tree: away with it!
            unset( $sorted_menu_items[$key] );
          }
        }

        return $sorted_menu_items;
      } else {
        return $sorted_menu_items;
      }
    }else{
        return $sorted_menu_items;
    }
}

/**
 * To display number of posts.
 *
 * @param $postID current post/page id
 *
 * @return string
 */
function subh_get_post_view( $postID ) {
 $count_key = 'post_views_count';
 $count     = get_post_meta( $postID, $count_key, true );
 if ( $count == '' ) {
 delete_post_meta( $postID, $count_key );
 add_post_meta( $postID, $count_key, '0' );
 
 return '0 View';
 }
 
 return $count . ' Views';
}
 
/**
 * To count number of views and store in database.
 *
 * @param $postID currently viewed post/page
 */
function subh_set_post_view( $postID ) {
 $count_key = 'post_views_count';
 $count     = (int) get_post_meta( $postID, $count_key, true );
 if ( $count < 1 ) {
 delete_post_meta( $postID, $count_key );
 add_post_meta( $postID, $count_key, '0' );
 } else {
 $count++;
 update_post_meta( $postID, $count_key, (string) $count );
 }
}
 
/**
 * Add a new column in the wp-admin posts list
 *
 * @param $defaults
 *
 * @return mixed
 */
function subh_posts_column_views( $defaults ) {
 $defaults['post_views'] = __( 'Views' );
 
 return $defaults;
}
 
/**
 * Display the number of views for each posts
 *
 * @param $column_name
 * @param $id
 *
 * @return void simply echo out the number of views
 */
function subh_posts_custom_column_views( $column_name, $id ) {
 if ( $column_name === 'post_views' ) {
 echo subh_get_post_view( get_the_ID() );
 }
}
 
add_filter( 'manage_posts_columns', 'subh_posts_column_views' );
add_action( 'manage_posts_custom_column', 'subh_posts_custom_column_views', 5, 2 );

function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
function wpse_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'wpse_excerpt_length', 999 );

function excerpt_limit($limit, $postid) {
    $excerpt = explode(' ', get_the_excerpt($postid), $limit);
    if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      $excerpt = implode(" ",$excerpt).'...';
    } else {
      $excerpt = implode(" ",$excerpt);
    }	
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
  }
  function sal_get_the_excerpt($post_id) {
    global $post;  
    $save_post = $post;
    $post = get_post($post_id);
    $output = get_the_excerpt();
    $post = $save_post;
    return $output;
  }

class SalariumMenu_Walker extends Walker_Nav_Menu {

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu dropdown-menu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );
 
        // Build HTML for output.
        $output .= "\n" . $indent . '<ul class="' . $class_names . '" >' . "\n";
    }

 
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
 
        // Depth-dependent classes.
        // $depth_classes = array(
        //     ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
        //     ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
        //     ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
        //     'menu-item-depth-' . $depth
        // );
        // $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
        
 
        // Passed classes.
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
 
        // Build HTML.
        $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="nav-item dropdown ' . $depth_class_names .'">';
 


        if (in_array("menu-item-has-children", $classes)) {
            // Link attributes.
            $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
            $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
            $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
            $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
            $attributes .= ' class="nav-link dropdown-toggle" ';
            $attributes .= ' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ';
        }else{
            // Link attributes.
            $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
            $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
            $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
            $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
            $attributes .= ' class="nav-link menu-link ' . ( $depth > 0 ? 'sub-menu-link dropdown-item' : 'main-menu-link' ) . '"';
        }
        // Build HTML output and pass through the proper filter.
        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

class Footer_Walker extends Walker_Nav_Menu {

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );
 
        // Build HTML for output.
        $output .= "\n" . $indent . '<ul class="' . $class_names . '" >' . "\n";
    }

 
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
 
        // Depth-dependent classes.
        // $depth_classes = array(
        //     ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
        //     ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
        //     ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
        //     'menu-item-depth-' . $depth
        // );
        // $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
        
 
        // Passed classes.
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
 
        // Build HTML.
        $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names .'">';
 
            // Link attributes.
            $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
            $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
            $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
            $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
            $attributes .= ' class="nav-link menu-link ' . ( $depth > 0 ? 'sub-menu-link dropdown-item' : 'main-menu-link' ) . '"';

        // Build HTML output and pass through the proper filter.
        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}