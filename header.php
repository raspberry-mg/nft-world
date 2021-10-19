<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NFT_World
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="">NFT World</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="searchbox">
                <form class="d-flex">
                    <div class="search-placeholder">
                        <input class="form-control" type="search" placeholder="Search items or collection" aria-label="Search">
                    </div>
                    <button type="submit" class="btn btn-outline-secondary btn-search" title="Find"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <?php
            wp_nav_menu( array(
                    'menu' => 'menu-1',
                    'container' => false,
                    'menu_class' => 'navbar-nav mb-2 mb-lg-0',
                    'list_item_class'  => 'nav-item',
                    'link_class'   => 'nav-link',
                )
            );
            ?>
        </div>
    </div>
</nav>
<div class="main-title">
    <div class="row justify-content-md-start justify-content-lg-start justify-content-sm-center">
        <div class="col-sm-4 col-md-6 col-lg-6 col-xl-7">
            <h1>Discover, collect, and sell extraordinary NFTs</h1>
        </div>
    </div>
</div>
<div class="example-nft">
    <div class="row justify-content-md-end justify-content-lg-end justify-content-sm-center">
        <div class="card col-sm-5 col-md-6 col-lg-6 col-xl-5">
            <img src="http://www.raspberywww.com/wp-content/uploads/2021/10/pexels-steve-johnson-1109354.jpg" class="card-img-top rounded-corner" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid my-background p-0 m-0"></div>



