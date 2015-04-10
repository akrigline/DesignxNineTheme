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


  <section class="intro background-img first">
    <header>
      <h1 class="welcome-title background-img first">design<span class="basedown background-img first">x</span>nine<span class="welcome-dots background-img first">.........</span></h1>
    </header>
    <figure class="jumbotron">
      <img src="img/img1.jpg" alt="" class="sr-only">
      <figcaption>
        <h4>Project Name</h4>
        <a href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
      </figcaption>
    </figure>
  </section>


  <section class="portfolio">
    <header>
      <h1 class="sr-only">Our work</h1>
    </header>

    <figure class="portfolio-item col-xs-12 col-sm-6 col-md-4">
      <img src="img/img1.jpg" alt="">
      <figcaption>
        <h4>Project Name</h4>
        <a href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
      </figcaption>
    </figure>

  </section>

  <section class="team">
    <div class="container">
      <header>
        <nav class="nav-team">
          <ul class="list-unstyled">
            <li><a href="#">12&ndash;13</a></li>
          </ul>
        </nav>
      </header>
      <div class="col-xs-12 col-sm-6 col-md-4 members">
        <h4>2012&ndash;2013</h4>
        <ul class="list-unstyled">
          <li><a href="#"><h4>Andrew Krigline</h4></a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-8 awards">
        <dl class="row">
          <span class="award col-xs-6 col-sm-4 col-md-3">
              <dt><img src="img/addy.png" alt="addys"><span class="sr-only">Addy Award</span></dt>
              <dd>Addy Award Title</dd>
          </span>
        </dl>
      </div>
    </div>
  </section>

<?php get_footer(); ?>