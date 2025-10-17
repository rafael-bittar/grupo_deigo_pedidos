<?php
function setup_scripts()
{
    //########### JS ##########
    // Chamando o arquivo APP JS para as edições do tema
    wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0', true);
    // LOCATE THE SCRIPT WITH THE AJAX URL VARIABLE
    wp_localize_script('app-js', 'my_ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));

    //########### CSS ##########
    // Chamando o arquivo APP CSS para as edições do tema
    wp_enqueue_style('app-css', get_template_directory_uri() . '/assets/css/app.css', array(), filemtime(get_template_directory() . '/assets/css/app.css'), 'all'); 
}
add_action('wp_enqueue_scripts', 'setup_scripts');