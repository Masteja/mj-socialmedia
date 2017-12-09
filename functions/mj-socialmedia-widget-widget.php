<?php

/* Register Widget */
add_action('widgets_init', 'mj_socialmedia_register_widgets');

function mj_socialmedia_register_widgets() {
    register_widget('mj_socialmedia_widget');
}

class mj_socialmedia_widget extends WP_Widget {

    function __construct() {
        $widget_ops = array(
            'classname' => 'mj_socialmedia_widget_class',
            'description' => 'MJ Social Media Links'
        );
        parent::__construct('mj_socialmedia_widget_widget', 'MJ Social Media Widget', $widget_ops);
    }

    function form($mj_socialmedia_instance) {
        $defaults = array('facebook' => '', 'twitter' => '' , 'youtube' => '' , 'googleplus' => '', 'instagram' => '','pinterest' => '', 'snapchat' => '' ,'linkedin' => '','xing' => '');
        $mj_socialmedia_instance = wp_parse_args((array) $mj_socialmedia_instance, $defaults);
        $mj_socialmedia_facebook = $mj_socialmedia_instance['facebook'];
        $mj_socialmedia_twitter = $mj_socialmedia_instance['twitter'];
        $mj_socialmedia_youtube = $mj_socialmedia_instance['youtube'];
        $mj_socilamedia_googleplus = $mj_socialmedia_instance['googleplus'];
        $mj_socialmedia_instagram = $mj_socialmedia_instance['instagram'];
        $mj_socialmedia_pinterest = $mj_socialmedia_instance['pinterest'];
        $mj_socialmedia_snapchat = $mj_socialmedia_instance['snapchat'];
        $mj_socialmedia_linkedin = $mj_socialmedia_instance['linkedin'];
        $mj_socialmedia_xing = $mj_socialmedia_instance['xing'];
        ?>
        <p>Facebook Link: <input class="widefat" name="<?php echo $this->get_field_name('facebook'); ?>" type="text"
                                 value="<?php echo esc_attr($mj_socialmedia_facebook); ?>" /></p>
        <p>Twitter Link: <input class="widefat" name="<?php echo $this->get_field_name('twitter'); ?>" type="text"
                                value="<?php echo esc_attr($mj_socialmedia_twitter); ?>" /></p>
        <p>Youtube Link: <input class="widefat" name="<?php echo $this->get_field_name('youtube'); ?>" type="text"
                                value="<?php echo esc_attr($mj_socialmedia_youtube); ?>" /></p>
        <p>Google + Link: <input class="widefat" name="<?php echo $this->get_field_name('googleplus'); ?>" type="text"
                                 value="<?php echo esc_attr($mj_socilamedia_googleplus); ?>" /></p>
        <p>Instagram Link: <input class="widefat" name="<?php echo $this->get_field_name('instagram'); ?>" type="text"
                                  value="<?php echo esc_attr($mj_socialmedia_instagram); ?>" /></p>
        <p>Pinterest Link: <input class="widefat" name="<?php echo $this->get_field_name('pinterest'); ?>" type="text"
                                  value="<?php echo esc_attr($mj_socialmedia_pinterest); ?>" /></p>
        <p>Snapchat Link: <input class="widefat" name="<?php echo $this->get_field_name('snapchat'); ?>" type="text"
                                  value="<?php echo esc_attr($mj_socialmedia_snapchat); ?>" /></p>
        <p>Linkedin Link: <input class="widefat" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text"
                                 value="<?php echo esc_attr($mj_socialmedia_linkedin); ?>" /></p>
        <p>Xing Link: <input class="widefat" name="<?php echo $this->get_field_name('xing'); ?>" type="text"
                             value="<?php echo esc_attr($mj_socialmedia_xing); ?>" /></p>
        <?php
    }

    function update($new_instance, $old_instance) {
        $mj_socialmedia_instance = $old_instance;
        $mj_socialmedia_instance['facebook'] = strip_tags($new_instance['facebook']);
        $mj_socialmedia_instance['twitter'] = strip_tags($new_instance['twitter']);
        $mj_socialmedia_instance['youtube'] = strip_tags($new_instance['youtube']);
        $mj_socialmedia_instance['googleplus'] = strip_tags($new_instance['googleplus']);
        $mj_socialmedia_instance['instagram'] = strip_tags($new_instance['instagram']);
        $mj_socialmedia_instance['pinterest'] = strip_tags($new_instance['pinterest']);
        $mj_socialmedia_instance['snapchat'] = strip_tags($new_instance['snapchat']);
        $mj_socialmedia_instance['linkedin'] = strip_tags($new_instance['linkedin']);
        $mj_socialmedia_instance['xing'] = strip_tags($new_instance['xing']);

        return $mj_socialmedia_instance;
    }

    function widget($args, $mj_socialmedia_instance) {
        extract($args);

        $mj_socialmedia_facebook = apply_filters('widget_title', $mj_socialmedia_instance['facebook']);
        $mj_socialmedia_twitter = apply_filters('widget_title', $mj_socialmedia_instance['twitter']);
        $mj_socialmedia_youtube = apply_filters('widget_title', $mj_socialmedia_instance['youtube']);
        $mj_socilamedia_googleplus = apply_filters('widget_title', $mj_socialmedia_instance['googleplus']);
        $mj_socialmedia_instagram = apply_filters('widget_title', $mj_socialmedia_instance['instagram']);
        $mj_socialmedia_pinterest = apply_filters('widget_title', $mj_socialmedia_instance['pinterest']);
        $mj_socialmedia_snapchat = apply_filters('widget_title', $mj_socialmedia_instance['snapchat']);
        $mj_socialmedia_linkedin = apply_filters('widget_title', $mj_socialmedia_instance['linkedin']);
        $mj_socialmedia_xing = apply_filters('widget_title', $mj_socialmedia_instance['xing']);

        echo '<div class="mj-socialmedia-widget">';
        if ($mj_socialmedia_facebook != null) {
            echo '<a href="' . $mj_socialmedia_facebook . '" target="blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>';
        }
        if ($mj_socialmedia_twitter != null) {
            echo '<a href="' . $mj_socialmedia_twitter . '" target="blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>';
        }
        if ($mj_socialmedia_youtube != null) {
            echo '<a href="' . $mj_socialmedia_youtube . '" target="blank"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>';
        }
        if ($mj_socilamedia_googleplus != null) {
            echo '<a href="' . $mj_socilamedia_googleplus . '" target="blank"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>';
        }
        if ($mj_socialmedia_instagram != null) {
            echo '<a href="' . $mj_socialmedia_instagram . '" target="blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>';
        }
        if ($mj_socialmedia_pinterest != null) {
            echo '<a href="' . $mj_socialmedia_pinterest . '" target="blank"><i class="fa fa-pinterest fa-2x" aria-hidden="true"></i></a>';
        }
        if ($mj_socialmedia_snapchat != null) {
            echo '<a href="' . $mj_socialmedia_snapchat . '" target="blank"><i class="fa fa-snapchat fa-2x" aria-hidden="true"></i></a>';
        }
        if ($mj_socialmedia_linkedin != null) {
            echo '<a href="' . $mj_socialmedia_linkedin . '" target="blank"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>';
        }
        if ($mj_socialmedia_xing != null) {
            echo '<a href="' . $mj_socialmedia_xing . '" target="blank"><i class="fa fa-xing fa-2x" aria-hidden="true"></i></a>';
        }
        echo '</div>';

    }
}

?>