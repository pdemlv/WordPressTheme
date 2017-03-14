<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title><?php bloginfo('name'); ?></title>

    <!--<link href="styles.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <?php wp_head(); ?> 
  </head>
  <body>
 
 <?php get_header(); ?>

    <section id= "main">
      <div class= "container-fluid">
        <div class= "main_txt_cont">
          <h1>вікна онлайн</h1>
          <p>Компания Nexll обеспечивает своих партнеров готовыми натяжными потолками по доступным ценам на протяжении 4 лет. Кроме того, мы предоставляем полную <br>
          поддержку по обучению персонала, продаже, монтажу и рекламе.<br>
          Хотите стать нашим дилером?</p>
          <button id= "btn_more" class= "bbtn">подробнее <i class= "fa fa-arrow-right"> </i> 
          </button>
          <button id= "btn_dealer" class= "bbtn">стать дилером</button>  
        </div>
      </div>
    </section>
    <section id= "news">
      <div class= "container-fluid">
        <div class= "sect">
          <h1>новости и события</h1>
          <div class= "blue_green_box"></div>
          
           <button type="button" data-filter="all" class= "btn_gall active_tab">Все</button>
            <?php
              $args = array();
              $categories = get_categories($args);
              
              foreach ($categories as $category) {
                echo '<button type="button" class= "btn_gall" data-filter=".'. $category->slug .'">'. $category->name .'</button>';
              }
            ?>

            <div class="row row_gall">
            
	          <?php while ( have_posts() ) : the_post(); ?> 
                <div class="card mix <?php 

                  $categories = get_the_category( $post->ID );
                  if ($categories) {
                    foreach ($categories as $cat) {
                      echo ''.$cat->slug;
                    }
                  }
                  ?>">

                    <img src="<?php bloginfo('template_url'); ?>/img/data-analysis.png" alt="img">
                    <h4><?php the_title(); ?> </h4>
                    <h6><?php the_category(); ?></h6>
                    <?php the_content(); ?>
                    <a href="#" class= "anchor_more">подробнее <i class= "fa fa-arrow-right"></i></a>
                </div> 
               
            <?php endwhile; ?>

           </div>

        </div> <!--sect-->
      </div>
    </section>
    <section id= "numbers">
      <div class= "container-fluid">
        <div class= "row">
          <div class= "col-lg-3 col-md-6 col-sm-6 col-xs-12 stats">
            <span class= "stats_img1">5+</span><br>
            <div class= "blue_white_box"></div>
            <span class= "stats_text">компания более 5 лет на рынке Украины</span>
          </div>
          <div class= "col-lg-3 col-md-6 col-sm-6 col-xs-12 stats">
            <span class= "stats_img2">30000</span>
            <div class= "white_green_box"></div>
            <span class= "stats_text">потолков установили наши дилерый в 2015 году</span>
          </div>
          <div class= "col-lg-3 col-md-6 col-sm-6 col-xs-12 stats">
            <span class= "stats_img3">14</span>
            <div class= "blue_white_box"></div>
            <span class= "stats_text">областей охватывают наши дилеры по украине</span>
          </div>
          <div class= "col-lg-3 col-md-6 col-sm-6 col-xs-12 stats">       
            <span class= "stats_img4">280%</span>
            <div class= "white_green_box"></div>
            <span class= "stats_text">рост компании в 2015 году</span>
          </div>
        </div>
      </div>
    </section>
    <section id= "advantages">
      <div class= "container-fluid sect">
        <h1>наши преимущества</h1>
        <div class= "blue_green_box"></div>
        <div class= "row ">
          <div class= "col-lg-3 col-md-6 item1">
            <div class= "romb1"><span id= "forma-1" class= "icon"></span></div>
            <p>Полное наличие цветов палитры из нашего каталога</p>
          </div>
          <div class= "col-lg-3 col-md-6 item1">
            <div class= "circle1"></div>
            <p>Инструменты для работы,различные каталоги,программа для построения</p>
          </div>
          <div class= "col-lg-3 col-md-6 item1">
            <div class= "romb2"></div>
            <p>Мы разработали для наших дилеров различные виды дизайна визиток, объявлений, флаеров</p>
          </div>
          <div class= "col-lg-3 col-md-6 item1">
            <div class= "circle2"></div>
            <p>Наш клиен самая большая сеть натяжных потолков в Украине Гарпун</p>
          </div>
        </div>
        <div class= "row"> 
          <div class= "col-lg-3 col-md-6 item2">
              <div class= "circle3"></div>
              <p>18 цветной вставки и 9 видов белой</p>
          </div>
          <div class= "col-lg-3 col-md-6 item2">
            <div class= "romb3"></div>
            <p>У нас полноценный отдел качества продукции и всех материалов которых мы предоставляем нашим клиентам</p>
          </div>
          <div class= "col-lg-3 col-md-6 item2">
            <div class= "circle4"></div>
            <p>В случае несоответствия полотна требованиям установки, мы переделываем его без выяснения причин, чтобы Вы и Ваши клиенты быстро вышли из этой ситуации</p>
          </div>
          <div class= "col-lg-3 col-md-6 item2">
            <div class= "romb4"></div>
            <p>Ваш заказ оформленный до 15 00 изготавливается в этот же день.</p>
          </div>
        </div> 
        
      </div>
    </section>
    <section id= "about">
      <div class= "container-fluid sect">
        <h1>о компании</h1> 
        <div class= "blue_green_box"></div>
          <div id="Carousel_stanok" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#Carousel_stanok" data-slide-to="0" class="active"></li>
                <li data-target="#Carousel_stanok" data-slide-to="1"></li>
                <li data-target="#Carousel_stanok" data-slide-to="2"></li>
              </ol>

              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="<?php bloginfo('template_url'); ?>/img/carousel-img1.png" alt="Chania">
                </div>

                <div class="item">
                  <img src="<?php bloginfo('template_url'); ?>/img/carousel-img1.png" alt="Chania">
                </div>

                <div class="item">
                  <img src="<?php bloginfo('template_url'); ?>/img/carousel-img1.png" alt="Flower">
                </div>
              </div>
          </div>  
          <div id= "letter" class= "row">
            <p id= "letter_text" class= "col-lg-9 col-md-9 col-sm-12 col-xs-12">Suspendisse potenti. Etiam in mi nec massa dapibus sagittis. Suspendisse potenti. Nulla efficitur erat diam, vel facilisis ante tristique et. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In metus purus, accumsan quis diam dignissim, venenatis pretium metus. Nulla vestibulum eleifend massa, quis interdum lorem congue eget. Aliquam aliquet ullamcorper consectetur. Mauris gravida arcu quis ex porttitor, ac vehicula diam congue. Cras congue blandit dui id sagittis. Donec a ex vulputate, maximus ipsum dapibus, fermentum mi.
            Cras porttitor porta augue sed varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla at iaculis nunc. Vestibulum vitae rutrum lacus. 
            <a href="#" class= "anchor_more">подробнее <i class= "fa fa-arrow-right"></i></a>
            </p>
            <div id="carousel_cont" class= "col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div id="Carousel_gramota" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#Carousel_gramota" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel_gramota" data-slide-to="1"></li>
                  </ol>

                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="<?php bloginfo('template_url'); ?>/img/carousel-img2.png" alt="gramota">
                    </div>

                    <div class="item">
                      <img src="<?php bloginfo('template_url'); ?>/img/carousel-img2.png" alt="gramota">
                    </div>

                  </div>
              </div>  
            </div>
           
          </div>
      </div>
    </section>
    <section id= "reviews">
      <div class= "container-fluid sect">
        <h1>отзывы</h1> 
        <div class= "blue_green_box"></div>
 
        <div id="Carousel_vidguk" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#Carousel_vidguk" data-slide-to="0" class="active"></li>
                <li data-target="#Carousel_vidguk" data-slide-to="1"></li>
                <li data-target="#Carousel_vidguk" data-slide-to="2"></li>
              </ol>

              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div id= "first_half" class= "col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class= "b_comment">
                      <img src="<?php bloginfo('template_url'); ?>/img/viktor.png">
                      <p>Cras porttitor porta augue sed varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla at iaculis nunc. Cras porttitor porta augue sed varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames anunc. </p>
                    </div>
                    <div class= "b_pidpus">
                      <a href="" class= "anchor_more">виктор васюк</a>
                      <p>г. Днепропетровкс, работает с Pullsky 4 года.</p>
                    </div>
                  </div>  
                  <div id= "second_half" class= "col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                    <div class= "b_comment">
                      <img src="<?php bloginfo('template_url'); ?>/img/anna.png">  
                      <p>Cras porttitor porta augue sed varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla at iaculis nunc. Cras porttitor porta augue sed varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames anunc. </p>
                    </div>
                    <div class= "b_pidpus">
                      <a href="" class= "anchor_more">анна петрова</a>
                      <p>г. Днепропетровкс, работает с Pullsky 4 года.</p>
                    </div>
                  </div>  
                </div>

                <div class="item">
                  <div id= "first_half" class= "col-lg-6 ">
                    
                    <div class= "b_comment">
                      <img src="<?php bloginfo('template_url'); ?>/img/viktor.png">
                      <p>Cras porttitor porta augue sed varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla at iaculis nunc. Cras porttitor porta augue sed varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames anunc. </p>
                    </div>
                    <div class= "b_pidpus">
                      <a href="" class= "anchor_more">виктор васюк</a>
                      <p>г. Днепропетровкс, работает с Pullsky 4 года.</p>
                    </div>
                  </div>  
                  <div id= "second_half" class= "col-lg-6 ">
                    <div class= "b_comment">
                      <img src="<?php bloginfo('template_url'); ?>/img/anna.png">  
                      <p>Cras porttitor porta augue sed varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla at iaculis nunc. Cras porttitor porta augue sed varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames anunc. </p>
                    </div>
                    <div class= "b_pidpus">
                      <a href="" class= "anchor_more">анна петрова</a>
                      <p>г. Днепропетровкс, работает с Pullsky 4 года.</p>
                    </div>
                  </div>  
                </div>

                <div class="item">
                  <div id= "first_half" class= "col-lg-6 ">
                    
                    <div class= "b_comment">
                      <img src="<?php bloginfo('template_url'); ?>/img/viktor.png">
                      <p>Cras porttitor porta augue sed varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla at iaculis nunc. Cras porttitor porta augue sed varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames anunc. </p>
                    </div>
                    <div class= "b_pidpus">
                      <a href="" class= "anchor_more">виктор васюк</a>
                      <p>г. Днепропетровкс, работает с Pullsky 4 года.</p>
                    </div>
                  </div>  
                  <div id= "second_half" class= "col-lg-6 ">
                    <div class= "b_comment">
                      <img src="<?php bloginfo('template_url'); ?>/img/anna.png">  
                      <p>Cras porttitor porta augue sed varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla at iaculis nunc. Cras porttitor porta augue sed varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames anunc. </p>
                    </div>
                    <div class= "b_pidpus">
                      <a href="" class= "anchor_more">анна петрова</a>
                      <p>г. Днепропетровкс, работает с Pullsky 4 года.</p>
                    </div>
                  </div>  
                </div>
              </div>
        </div>  
      </div>  <!--container-fluid-->
    </section>
    <section id= "myMap">
      <div id="cont" class= "container-fluid">
        <div id= "map_info">
          <h1>наши диллеры находяться в 14 областях украины</h1>
          <button id= "map_btn" class= "bbtn">выбрать город</button>
        </div>
        <div id= "map"></div>
      </div>
    </section>

<?php get_footer(); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed 
    <script src="js/bootstrap.js"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/mixitup.min.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
  
    <script>
      function initMap() {
      	var uluru = {lat: 49.843668, lng: 24.026369};  
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOYn76TQDO4RKLfi8-iaFc_5j9K062Rgc&callback=initMap">
    </script>

  <?php wp_footer(); ?> 
  </body>
</html>