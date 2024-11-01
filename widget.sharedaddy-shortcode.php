<?php

class SharedaddyShortcode_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            // Base ID of your widget
            'sharedaddyShortcode_widget',
            // Widget name will appear in UI
            'SharedaddyShortcode Widget',
            // Widget description
            array('description' => __('Place sharedaddy widget'))
        );
    }
    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if (!empty($title)) {
            echo $args['before_title'].$title.$args['after_title'];
        }
        // This is where you run the code and display the output
        //echo '<p class="navbar-text navbar-right">';
        SharedaddyShortcode::display();
        echo $args['after_widget'];
    }
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }
    public function form($instance)
    {

        $title = __('New title', 'wpb_widget_domain');
        if (isset($instance['title'])) {
            $title = $instance[ 'title' ];
        }
        ?>
        <p>
        Dont use the shortcode and the widget at teh same time.
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('title');
        ?>">
            <?php _e('Title:');
        ?>
        </label>
        <input
            class="widefat"
            id="<?php echo $this->get_field_id('title');
        ?>"
            name="<?php echo $this->get_field_name('title');
        ?>"
            type="text"
            value="<?php echo esc_attr($title);
        ?>"
        />
        </p>
        <?php

    }
}
