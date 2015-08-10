<?php get_header(); ?>
<?php
global $post;
switch ($post->post_name) {
    case 'home':
        get_template_part("template-parts/home");
        break;
    default:
        echo "nenhuma";
        break;
}
?>
<?php get_footer(); ?>