<?php
function registeer_widgets() {
    register_sidebar(
        array(
        'id' => 'zijkant_widget',
        'name' => "Mijn zijkant widget",
        'before_widget' => '',
        'after_widget' => '',
        ) );
    register_sidebar( array(
        'name'      => 'footer widget',
        'id'        => 'footer_widget',
        'before_widget' => '',
        'after_widget'  => '',
    ) );
}
add_action( 'widgets_init', 'registeer_widgets' );






function registeer_menus() {
    register_nav_menu('hoofdmenu', 'Mijn Hoofdmenu');
}
add_action( 'init', 'registeer_menus' );
?>