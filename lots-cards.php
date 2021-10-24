<?php
/**
 * Template Name: Lots Cards
 *
 * @package NFT_World
 */

get_header();
?>
<div class="container nft-page">
    <div class="row">
        <?php
        if ( get_query_var('custom_lot_card') ) $custom_lot_card = get_query_var('custom_lot_card');

        $query = new WP_Query( array( 'post_type' => 'custom_lot_card', 'custom_lot_card' => $custom_lot_card) );

        if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="col-sm-5">
                    <div class="card">
                        <?php echo the_content($custom_lot_card); ?>
                        <div class="card-body">
                            <?php echo the_excerpt($custom_lot_card); ?>
                        </div>
                    </div>
                </div>
        <div class="col-sm-7">
            <div class="card border-light bg-transparent">
                <div class="card-body">
                    <p><i class="fa fa-user-circle"></i> <?php echo get_post_meta($post->ID, "Author", $single = true); ?></p>
                    <h1><?php echo get_the_title($custom_lot_card); ?></h1>
                    <p><i class="fa fa-users"></i> 500 owners <i class="fa fa-eye"></i> <?php echo setAndViewPostViews(get_the_ID());  ?> views <i class="fa fa-heart"></i> 40 favorites</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item mt-2 mb-2"><i class="fa fa-clock-o"></i> Sale ends <?php echo date_format(date_create($value['auction_ends']), "F n, Y H:i:s");?> </li>
                    <li class="list-group-item mt-2 mb-2">Current price <br><i class="fa fa-btc"></i> 0,075 ($289,79)</li>
                    <li class="list-group-item mt-2 mb-4">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-primary"><i class="fa fa-user-circle"></i> By now</button>
                            <button type="button" class="btn btn-outline-primary"><i class="fa fa-user-circle"></i> Make offer</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
            <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>
<h2>Trending Categories</h2>
<?php
$categories = get_categories(array(
    'orderby'   => 'count&order=DESC',
    'order'     => 'ASC',
    'number'    => 10
));
?>
<?php if(!empty($categories)) {?>
    <div class="categories mb-5">
        <div class="row row-cols-2 row-cols-lg-5 row-cols-sm-3 row-cols-xs-2">
            <?php foreach( $categories as $category ){
                echo '<div class="col"><span><i class="fa fa-bookmark"></i> <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</span> <span class="secondary-text"><i class="fa fa-star"></i> '. $category->count . ' NFTs </span></a></div>'; }?>
        </div>
    </div>
<?php } ?>
<?php
get_footer();

