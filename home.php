<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package designxnine
 */

get_header(); ?>

<?php query_posts(array('category_name'=>'intro', 'posts_per_page'=>3)); ?>
  <?php if (have_posts()) : ?>
    <?php $post = $posts[0]; $c=0;?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php $c++;
          if( $c == 1) :?>

          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                $background = 'style="background-image: url(' . $image[0] . ')"';
           ?>
          <section class="intro background-img" <?php echo $background; ?> id="welcome">
            <header>
              <h1 class="welcome-title background-img" <?php echo $background; ?>>design<span class="basedown background-img" <?php echo $background; ?>>x</span>nine<span class="welcome-dots background-img" <?php echo $background; ?>>.........</span></h1>
            </header>
            <figure class="jumbotron">
              
              <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" class="sr-only">
              <figcaption>
                <h2><?php the_title(); ?></h2>
                <a href="<?php the_permalink(); ?>">view project <span class="glyphicon glyphicon-chevron-right"></span></a>
              </figcaption>
            </figure>
          </section>

        <?php else : ?>

          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
              $background = 'style="background-image: url(' . $image[0] . ')"';
           ?>
          <section class="intro background-img" <?php echo $background; ?>>
            <header>
              <h1 class="background-img" <?php echo $background; ?>><?php the_field('header'); ?></h1>
              <p><?php echo get_the_content(); ?></p>
            </header>
            <figure class="jumbotron">
              
              <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" class="sr-only">
              <figcaption>
                <h2><?php the_title(); ?></h2>
                <a href="<?php the_permalink(); ?>">view project <span class="glyphicon glyphicon-chevron-right"></span></a>
              </figcaption>

            </figure>
          </section>

        <?php endif; ?>

      <?php endwhile; ?>

  <?php endif; ?>

<?php wp_reset_query(); ?>

<?php query_posts(array('category_name'=>'portfolio')); ?>

  <section class="portfolio clearfix" id="portfolio">
    <header>
      <h1 class="sr-only">Our work</h1>
    </header>

    <?php if (have_posts()) : ?>
          
        <?php while ( have_posts() ) : the_post(); ?>

          <figure class="portfolio-item col-xs-12 col-sm-6 col-md-4">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
            
            <a href="<?php the_permalink(); ?>">
            <figcaption>
            <div>
              <h4><?php the_title(); ?></h4>
              View Project <span class="glyphicon glyphicon-chevron-right"></span>
            </div>
            </figcaption>
            </a>
          </figure>

        <?php endwhile; ?>

    <?php endif; ?>

  </section>

<?php wp_reset_query(); ?>

  <section class="team clearfix" id="team">
    <div class="container">
      <header>
      	<?php 
      		$studentsObj = get_category_by_slug('students'); 
				  $studentsID = $studentsObj->term_id;

          $awardsObj = get_category_by_slug('awards');
          $awardsID = $awardsObj->term_id;

          $yearsObj = get_category_by_slug('years');
          $yearsID = $yearsObj->term_id;

	      	$activeYears = get_categories(array(
									      		'child_of' => $yearsID,
									      		'hide_empty' => 0
													));
				?>
        <nav class="nav-team">
          <ul class="list-unstyled">
          	<?php $yearNumber = 0; ?>
          	<?php foreach ($activeYears as $year) {
              $cat_title = $year->name;

              echo '<li><a href="" data-slide-index="' . $yearNumber . '">' . $cat_title . '</a></li>';
              
              $yearNumber++;
            
            } ?>
          </ul>
        </nav>
      </header>


<ul class="bxslider">
      <?php foreach ($activeYears as $year) { ?>
      <li class="clearfix">
        <div class="col-xs-12 col-sm-4 col-md-4 members">

          <?php $cat_title = $year->name; ?>
          <?php $cat_ID = $year->term_id; ?>

          <h3><?php echo $cat_title; ?></h3>

          <?php query_posts( array( 'category__and'=>array( $cat_ID, $studentsID ) ) ); ?>
          <?php if (have_posts()) : ?>
          
            <ul class="list-unstyled">
              <?php while ( have_posts() ) : the_post(); ?>
                <li><h4><?php the_title(); ?></h4></li>
              <?php endwhile; ?>
            </ul>

          <?php endif; ?>
          <?php wp_reset_query(); ?>

        </div><!-- /members -->


        <div class="col-xs-12 col-sm-8 col-md-8 awards">

          <?php query_posts( array( 'category__and'=>array( $cat_ID, $awardsID ) ) ); ?>
          <?php if (have_posts()) : ?>
            
            <dl class="row">

              <?php while ( have_posts() ) : the_post(); ?>
                <span class="award col-xs-6 col-sm-6 col-md-4">
                  <dt>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                    <span class="sr-only"><?php the_title(); ?></span>
                  </dt>
                  <dd><h4><?php the_title(); ?></h4>
                  <p><?php echo get_the_content(); ?></p></dd>
                </span>
              <?php endwhile; ?>
            
            </dl>

          <?php endif; ?>
          <?php wp_reset_query(); ?>

        </div>
      </li>
      <?php } ?>
</ul>
    </div>
  </section>

<?php get_footer(); ?>
