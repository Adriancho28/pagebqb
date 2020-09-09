<?php
/**
 * header.php
 *
 * The header for the theme.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="icon" href="<?php echo get_template_directory_uri();?>/assets/images/favicon.ico" />
		<?php wp_head(); ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154002634-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-154002634-1');
</script>
    </head>
<!--Página web diseñada por Bitxel Agencia Digital -->
    <body <?php body_class(); ?> data-spy="scroll" data-target="#header">
<?php

$is_sticky_header = seocify_option('is_sticky_header');
$is_transparent_header = seocify_option('is_transparent_header');
$show_top_header = seocify_option('show_top_header');
$header_style = seocify_option('header_style');
$header_class = 'header';
if ($is_sticky_header):
    $header_class .= ' nav-sticky xs__sticky_header';
endif;

if ($is_transparent_header):
    $header_class .= ' header-transparent';
endif; 

?>
<div class="buton-cotizar fhome"> <a href="/cotiza-tu-seguro-de-autos/"> Cotizar </a> </div>
    <div class="<?php echo esc_attr($header_class);?>">
        <?php if($show_top_header): get_template_part('template-parts/navigation/nav','top-bar-'.$header_style.''); endif; ?>
        
        <?php get_template_part( 'template-parts/navigation/nav','primary-'.$header_style.'' ); ?>
    </div>