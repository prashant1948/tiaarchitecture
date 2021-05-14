<!doctype html>
<html class="no-js" lang="en">
  
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="A minimalistic and elegant HTML5 website template for Architects, Photographers, Freelancers, Agencies and more." />
    <meta name="author" content="Pixelosaur" />

    <title>TIA &#8211; Architecture Design</title>

    <!-- Favicons:: Replace with yours -->
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}"/>

    <!-- Stylesheets and Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Anaheim%7CQuattrocento+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/app.min.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" id="default" href="css/colors/colors.css" />
    <link rel="stylesheet" href="css/responsive.css" />

    <!-- Scripts -->
    <script src="js/vendor/jquery.min.js"></script>
   
  </head>

  <body>
    <div class="fakeloader"></div>
    <div class="flbackdrop"></div>

    <div class="sideBar">
    <div id="logo" style="border-bottom: 1px solid #e7e7e7;">
        <a href="/" class="sd-logo"><img src="{{asset('images/tialogobox.png')}}" alt="tia"></a>
        <a href="/" class="hd-logo"><img src="{{asset('images/tialogobox.png')}}" alt="tia"></a>
      </div>

      <div id="menuIcon">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div class="menuOverlay relPosition" style="background-image: url('img/menu-background-img.jpg');background-position: 50% 50%;">
   
    <div class="menuWrapper">

        <ul class="vertical menu" data-accordion-menu data-multi-open="false">
          <li class="navLink">
            <a href="#">Home</a>
            <ul class="menu vertical nested">
              <li class="dropDown">
                <a href="#">Test</a>
                <ul class="menu vertical nested">
                  <li><a href="#">Test #1</a></li>
                </ul>
              </li>
            </ul>
            </li>

            <li class="navLink">
            <a href="#">About Us</a>
            </li>
        <p class="menuContactInfo">
          <span>Contact Info</span>
            T. 1234567 <br>
            E. info@yourdomain.com <br>
            Adress <br>
            UK <br>
        </p>

      </div>
    </div>

    <div class="mainWrapper">

      <!-- <div class="heroWrapper relPosition"> -->
			
        <!-- <div class="hero js-Parallaxify" style="background-image: url('images/banner-home.jpg');" 
        data-parallaxify-y-min="30" data-parallaxify-y-max="120">
        </div> -->

      <!-- </div> -->

      <!-- Portfolio 3cols Masonry Starts -->
      <div class="row margin-top10">
        <div class="small-12 columns">

          <div id="filters" class="folioNav">
            <a data-filter="*" class="is-checked">All</a>
            <a data-filter=".webdesign">Category 1</a>
            <a data-filter=".branding">Category 2</a>
            <a data-filter=".development">Category 3</a>
            <a data-filter=".ux-ui">Category 4</a>
          </div>

        </div>

        <div class="small-12 columns noPadding">
          
          <div class="projectsWrapper">
            <ul id="gallery" class="folioMasonry-3 portfolio portfolioGutter">
        
              <!-- Gallery Item 01-->
              <li class="gallery-item development branding">
                <a href="#" class="relPosition">
                  <img src="img/portfolio/masonry/thumb-masonry-tall-1.jpg" alt="">
                  <div class="imageHover">
                    <div class="itemDesc">
                      <p>Project Title One</p>
                      <span class="smallText">Development / Architecture</span>
                    </div>
                  </div>
                </a>
              </li>
              
              <!-- Gallery Item 02 -->
              <li class="gallery-item branding webdesign">
                <a href="#" class="relPosition">
                  <img src="img/portfolio/masonry/thumb-masonry-1.jpg" alt="Gallery Item">
                  <div class="imageHover">
                    <div class="itemDesc">
                      <p>Project Title Two</p>
                      <span class="smallText">Development / Architecture</span>
                    </div>
                  </div>
                </a>
              </li>

              <!-- Gallery Item 03 -->
              <li class="gallery-item ux-ui">
                <a href="#" class="relPosition">
                  <img src="img/portfolio/masonry/thumb-masonry-2.jpg" alt="Gallery Item">
                  <div class="imageHover">
                    <div class="itemDesc">
                      <p>Project Title Three</p>
                      <span class="smallText">Development / Architecture</span>
                    </div>
                  </div>
                </a>
              </li>

              <!-- Gallery Item 04 -->
              <li class="gallery-item webdesign ux-ui">
                <a href="#" class="relPosition">
                  <img src="img/portfolio/masonry/thumb-masonry-tall-2.jpg" alt="Gallery Item">
                  <div class="imageHover">
                    <div class="itemDesc">
                      <p>Project Title Four</p>
                      <span class="smallText">Development / Architecture</span>
                    </div>
                  </div>
                </a>
              </li>

              <!-- Gallery Item 05 -->
              <li class="gallery-item webdesign development">
                <a href="#" class="relPosition">
                  <img src="img/portfolio/masonry/thumb-masonry-3.jpg" alt="Gallery Item">
                  <div class="imageHover">
                    <div class="itemDesc">
                      <p>Project Title Five</p>
                      <span class="smallText">Development / Architecture</span>
                    </div>
                  </div>
                </a>
              </li>

              <!-- Gallery Item 06 -->
              <li class="gallery-item development">
                <a href="#" class="relPosition">
                  <img src="img/portfolio/masonry/thumb-masonry-4.jpg" alt="Gallery Item">
                  <div class="imageHover">
                    <div class="itemDesc">
                      <p>Project Title Six</p>
                      <span class="smallText">Development / Architecture</span>
                    </div>
                  </div>
                </a>
              </li>

              <!-- Gallery Item 07 -->
              <li class="gallery-item webdesign">
                <a href="#" class="relPosition">
                  <img src="img/portfolio/masonry/thumb-masonry-tall-3.jpg" alt="Gallery Item">
                  <div class="imageHover">
                    <div class="itemDesc">
                      <p>Project Title Seven</p>
                      <span class="smallText">Development / Architecture</span>
                    </div>
                  </div>
                </a>
              </li>

              <!-- Gallery Item 08 -->
              <li class="gallery-item branding webdesign">
                <a href="#" class="relPosition">
                  <img src="img/portfolio/masonry/thumb-masonry-5.jpg" alt="Gallery Item">
                  <div class="imageHover">
                    <div class="itemDesc">
                      <p>Project Title Eight</p>
                      <span class="smallText">Development / Architecture</span>
                    </div>
                  </div>
                </a>
              </li>

              <!-- Gallery Item 09 -->
              <li class="gallery-item development branding ux-ui">
                <a href="#" class="relPosition">
                  <img src="img/portfolio/masonry/thumb-masonry-6.jpg" alt="Gallery Item">
                  <div class="imageHover">
                    <div class="itemDesc">
                      <p>Project Title Nine</p>
                      <span class="smallText">Development / Architecture</span>
                    </div>
                  </div>
                </a>
              </li>

            </ul>

            <script>
              jQuery(window).on('load', function() {

                var $container = $('.portfolio');

                $container.isotope({
                        itemSelector: '.gallery-item',
                        filter: '*',
                        transitionDuration: '0.7s',
                        masonry: {
                      // columnWidth: 380,
                      gutter: 0
                    }
                    });

                  // filter items on button click
                  $('#filters').on('click', 'a', function () {
                      var filterValue = $(this).attr('data-filter');
                      $container.isotope({ filter: filterValue });
                  });

                  // change is-checked class on buttons
                  $('#filters a').on('click', function() {
                      $('#filters a').removeClass('is-checked');
                      $(this).addClass('is-checked');
                      var selector = $(this).attr('data-filter');
                      $container.isotope({ filter: selector });
                      return false;
                  });

                  $container.imagesLoaded().progress( function() {
                    $container.isotope('layout');
                  });
                
              });
            </script>
          </div>
        </div>
      </div>
      <!-- Portfolio 3cols Masonry End -->

      <div class="row marginTop">
        <div class="small-12 columns">
          <div class="row paddingTop featureBoxes-3" data-equalizer data-equalize-on="medium">
            <div class="small-12 medium-4 columns">
              <h3 class="title">Our Services</h3>
              <p>Reprehenderit ea, at eligendi ab molestiae, inventore nulla, odit quae ipsum quam, eveniet dignissimos mollitia cupiditate totam. Assumenda delectus est, voluptatem neque.</p>
              <a href="#" class="button secondary">Get Started Now</a>
            </div>

            <div class="small-12 medium-4 columns">
              <div class="featureBoxesWrapper bgBlack boxShadow" data-equalizer-watch>
                <h5 class="featureBoxTitle">Architecture &amp; Design</h5>

                <ul class="iconList">
                  <li>Home Design</li>
                  <li>Interior Design</li>
                  <li>Construction Retail</li>
                  <li>Construction Development</li>
                  <li>House Design</li>
                  <li>Interior Development</li>
                </ul>
              </div>
            </div>

            <div class="small-12 medium-4 columns">
              <div class="featureBoxesWrapper bgBlack boxShadow" data-equalizer-watch>
                <h5 class="featureBoxTitle">Print Design</h5>

                <ul class="iconList">
                  <li>Packaging Design</li>
                  <li>Brand Identity</li>
                  <li>Banner Design</li>
                  <li>T-shirt Design</li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="row">
        <div class="small-12 columns">
          <div class="divider"></div>
        </div>
      </div>

      <div class="row marginBottom paddingTop">
        <div class="small-12 medium-4 columns">
          <div class="testimonial-1">
            <div class="testimonImg imgShadow">
              <img src="img/testimonials/testimonial-thumb-1.jpg" alt="Customer Testimonial">
            </div>
            <div class="testimonMeta">
              Paul B.
              <span>Company Inc.</span>
            </div>
            <div class="testimonContent">
              <p>Nesciunt dolore quaerat, iure eveniet totam sint accusantium nisi repellendus praesentium nobis rem quod recusandae earum consectetur necessitatibus quidem quis, aliquid pariatur.</p>
            </div>
          </div>
        </div>

        <div class="small-12 medium-4 columns">
          <div class="testimonial-1">
            <div class="testimonImg imgShadow">
              <img src="img/testimonials/testimonial-thumb-2.jpg" alt="Customer Testimonial">
            </div>
            <div class="testimonMeta">
              Jane K.
              <span>Company Inc.</span>
            </div>
            <div class="testimonContent">
              <p>Consequuntur ipsam atque, repellendus rerum enim, vero doloribus illo incidunt unde adipisci. Dolores itaque maxime hic perferendis nostrum tempore, aperiam laboriosam minima!</p>
            </div>
          </div>
        </div>

        <div class="small-12 medium-4 columns">
          <div class="testimonial-1">
            <div class="testimonImg imgShadow">
              <img src="img/testimonials/testimonial-thumb-3.jpg" alt="Customer Testimonial">
            </div>
            <div class="testimonMeta">
              Andrew G.
              <span>Company Inc.</span>
            </div>
            <div class="testimonContent">
              <p>Beatae distinctio ducimus ut ipsam, laborum quidem veniam perspiciatis totam neque harum sed alias magni, adipisci sint fuga. Rerum, architecto ea minima.</p>
            </div>
          </div>
        </div>
      </div>

      <footer>
        <div class="row expanded footerWrapper">

          <div class="small-12 medium-7 large-8 columns">
            <div class="row">
              <div class="small-12 columns">
                <div id="footerCopy">
                  <h6>TIA | Architecture Design</h6>
                  <p>Powere by <a href="pasanu.com">Pasanu</a>.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="small-12 medium-5 large-4 columns show-for-medium">
            <div class="row clearfix">
              <div class="small-6 medium-7 large-9 columns">
                <div id="footerInfo">
                  <p>hello@info.com</p>
                  <p>+1 2345 6789</p>
                </div>
              </div>

              <div class="small-6 medium-5 large-3 columns">
                <div id="footerSocials">
                  <a href="#">Instagram</a>
                  <a href="#">Facebook</a>
                  <a href="#">Google</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </footer>

    </div>
    <!-- Main Wrapper End -->

    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/parallaxify.js"></script>
    <script src="js/app.js"></script>
    <script src="js/vendor/jquery.cookie.js"></script>
    <script src="js/style-switcher.js"></script>

    <script>new Parallaxify().registerUpdate()</script>
    
  </body>

</html>
