<?php
add_action('wp_ajax_my_ajax_action', 'pwspk_ajax_action');
function pwspk_ajax_action(){
    if(isset($_POST['action']) && isset($_POST['option1'])){
        update_option('pwspk_option_1', sanitize_text_field($_POST['option1']));
        echo "Field Successfully Updated.";
    }
    else{
        echo "Error during updating fields";
    }
    wp_die();
}