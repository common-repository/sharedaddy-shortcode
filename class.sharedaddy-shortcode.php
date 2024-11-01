<?php


class SharedaddyShortcode
{
    public static $_SETTING = 'SharedaddyShortcode_enableWidgetShortcode';

    public static function init()
    {
        // add admin settings
        add_action('admin_init', 'SharedaddyShortcode::_addSettings');

        // register widget

        remove_filter('the_content', 'sharing_display', 19);
        remove_filter('the_excerpt', 'sharing_display', 19);
        // enable shortcode in widgets
        if (get_option(self::$_SETTING)) {
            add_filter('widget_text', 'do_shortcode');
        }

        // add the [sharedaddy] shortcode
        add_shortcode('sharedaddy', 'SharedaddyShortcode::display');
    }
    public static function _addSettings()
    {
        add_settings_section(
            'SharedaddyShortcode_settingsSection',
            'Sharedaddy Shortcode',
            'SharedaddyShortcode::_settingsSectionCallback',
            'general'
        );

        add_settings_field(
            self::$_SETTING,
            'Enable shortcode in widgets',
            'SharedaddyShortcode::_settingsCallback',
            'general',
            'SharedaddyShortcode_settingsSection'
        );

        register_setting('general', self::$_SETTING);
    }
    public static function _settingsSectionCallback()
    {
        echo '<p>Enable shortcode in widgets (not just for Sharedaddy Shortcode)</p>';
    }
    public static function _settingsCallback()
    {
        echo '<input name="'.self::$_SETTING.'" id="'.self::$_SETTING.'" value="1" type="checkbox" class="code" ';
        echo checked(1, get_option(self::$_SETTING), false).'>';
    }
    public static function display()
    {
        global $post;
        if (!$post) {
            $_post = $post;
            $post = 'temp_sharedaddy';
        }
        sharing_display('', true);
        if ($post == 'temp_sharedaddy') {
            unset($post);
            $post = $_post;
        }
    }

}
