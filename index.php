<?php get_header(); ?>

<div id="content">
  <div id="banner" class="mt-2">
    <div class="container">
      <a class="plus" href="<?php echo home_url( '/noticias' ); ?>"><span>+</span></a>
      <div class="row no-gutters">
        <div class="col-sm-2 pr-1">
          <div class="banner-sind">
            <div class="banner-box">
              <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/sind.png"; ?>"/>
              <h2>Sindicalize-se</h2>
              <h4>Junte-se a quem<br> luta por você!</h4>
            </div>
            <a class="btn-sind" href="#">Saiba Mais</a>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="banner-sind-b">
            <div class="banner-box">
              <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/hand.png"; ?>"/>
              <h2>Parceiros</h2>
              <h4>Descontos e Benefícios<br> para Sindicalizados</h4>
            </div>
            <a class="btn-sind" href="#">Saiba Mais</a>
          </div>
        </div>
        <div class="col-sm-5 px-1">
          <div class="banner-post">
            <a class="owl-noticias-e" href="#"><i class="fas fa-chevron-left"></i></a>
            <a class="owl-noticias-d" href="#"><i class="fas fa-chevron-right"></i></a>
            <div class="owl-noticias owl-carousel">
              <?php
              $args = array(
                'posts_per_page' => 3,
                'category_name' => 'destaque' 
              );
              $query = new WP_Query( $args );
              while ( $query->have_posts() ) : $query->the_post();
              ?>
              <article style='background-image: url("<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>");'>
                <div class="post-date">
                  <span>
                    <strong><?php echo get_the_date( 'd' );?></strong><br><?php echo get_the_date( 'M' );?>
                  </span>  
                </div>
                <a href="<?php the_permalink() ?>">
                  <div class="post-cat">EM DESTAQUE</div>
                  <h2 class="main-title"><?php the_title(); ?></h2>
                </a>
                <div class="options">
                  <div class="comment op"><span class="comment-qtd"><?php echo get_comments_number(get_the_ID());?></span><i class="far fa-comment-alt"></i></div>
                </div>
              </article>
              <?php
              endwhile;
              ?>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="banner-post-b mb-1">
            <div>
              <?php
              $args = array(
                'posts_per_page' => 5,
                'orderby' => 'rand',
                'category__not_in' => array( 2)
              );
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) : $query->the_post();
              ?>
              <article style='background-image: url("<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>");'>
                <div class="post-date">
                  <span>
                    <strong><?php echo get_the_date( 'd' );?></strong><br><?php echo get_the_date( 'M' );?>
                  </span>  
                </div>
                <a href="<?php the_permalink() ?>">
                  <h2 class="main-title"><?php the_title(); ?></h2>
                </a>
              </article>
              <?php
              endif;
              ?>
            </div>
          </div>
          <div class="banner-post-b">
            <div>
              <?php
              if ( $query->have_posts() ) : $query->the_post();
              ?>
              <article style='background-image: url("<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>");'>
                <div class="post-date">
                  <span>
                    <strong><?php echo get_the_date( 'd' );?></strong><br><?php echo get_the_date( 'M' );?>
                  </span>  
                </div>
                <a href="<?php the_permalink() ?>">
                  <h2 class="main-title"><?php the_title(); ?></h2>
                </a>
              </article>
              <?php
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="page-home">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 news">
          <h2>Mais Notícias</h2>
          <?php
          while ( $query->have_posts() ) : $query->the_post();
          ?>
          <a href="<?php the_permalink() ?>">
            <article>
              <div class="row">
                <div class="col-sm-3">
                  <div style='background-image: url("<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>");' class="mais-image">
                  </div>
                </div>
                <div class="col-sm-9">
                  <h3><?php the_title() ?></h3>
                  <p class="article-date"><?php echo get_the_date('d')." de ".get_the_date('F Y'); ?></p>
                </div>
              </div>
            </article>
          </a>
          <?php
          endwhile;
          ?>
          <div class="row">
            <div class="col-12">
              <a class="btn-full-gray" href="<?php echo home_url( '/noticias' ); ?>">Mais Notícias</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mt-lg-0 mt-4 perguntas">
          <div class="row mb-3">
            <div class="col-12">
              <h2>Perguntas Frequentes</h2>
              <a href="#">
                <article>
                  <h3>Porque devo me sindicalizar e como isso influencia na sociedade?</h3>
                </article>
              </a>
              <a href="#">
                <article>
                  <h3>Porque devo me sindicalizar e como isso influencia na sociedade?</h3>
                </article>
              </a>
              <a href="#">
                <article>
                  <h3>Porque devo me sindicalizar e como isso influencia na sociedade?</h3>
                </article>
              </a>
              <a href="#">
                <article>
                  <h3>Porque devo me sindicalizar e como isso influencia na sociedade?</h3>
                </article>
              </a>
            </div>
          </div>
          <div class="row mt-xl-2 mt-lg-5">
            <div class="col-12">
              <a class="btn-full-gray" href="#">Mais Dúvidas</a>
            </div>
          </div>        
        </div>
        <div class="col-lg-3 mt-lg-0 mt-4">
          <h2>Convênios</h2>
          <a class="convenio" href="#" style='background-image: url("<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/convenio.jpg"; ?>");'">     
          </a>
        </div>
      </div>
    </div>

    <div class="videos">
      <div class="container">
          <div class="row">
            <?php
            $args = array(
              'posts_per_page' => 4,
              'post_type' => 'video',
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) : $query->the_post();
              $link = get_post_meta(get_the_ID(), 'link', true);
              $linkpart = explode("?v=",$link);
              $linkpart_var = explode("&",$linkpart[1]);
            ?>
            <div class="col-sm-6 pl-lg-5 embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo (count($linkpart_var))? $linkpart_var[0]: ""; ?>" width="560" height="315" frameborder="0"></iframe>
            </div>
            <div class="col-sm-6">
              <div class="cat">
                Destaque
              </div>
              <?php the_title("<h3>","</h3>"); ?>
              <div class="conteudo">
              <?php
              the_excerpt_shortcode();
              ?>
              </div>
              <a class="btn-mais" href="<?php echo home_url( '/videos' ); ?>">Mais Vídeos</a>
            </div>
            <?php
            endif;
            ?>
          </div>
      </div>
    </div>

    <div class="acao">
      <div class="container">
          <div class="row">
            <div class="col-12">
              <h2>Fala Comerciários em Ação</h2>
            </div>
          </div>
          <div class="row">
            <?php
            while ( $query->have_posts() ) : $query->the_post();
              $link = get_post_meta(get_the_ID(), 'link', true);
              $linkpart = explode("?v=",$link);
              $linkpart_var = explode("&",$linkpart[1]);
            ?>
            <div class="col-sm-4 mb-3">
              <div class=" embed-responsive embed-responsive-4by3 mb-3">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo (count($linkpart_var))? $linkpart_var[0]: ""; ?>" width="560" height="315" frameborder="0"></iframe>
              </div>
              <?php the_title("<h3>","</h3>"); ?>
              <div class="post-date">
                <span>
                  <?php echo get_the_date( 'd' );?> de <?php echo get_the_date( 'M' );?> de <?php echo get_the_date( 'Y' );?>
                </span>  
              </div>
            </div>
            <?php
            endwhile;
            ?>
          </div>
      </div>
    </div>

    <div class="sindicatos">
      <div class="container">

        <div class="row no-gutters">
            <div class="col-sm-3">
              <div class="banner-sind">
                <div class="banner-box">
                  <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/hand.png"; ?>"/>
                  <h2>Quem faz</h2>
                  <h4>Grupo de sindicatos que<br> compõe o projeto</h4>
                </div>
                <a class="btn-sind" href="<?php echo home_url( '/quem-somos' ); ?>">Saiba Mais</a>
              </div>
            </div>
            <div class="col-sm-9">
              <div class="row no-gutters">
                <div class="col-sm-4 border-right border-bottom">
                  <div class="sind-item">
                    <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/sind1.jpg"; ?>"/>
                  </div>
                </div>
                <div class="col-sm-4 border-right border-bottom">
                  <div class="sind-item">
                    <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/sind2.jpg"; ?>"/>
                  </div>
                </div>
                <div class="col-sm-4 border-bottom">
                  <div class="sind-item">
                    <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/sind3.jpg"; ?>"/>
                  </div>
                </div>
              </div>
              <div class="row no-gutters">
                <div class="col-sm-4 border-right">
                  <div class="sind-item">
                    <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/sind4.jpg"; ?>"/>
                  </div>
                </div>
                <div class="col-sm-4 border-right">
                  <div class="sind-item">
                    <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/sind5.jpg"; ?>"/>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="sind-item">
                    <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/sind6.jpg"; ?>"/>
                  </div>
                </div>
              </div>
            </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
