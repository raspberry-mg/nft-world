<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NFT_World
 */

get_header();
?>

    <h2>Top Rated</h2>
    <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pexels-rodnae-productions-8370378.jpg" class="d-block w-75 mx-auto" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pexels-rodnae-productions-8370378.jpg" class="d-block w-75 mx-auto" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pexels-rodnae-productions-8370378.jpg" class="d-block w-75 mx-auto" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h2>Trending Categories</h2>
    <div class="categories">
        <div class="row row-cols-4 row-cols-lg-5 row-cols-sm-3">
            <div class="col"><a href=""> <span><i class="fa fa-bookmark"></i> Name</span> <span class="secondary-text"><i class="fa fa-star"></i> 12 NFT's</span></a></div>
            <div class="col"><a href=""> <span><i class="fa fa-bookmark"></i> Name</span> <span class="secondary-text"><i class="fa fa-star"></i> 12 NFT's</span></a></div>
            <div class="col"><a href=""> <span><i class="fa fa-bookmark"></i> Name</span> <span class="secondary-text"><i class="fa fa-star"></i> 12 NFT's</span></a></div>
            <div class="col"><a href=""> <span><i class="fa fa-bookmark"></i> Name</span> <span class="secondary-text"><i class="fa fa-star"></i> 12 NFT's</span></a></div>
            <div class="col"><a href=""> <span><i class="fa fa-bookmark"></i> Name</span> <span class="secondary-text"><i class="fa fa-star"></i> 12 NFT's</span></a></div>
            <div class="col"><a href=""> <span><i class="fa fa-bookmark"></i> Name</span> <span class="secondary-text"><i class="fa fa-star"></i> 12 NFT's</span></a></div>
            <div class="col"><a href=""> <span><i class="fa fa-bookmark"></i> Name</span> <span class="secondary-text"><i class="fa fa-star"></i> 12 NFT's</span></a></div>
            <div class="col"><a href=""> <span><i class="fa fa-bookmark"></i> Name</span> <span class="secondary-text"><i class="fa fa-star"></i> 12 NFT's</span></a></div>
            <div class="col"><a href=""> <span><i class="fa fa-bookmark"></i> Name</span> <span class="secondary-text"><i class="fa fa-star"></i> 12 NFT's</span></a></div>
            <div class="col"><a href=""> <span><i class="fa fa-bookmark"></i> Name</span> <span class="secondary-text"><i class="fa fa-star"></i> 12 NFT's</span></a></div>
            <div class="col"><a href=""> <span><i class="fa fa-bookmark"></i> Name</span> <span class="secondary-text"><i class="fa fa-star"></i> 12 NFT's</span></a></div>
            <div class="col"><a href=""> <span><i class="fa fa-bookmark"></i> Name</span> <span class="secondary-text"><i class="fa fa-star"></i> 12 NFT's</span></a></div>
        </div>
    </div>
    <h2>Getting Started</h2>
    <div class="container-fluid get-start-info">
        <div class="row">
            <div class="card border-light col-lg-3 col-md-3">
                <div class="card-body">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/pexels-zaksheuskaya-1616403.jpg" class="img-fluid rounded-start" alt="...">
                    <h3 class="card-title mt-5">Light Заголовок карточки</h3>
                </div>
            </div>
            <div class="card border-light col-lg-3 col-md-3">
                <div class="card-body">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/pexels-zaksheuskaya-1616403.jpg" class="img-fluid rounded-start" alt="...">
                    <h3 class="card-title mt-5">Light Заголовок карточки</h3>
                </div>
            </div>
            <div class="card border-light col-lg-3 col-md-3">
                <div class="card-body">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/pexels-zaksheuskaya-1616403.jpg" class="img-fluid rounded-start" alt="...">
                    <h3 class="card-title mt-5">Light Заголовок карточки</h3>
                </div>
            </div>
            <div class="card border-light col-lg-3 col-md-3">
                <div class="card-body">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/pexels-zaksheuskaya-1616403.jpg" class="img-fluid rounded-start" alt="...">
                    <h3 class="card-title mt-5">Light Заголовок карточки</h3>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
