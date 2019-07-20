<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <nav class="global-header hidden-print">
            <div class="container">
                <a href="<?php echo home_url(); ?>" class="navbar-brand"><img class="logo"
                        src="<?php echo get_theme_file_uri('/images/aplicacoes-primaria-sem-tagline.png')?>" width="110"
                        style="border-radius: 24px" /></a>

            </div>
            </div>
        </nav>

        <nav class="local-header">
            <div class="container container-relative">
                <h2 id="subsitetitle">
                    <a href="<?php echo home_url(); ?>">
                        <i class="material-icons"></i>
                        Grupo de Engenharia de Software Distribuído
                    </a>
                </h2>
                <nav class="nav-tabs xxxnav-more collapse" id="local-header">

                <?php 
							wp_nav_menu( 
								array( 
									'theme_location' => 'my_main_menu' 
								) 
							); 
							?>

                </nav>

            </div>
        </nav>

    </header>
    <div class=content>