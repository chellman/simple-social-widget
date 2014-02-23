<?php
/*
Plugin Name: Simple Social Widgets
Plugin URI: http://www.shooflydesign.org/
Description: Creates a simple social network widget
Author: Joe Chellman
Author URI: http://www.shooflydesign.org/
Version: 1.0
*/

function simplesocial_widget_scripts() {
	wp_enqueue_style( 'simple-social', plugins_url( 'simple-social.css' , __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'simplesocial_widget_scripts' );

class Simple_Social_Widget extends WP_Widget {

  function Simple_Social_Widget() {
  	$widget_ops = array('classname' => 'Simple_Social_Widget', 'description' => 'Simple Social Widget');
    $this->WP_Widget('Simple_Social_Widget', 'Simple Social Widget', $widget_ops);
  }
  
  function form($instance) {
  	$instance = wp_parse_args((array) $instance, array(
  		'title' => '',
  		'twitter_url' => '',
  		'fb_url' => '',
  		'gplus_url' => '',
  		'pinterest_url' => '',
  		'linkedin_url' => '',
  		'youtube_url' => '',
  		'instagram_url' => '',
  	));
  	
  	$title = $instance['title'];
    $twitter_url = $instance['twitter_url'];
    $fb_url = $instance['fb_url'];
    $gplus_url = $instance['gplus_url'];
    $pinterest_url = $instance['pinterest_url'];
    $linkedin_url = $instance['linkedin_url'];
    $youtube_url = $instance['youtube_url'];
    $instagram_url = $instance['instagram_url'];
?>
	<p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" placeholder="Follow us" /></label></p>
  
  <p>
  	<label for="<?php echo $this->get_field_id('twitter_url'); ?>">
  		Twitter URL: <input class="widefat" id="<?php echo $this->get_field_id('twitter_url'); ?>" name="<?php echo $this->get_field_name('twitter_url'); ?>" type="text" value="<?php echo attribute_escape($twitter_url); ?>" placeholder="https://twitter.com/" />
  	</label>
  </p>
  
  <p>
  	<label for="<?php echo $this->get_field_id('fb_url'); ?>">
  		Facebook URL: <input class="widefat" id="<?php echo $this->get_field_id('fb_url'); ?>" name="<?php echo $this->get_field_name('fb_url'); ?>" type="text" value="<?php echo attribute_escape($fb_url); ?>" placeholder="https://facebook.com/" />
  	</label>
  </p>
  
  <p>
  	<label for="<?php echo $this->get_field_id('gplus_url'); ?>">
  		Google+ URL: <input class="widefat" id="<?php echo $this->get_field_id('gplus_url'); ?>" name="<?php echo $this->get_field_name('gplus_url'); ?>" type="text" value="<?php echo attribute_escape($gplus_url); ?>" placeholder="https://plus.google.com/" />
  	</label>
  </p>
  
  <p>
  	<label for="<?php echo $this->get_field_id('pinterest_url'); ?>">
  		Pinterest URL: <input class="widefat" id="<?php echo $this->get_field_id('pinterest_url'); ?>" name="<?php echo $this->get_field_name('pinterest_url'); ?>" type="text" value="<?php echo attribute_escape($pinterest_url); ?>" placeholder="https://pinterest.com/" />
  	</label>
  </p>
  
  <p>
  	<label for="<?php echo $this->get_field_id('linkedin_url'); ?>">
  		LinkedIn URL: <input class="widefat" id="<?php echo $this->get_field_id('linkedin_url'); ?>" name="<?php echo $this->get_field_name('linkedin_url'); ?>" type="text" value="<?php echo attribute_escape($linkedin_url); ?>" placeholder="https://linkedin.com/" />
  	</label>
  </p>
  
  <p>
  	<label for="<?php echo $this->get_field_id('youtube_url'); ?>">
  		YouTube URL: <input class="widefat" id="<?php echo $this->get_field_id('youtube_url'); ?>" name="<?php echo $this->get_field_name('youtube_url'); ?>" type="text" value="<?php echo attribute_escape($youtube_url); ?>" placeholder="https://youtube.com/" />
  	</label>
  </p>
  
  <p>
  	<label for="<?php echo $this->get_field_id('instagram_url'); ?>">
  		Instagram URL: <input class="widefat" id="<?php echo $this->get_field_id('instagram_url'); ?>" name="<?php echo $this->get_field_name('instagram_url'); ?>" type="text" value="<?php echo attribute_escape($instagram_url); ?>" placeholder="http://instagram.com/" />
  	</label>
  </p>
<?php
  }
  
  function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = $new_instance['title'];
		$instance['twitter_url'] = $new_instance['twitter_url'];
		$instance['fb_url'] = $new_instance['fb_url'];
		$instance['gplus_url'] = $new_instance['gplus_url'];
		$instance['pinterest_url'] = $new_instance['pinterest_url'];
		$instance['linkedin_url'] = $new_instance['linkedin_url'];
		$instance['youtube_url'] = $new_instance['youtube_url'];
		$instance['instagram_url'] = $new_instance['instagram_url'];
		
		return $instance;
  }
  
  function widget($args, $instance) {
  	extract($args, EXTR_SKIP);
 
    echo $before_widget;
    
    $title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
    
    $twitter_url = empty($instance['twitter_url']) ? '' : esc_url($instance['twitter_url'], array('http', 'https'));
    $fb_url = empty($instance['fb_url']) ? '' : esc_url($instance['fb_url'], array('http', 'https'));
    $gplus_url = empty($instance['gplus_url']) ? '' : esc_url($instance['gplus_url'], array('http', 'https'));
    $pinterest_url = empty($instance['pinterest_url']) ? '' : esc_url($instance['pinterest_url'], array('http', 'https'));
    $linkedin_url = empty($instance['linkedin_url']) ? '' : esc_url($instance['linkedin_url'], array('http', 'https'));
    $youtube_url = empty($instance['youtube_url']) ? '' : esc_url($instance['youtube_url'], array('http', 'https'));
    $instagram_url = empty($instance['instagram_url']) ? '' : esc_url($instance['instagram_url'], array('http', 'https'));
 
    if (!empty($title)) echo $before_title . $title . $after_title;
 
    if (!empty($twitter_url)) print '<div class="link twitter"><a href="'.$twitter_url.'" target="_blank">Twitter</a></div>';
    if (!empty($fb_url)) print '<div class="link facebook"><a href="'.$fb_url.'" target="_blank">Facebook</a></div>';
    if (!empty($gplus_url)) print '<div class="link gplus"><a href="'.$gplus_url.'" target="_blank">Google+</a></div>';
    if (!empty($pinterest_url)) print '<div class="link pinterest"><a href="'.$pinterest_url.'" target="_blank">Pinterest</a></div>';
    if (!empty($linkedin_url)) print '<div class="link linkedin"><a href="'.$linkedin_url.'" target="_blank">LinkedIn</a></div>';
    if (!empty($youtube_url)) print '<div class="link youtube"><a href="'.$youtube_url.'" target="_blank">YouTube</a></div>';
    if (!empty($instagram_url)) print '<div class="link instagram"><a href="'.$instagram_url.'" target="_blank">Instagram</a></div>';
 
    echo $after_widget;
  }
}
add_action( 'widgets_init', create_function('', 'return register_widget("Simple_Social_Widget");') );