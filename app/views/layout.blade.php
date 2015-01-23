<!doctype html>
<html lang="zh-TW">
<head>
  <!-- metas -->
  <title>另北的Laravel測試</title>
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <!--/ metas -->

  <!-- favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <!--/ favicon -->

  <!-- styles -->
  {{ HTML::style('assets/bower/font-awesome/css/font-awesome.min.css') }}
  {{ HTML::style('assets/bower/fancybox/source/jquery.fancybox.css') }}
  {{ HTML::style('assets/bower/owlcarousel/owl-carousel/owl.carousel.css') }}
  {{ HTML::style('assets/bower/slider-revolution/src/css/settings.css') }}
  {{ HTML::style('assets/custom/css/main.css') }}
  {{ HTML::style('assets/custom/css/color.css') }}
  <!--/ styles -->
</head>
<body>

  <div class="page">
      <!-- page header top -->
      <div id="page-header-top" class="page-header-top">
      </div>
      <!--/ page header top -->

      <!-- page header bottom -->
      <header id="page-header-bottom" class="page-header-bottom">
        <div class="grid-row">
          <!-- main search -->
          <div id="main-search" class="main-search">
            <button type="button" class="fa fa-search"></button>
            <form action="#">
              <input type="text" placeholder="Type keywords and press Enter">
              <button type="submit"></button>
            </form>
          </div>
          <!--/ main search -->

          <!-- logo -->
          <div class="logo">
            <span><a href="index.html"><img src="img/logo.png" width="111" height="58" alt=""></a></span>
          </div>
          <!--/ logo -->

          <!-- main nav -->
          <nav id="main-nav" class="main-nav">
            <a href="#" class="switcher">Menu<i class="fa fa-bars"></i></a>
            <ul>
              <li class="active">
                <a href="index.html">Home<i class="fa fa-angle-down"></i></a>
                <ul>
                  <li><a href="index.html">Default (Footer v1)</a></li>
                  <li><a href="index2.html">Corporate (Footer v2)</a></li>
                  <li><a href="index3.html">Studio (Footer v2)</a></li>
                  <li><a href="index4.html">Fashion (Footer v3)</a></li>
                  <li><a href="index5.html">Travel (Parallax)</a></li>
                  <li><a href="index6.html">One-Page (Parallax)</a></li>
                </ul>
              </li>
              <li class="mega">
                <a href="#">Templates<i class="fa fa-angle-down"></i></a>
                <div>
                  <div class="row">
                    <div class="col col-3">
                      <ul>
                        <li><a href="templates-works11.html">Portfolio Clean (1 col)</a></li>
                        <li><a href="templates-works10.html">Portfolio Clean (2 cols)</a></li>
                        <li><a href="templates-works2.html">Portfolio Clean (3 cols)</a></li>
                        <li><a href="templates-works9.html">Portfolio Classic (3 cols)</a></li>
                        <li><a href="templates-works5.html">Portfolio Classic Big (3 cols)</a></li>
                        <li><a href="templates-works4.html">Portfolio Classic BG (3 cols)</a></li>
                        <li><a href="templates-works8.html">Portfolio Classic Small (4 cols)</a></li>
                        <li><a href="templates-works13.html">Portfolio Masonry (4 cols)</a></li>
                        <li><a href="templates-works12.html">Portfolio Clean (5 cols)</a></li>
                        <li><a href="templates-works3.html">Portfolio Masonry (5 cols)</a></li>
                        <li><a href="templates-works7.html">Portfolio Clean (6 cols)</a></li>
                        <li><a href="templates-works6.html">Portfolio Classic Big (4 cols)</a></li>
                        <li><a href="templates-works.html">Portfolio Slider</a></li>
                      </ul>
                    </div>
                    <div class="col col-3">
                      <ul>
                        <li><a href="templates-works14.html">Portfolio Circles</a></li>
                        <li><a href="templates-about3.html">About Circle</a></li>
                        <li><a href="templates-about5.html">About Accordeon</a></li>
                        <li><a href="templates-about.html">About Progress Bar</a></li>
                        <li><a href="templates-about2.html">About Large Slider</a></li>
                        <li><a href="templates-about4.html">About Left Slider</a></li>
                        <li><a href="templates-about6.html">About Right Picture</a></li>
                        <li><a href="templates-benefits.html">Benefits Tabs</a></li>
                        <li><a href="templates-benefits2.html">Benefits Boxes</a></li>
                        <li><a href="templates-posts2.html">Blog Grid v1</a></li>
                        <li><a href="templates-posts4.html">Blog Grid v2</a></li>
                        <li><a href="templates-posts.html">Blog Grid BG</a></li>
                        <li><a href="templates-posts5.html">Blog List v1</a></li>
                      </ul>
                    </div>
                    <div class="col col-3">
                      <ul>
                        <li><a href="templates-posts6.html">Blog List v2</a></li>
                        <li><a href="templates-posts3.html">Blog List Bg</a></li>
                        <li><a href="templates-clients.html">Clients Text + Logos</a></li>
                        <li><a href="templates-clients5.html">Clients Testimonials v1</a></li>
                        <li><a href="templates-clients3.html">Clients Testimonials v2</a></li>
                        <li><a href="templates-clients4.html">Clients Testimonials BG v1</a></li>
                        <li><a href="templates-clients2.html">Clients Testimonials BG v2</a></li>
                        <li><a href="templates-progress.html">How We Work v1</a></li>
                        <li><a href="templates-progress2.html">How We Work v2</a></li>
                        <li><a href="features-pagination.html">Pagination</a></li>
                        <li><a href="templates-pricing.html">Pricing v1</a></li>
                        <li><a href="templates-pricing2.html">Pricing v2</a></li>
                        <li><a href="templates-services.html">Services Circles (4 cols)</a></li>
                      </ul>
                    </div>
                    <div class="col col-3">
                      <ul>
                        <li><a href="templates-services3.html">Services Circles BG (4 cols)</a></li>
                        <li><a href="templates-services2.html">Services Diamonds v1 (4 cols)</a></li>
                        <li><a href="templates-services5.html">Services Diamonds v2 (4 cols)</a></li>
                        <li><a href="templates-services4.html">Services Circles (5 cols)</a></li>
                        <li><a href="templates-services6.html">Services Slider</a></li>
                        <li><a href="templates-skills4.html">Skills Bars (1 col)</a></li>
                        <li><a href="templates-skills3.html">Skills Bars (4 cols)</a></li>
                        <li><a href="templates-skills.html">Skills Circles v1 (4 cols)</a></li>
                        <li><a href="templates-skills2.html">Skills Circles v2 (4 cols)</a></li>
                        <li><a href="templates-team.html">Team Boxes (1 col)</a></li>
                        <li><a href="templates-team2.html">Team Circles (2 cols)</a></li>
                        <li><a href="templates-team3.html">Team Boxes (4 cols)</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <a href="#">Pages<i class="fa fa-angle-down"></i></a>
                <ul>
                  <li>
                    <a href="#">About Us (4)<i class="fa fa-angle-right"></i></a>
                    <ul>
                      <li><a href="about.html">About Us v1</a></li>
                      <li><a href="about2.html">About Us v2</a></li>
                      <li><a href="about3.html">About Us v3</a></li>
                      <li><a href="about4.html">About Us v4</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Services (2)<i class="fa fa-angle-right"></i></a>
                    <ul>
                      <li><a href="services.html">Services v1</a></li>
                      <li><a href="services2.html">Services v2</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Team (3)<i class="fa fa-angle-right"></i></a>
                    <ul>
                      <li><a href="team-list.html">List</a></li>
                      <li><a href="team-grid.html">Grid</a></li>
                      <li><a href="team-details.html">Details</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Forms (4)<i class="fa fa-angle-right"></i></a>
                    <ul>
                      <li><a href="login.html">Login v1</a></li>
                      <li><a href="login2.html">Login v2</a></li>
                      <li><a href="reg.html">Sign Up</a></li>
                      <li><a href="recovery.html">Password recovery</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Coming Soon (2)<i class="fa fa-angle-right"></i></a>
                    <ul>
                      <li><a href="coming-soon.html">Coming Soon v1</a></li>
                      <li><a href="coming-soon2.html">Coming Soon v2</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">404 Error Page (2)<i class="fa fa-angle-right"></i></a>
                    <ul>
                      <li><a href="not-found.html">404 Error Page v1</a></li>
                      <li><a href="not-found2.html">404 Error Page v2</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Portfolio<i class="fa fa-angle-down"></i></a>
                <ul>
                  <li><a href="portfolio2.html">Grid 3 classical</a></li>
                  <li><a href="portfolio4.html">Grid 3 alternative</a></li>
                  <li><a href="portfolio.html">Grid 4 classical</a></li>
                  <li><a href="portfolio5.html">Сlean (1 col)</a></li>
                  <li><a href="portfolio3.html">Clean (2 cols)</a></li>
                  <li><a href="portfolio6.html">Clean (5 cols)</a></li>
                  <li><a href="portfolio7.html">Clean masonry</a></li>
                  <li><a href="portfolio8.html">Circles</a></li>
                  <li><a href="portfolio-details.html">Details v1</a></li>
                  <li><a href="portfolio-details2.html">Details v2</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Blog<i class="fa fa-angle-down"></i></a>
                <ul>
                  <li><a href="blog.html">Blog v1</a></li>
                  <li><a href="blog2.html">Blog v2</a></li>
                  <li><a href="blog3.html">Blog v3</a></li>
                  <li><a href="blog-details.html">Details v1</a></li>
                  <li><a href="blog-details2.html">Details v2</a></li>
                </ul>
              </li>
              <li class="mega mega-alt">
                <a href="#">Shop<i class="fa fa-angle-down"></i></a>
                <div>
                  <div class="row">
                    <div class="col col-6">
                      <ul>
                        <li><a href="shop-grid.html">Grid v1</a></li>
                        <li><a href="shop-grid2.html">Grid v2</a></li>
                        <li><a href="shop-grid3.html">Grid v3</a></li>
                        <li><a href="shop-list.html">List v1</a></li>
                        <li><a href="shop-list2.html">List v2</a></li>
                        <li><a href="shop-list3.html">List v3</a></li>
                        <li><a href="shop-details.html">Details v1</a></li>
                        <li><a href="shop-details2.html">Details v2</a></li>
                        <li><a href="shop-cart.html">Cart</a></li>
                        <li><a href="shop-checkout.html">Checkout</a></li>
                      </ul>
                    </div>
                    <div class="col col-6 col-vam">
                      <p>Featured product</p>
                      <a href="shop-details.html"><img src="http://placehold.it/175x300" width="175" height="300" alt=""></a>
                      <p>Only 600$</p>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <a href="#">Contacts<i class="fa fa-angle-down"></i></a>
                <ul>
                  <li><a href="contacts.html">Contacts v1</a></li>
                  <li><a href="contacts2.html">Contacts v2</a></li>
                  <li><a href="contacts3.html">Contacts v3</a></li>
                </ul>
              </li>
            </ul>
          </nav>
          <!--/ main nav -->
        </div>
      </header>
      <div></div>
      <!--/ page header bottom -->

      <!-- slideshow -->
      <div class="slider-revolution">
        <div id="slider-revolution">
          <ul>
            <li data-transition="cube">
              <img src="http://placehold.it/2000x500" alt="">
              <div class="tp-caption title skewfromrightshort tp-resizeme rs-parallaxlevel-0"
                data-x="center"
                data-hoffset="80"
                data-y="center"
                data-speed="500"
                data-start="500"
                data-easing="Power3.easeInOut"
                data-splitin="chars"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;">We Are Creative Agency
              </div>
              <div class="tp-caption sft tp-resizeme rs-parallaxlevel-0"
                data-x="center"
                data-hoffset="-215"
                data-y="center"
                data-voffset="-96"
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="3000"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-clock-o"></i>
              </div>
              <div class="tp-caption sfl tp-resizeme rs-parallaxlevel-0"
                data-x="center"
                data-hoffset="-300"
                data-y="center"
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="3300"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-2 fa-home"></i>
              </div>
              <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-0"
                data-x="center"
                data-hoffset="-215"
                data-y="center"
                data-voffset="96"
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="3600"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-3 fa-leaf"></i>
              </div>
              <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-0"
                data-x="center"
                data-hoffset="265"
                data-y="center"
                data-voffset="91"
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="4000"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="button-my">Purchase Now</a>
              </div>
            </li>
            <li data-transition="cube">
              <img src="http://placehold.it/2000x500" alt="">
              <div class="tp-caption title skewfromrightshort tp-resizeme rs-parallaxlevel-0"
                data-x="center"
                data-hoffset="80"
                data-y="center"
                data-speed="500"
                data-start="500"
                data-easing="Power3.easeInOut"
                data-splitin="chars"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;">Design, Development
              </div>
              <div class="tp-caption sft tp-resizeme rs-parallaxlevel-0"
                data-x="center"
                data-hoffset="-215"
                data-y="center"
                data-voffset="-96"
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="3000"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-pencil"></i>
              </div>
              <div class="tp-caption sfl tp-resizeme rs-parallaxlevel-0"
                data-x="center"
                data-hoffset="-300"
                data-y="center"
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="3300"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-2 fa-sitemap"></i>
              </div>
              <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-0"
                data-x="center"
                data-hoffset="-215"
                data-y="center"
                data-voffset="96"
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="3600"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-3 fa-cogs"></i>
              </div>
              <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-0"
                data-x="center"
                data-hoffset="245"
                data-y="center"
                data-voffset="91"
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="4000"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="button-my">Purchase Now</a>
              </div>
            </li>
            <li data-transition="cube">
              <img src="http://placehold.it/2000x500" alt="">
              <div class="tp-caption title skewfromrightshort tp-resizeme rs-parallaxlevel-0"
                data-x="center"
                data-hoffset="80"
                data-y="center"
                data-speed="500"
                data-start="500"
                data-easing="Power3.easeInOut"
                data-splitin="chars"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;">Branding, Marketing
              </div>
              <div class="tp-caption sft tp-resizeme rs-parallaxlevel-0"
                data-x="center"
                data-hoffset="-215"
                data-y="center"
                data-voffset="-96"
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="3000"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-paw"></i>
              </div>
              <div class="tp-caption sfl tp-resizeme rs-parallaxlevel-0"
                data-x="center"
                data-hoffset="-300"
                data-y="center"
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="3300"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-2 fa-heart"></i>
              </div>
              <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-0"
                data-x="center"
                data-hoffset="-215"
                data-y="center"
                data-voffset="96"
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="3600"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-3 fa-send"></i>
              </div>
              <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-0"
                data-x="center"
                data-hoffset="245"
                data-y="center"
                data-voffset="91"
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="4000"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="button-my">Purchase Now</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!--/ slideshow -->

      <!-- page content -->
      <div class="page-content">
        <!-- page content section -->
        <div class="page-content-section">
          <div class="grid-row">
            <!-- benefits -->
            <div class="block block-benefits">
              <ul>
                <li>
                  <div>
                    <i class="fa fa-apple"></i>
                    <h3>Web Projects</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                  </div>
                </li><!--
                  --><li>
                  <div>
                    <i class="fa fa-cog"></i>
                    <h3>Good Service</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                  </div>
                </li><!--
                  --><li>
                  <div>
                    <i class="fa fa-rocket"></i>
                    <h3>Development</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                  </div>
                </li><!--
                  --><li>
                  <div>
                    <i class="fa fa-clock-o"></i>
                    <h3>Timing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                  </div>
                </li>
              </ul>
            </div>
            <!--/ benefits -->

            <!-- apps features -->
            <div class="block block-apps-features">
              <div class="clearfix">
                <div class="grid-col grid-col-5">
                  <img src="http://placehold.it/325x663" width="325" height="663" alt="">
                </div>
                <div class="grid-col grid-col-2"></div>
                <div class="grid-col grid-col-5">
                  <h2>WEGO Features</h2>
                  <ul>
                    <li><i class="fa fa-share"></i>Size matters! 100+ HTML5 pages</li>
                    <li><i class="fa fa-share"></i>Responsive & retina ready (1170px GS based)</li>
                    <li><i class="fa fa-share"></i>Modules structure (simple & easy to customize)</li>
                    <li><i class="fa fa-share"></i>Fast loading and clean coded (with SEO in mind)</li>
                    <li><i class="fa fa-share"></i>Premium Free support by e-mail</li>
                    <li><i class="fa fa-share"></i>Revolution Slider included (save $14)</li>
                    <li><i class="fa fa-share"></i>PSD files included (save $10)</li>
                  </ul>
                  <a href="#" class="button"><i class="fa fa-cloud-download"></i>Buy It Now<span>only 16$</span></a>
                  <div class="enviroiment">
                    <span>Select your enviroiment</span>
                    <a href="#"><i class="fa fa-apple"></i></a>
                    <a href="#"><i class="fa fa-android"></i></a>
                    <a href="#"><i class="fa fa-windows"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!--/ apps features -->
          </div>
        </div>
        <!--/ page content section -->

        <!-- page content section -->
        <div class="page-content-section-bg" style="background-image: url(http://placehold.it/2000x260)">
          <div class="grid-row">
            <!-- counters -->
            <div id="block-counters" class="block block-counters">
              <ul>
                <li>
                  <div>
                    <span class="counter" data-direction="up" data-interval="5" data-format="150">000</span>
                  </div>
                  Employees
                </li><!--
                --><li>
                  <div>
                    <span class="counter" data-direction="up" data-interval="2" data-format="365">000</span>
                  </div>
                  Days Worked
                </li><!--
                --><li>
                  <div>
                    <span class="counter" data-direction="up" data-interval="7" data-format="100">000</span><sub>+</sub>
                  </div>
                  Happy Clients
                </li><!--
                --><li>
                  <div>
                    <span class="counter" data-direction="up" data-interval="5" data-format="150">000</span>
                  </div>
                  Clients Added
                </li><!--
                --><li>
                  <div>
                    <span class="counter" data-direction="up" data-interval="14" data-format="50">00</span><sub>+</sub>
                  </div>
                  Awards won
                </li>
              </ul>
            </div>
            <!--/ counters -->
          </div>
        </div>
        <!--/ page content section -->

        <!-- page content section -->
        <div class="page-content-section">
          <div class="grid-row">
            <!-- about -->
            <div class="block block-about">
              <div class="block-head block-head-2">About<i></i></div>
              <div class="block-cont">
                <h2>We are Creative, Flexible & Solid Team</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna.</p>
                <a href="#" class="button">Read More</a>
                <div class="owl-slideshow">
                  <div><img src="http://placehold.it/1170x390" alt=""></div>
                  <div><img src="http://placehold.it/1170x390" alt=""></div>
                  <div><img src="http://placehold.it/1170x390" alt=""></div>
                  <div><img src="http://placehold.it/1170x390" alt=""></div>
                </div>
              </div>
            </div>
            <!--/ about -->
          </div>
        </div>
        <!--/ page content section -->

        <!-- page content section -->
        <div class="page-content-section">
          <div class="grid-row">
            <!-- recent works -->
            <div class="block block-recent-works">
              <div class="block-head block-head-2">Recent Works<i></i></div>
              <div class="block-cont">
                <ol>
                  <li data-filter="*" class="active">All</li><!--
                  --><li data-filter=".item-web">Web</li><!--
                  --><li data-filter=".item-brand">Branding</li><!--
                  --><li data-filter=".item-design">Graphic Design</li><!--
                  --><li data-filter=".item-arch">Architecture</li>
                </ol>

                <ul>
                  <li class="item item-large item-design">
                    <img src="http://placehold.it/468x234" alt="">
                    <div class="description">
                      <h3>Your Work Title Here</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua.</p>
                    </div>
                    <a href="#"><i class="fa fa-search"></i></a>
                  </li>
                  <li class="item item-arch item-web">
                    <img src="http://placehold.it/234x234" alt="">
                    <div class="description">
                      <h3>Your Work Title Here</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua.</p>
                    </div>
                    <a href="#"><i class="fa fa-search"></i></a>
                  </li>
                  <li class="item item-brand item-design">
                    <img src="http://placehold.it/234x234" alt="">
                    <div class="description">
                      <h3>Your Work Title Here</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua.</p>
                    </div>
                    <a href="#"><i class="fa fa-search"></i></a>
                  </li>
                  <li class="item item-web item-brand">
                    <img src="http://placehold.it/234x234" alt="">
                    <div class="description">
                      <h3>Your Work Title Here</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua.</p>
                    </div>
                    <a href="#"><i class="fa fa-search"></i></a>
                  </li>
                  <li class="item item-small item-design item-arch">
                    <img src="http://placehold.it/234x234" alt="">
                    <a href="#"><i class="fa fa-search"></i></a>
                  </li>
                  <li class="item item-large item-web item-arch">
                    <img src="http://placehold.it/468x234" alt="">
                    <div class="description">
                      <h3>Your Work Title Here</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua.</p>
                    </div>
                    <a href="#"><i class="fa fa-search"></i></a>
                  </li>
                  <li class="item item-small item-design item-brand">
                    <img src="http://placehold.it/234x234" alt="">
                    <a href="#"><i class="fa fa-search"></i></a>
                  </li>
                  <li class="item item-small item-web item-brand">
                    <img src="http://placehold.it/234x234" alt="">
                    <a href="#"><i class="fa fa-search"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!--/ recent works -->
          </div>
        </div>
        <!--/ page content section -->

        <!-- page content section -->
        <div class="page-content-section">
          <div class="grid-row">
            <!-- clients -->
            <div class="block block-clients">
              <div class="block-head block-head-2">Clients<i></i></div>
              <div class="block-cont">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna.</p>
                <div class="carousel">
                  <div>
                    <a href="#"><img src="http://placehold.it/120x90" width="120" height="90" alt=""></a>
                  </div>
                  <div>
                    <a href="#"><img src="http://placehold.it/120x90" width="120" height="90" alt=""></a>
                  </div>
                  <div>
                    <a href="#"><img src="http://placehold.it/120x90" width="120" height="90" alt=""></a>
                  </div>
                  <div>
                    <a href="#"><img src="http://placehold.it/120x90" width="120" height="90" alt=""></a>
                  </div>
                  <div>
                    <a href="#"><img src="http://placehold.it/120x90" width="120" height="90" alt=""></a>
                  </div>
                  <div>
                    <a href="#"><img src="http://placehold.it/120x90" width="120" height="90" alt=""></a>
                  </div>
                  <div>
                    <a href="#"><img src="http://placehold.it/120x90" width="120" height="90" alt=""></a>
                  </div>
                  <div>
                    <a href="#"><img src="http://placehold.it/120x90" width="120" height="90" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
            <!--/ clients -->
          </div>
        </div>
        <!--/ page content section -->

        <!-- page content section -->
        <div class="page-content-section-alt">
          <div class="grid-row">
            <!-- mobile ready -->
            <div class="block block-mobile-ready">
              <div class="block-head block-head-2">Mobile Ready<i></i></div>
              <div class="block-cont">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna incididunt ut labore aliqua.</p>
                <div class="clearfix">
                  <div class="grid-col grid-col-6">
                    <img src="http://placehold.it/570x340" width="570" height="340" alt="">
                  </div>
                  <div class="grid-col grid-col-6">
                    <h2>Responsive & Creative Design</h2>
                    <ul>
                      <li><i class="fa fa-check-square-o"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</li>
                      <li><i class="fa fa-check-square-o"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</li>
                      <li><i class="fa fa-check-square-o"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</li>
                      <li><i class="fa fa-check-square-o"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</li>
                    </ul>
                    <a href="#" class="button">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/ mobile ready -->
          </div>
        </div>
        <!--/ page content section -->
      </div>
      <!--/ page content -->

      <!-- page footer -->
      <footer class="page-footer">
        <div class="page-footer-pic" style="background-image: url(http://placehold.it/2000x845)">
        </div>

        <div class="page-footer-section">
          <div class="grid-row">
            <!-- subscription -->
            <div class="widget-subscription clearfix">
              <div class="head"><i class="fa fa-edit"></i>Subscribe to our Newsletter</div>
              <form action="#">
                <input type="text" placeholder="Enter your e-mail">
                <button type="submit" class="button">SEND</button>
              </form>
            </div>
            <!--/ subscription -->
          </div>
        </div>

        <div class="page-footer-section">
          <div class="grid-row">
            <div class="grid-col grid-col-3">
              <!-- about -->
              <div class="widget-about">
                <img src="img/logo-alt.png" width="111" height="58" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore, sed do eiusmod consectetur adipisicing.</p>
                <p><a href="#">Learn More</a></p>
              </div>
              <!--/ about -->
            </div>

            <div class="grid-col grid-col-3">
              <!-- recent posts -->
              <div class="widget-recent-posts">
                <div class="widget-head">Recent Post</div>
                <ul>
                  <li>
                    <a href="#" class="pic"><img src="http://placehold.it/56x44" width="56" height="44" alt=""></a>
                    <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a><span>December 15, 2013</span></p>
                  </li>
                  <li>
                    <a href="#" class="pic"><img src="http://placehold.it/56x44" width="56" height="44" alt=""></a>
                    <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a><span>December 15, 2013</span></p>
                  </li>
                  <li>
                    <a href="#" class="pic"><img src="http://placehold.it/56x44" width="56" height="44" alt=""></a>
                    <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a><span>December 15, 2013</span></p>
                  </li>
                </ul>
                <div class="widget-foot"><a href="#">Learn More</a></div>
              </div>
              <!--/ recent posts -->
            </div>

            <div class="grid-col grid-col-6">
              <!-- feedback -->
              <form action="#" class="widget-feedback">
                <div class="widget-head">Get in Touch<span>We would love to hear from you</span></div>
                <div class="input"><input type="text" placeholder="Your Name"></div>
                <div class="input"><input type="text" placeholder="Your Email"></div>
                <textarea cols="30" rows="5" placeholder="Your Message"></textarea>
                <button type="submit" class="button">Send</button>
              </form>
              <!--/ feedback -->
            </div>
          </div>
          <div class="grid-row">
            <!-- social nav -->
            <div class="social-nav">
              <a href="#"><i class="fa fa-twitter"></i></a><!--
              --><a href="#"><i class="fa fa-facebook"></i></a><!--
              --><a href="#"><i class="fa fa-linkedin-square"></i></a><!--
              --><a href="#"><i class="fa fa-google-plus"></i></a><!--
              --><a href="#"><i class="fa fa-youtube"></i></a><!--
              --><a href="#"><i class="fa fa-tumblr-square"></i></a><!--
              --><a href="#"><i class="fa fa-rss-square"></i></a><!--
              --><a href="#"><i class="fa fa-skype"></i></a><!--
              --><a href="#"><i class="fa fa-dropbox"></i></a><!--
              --><a href="#"><i class="fa fa-dribbble"></i></a><!--
              --><a href="#"><i class="fa fa-stack-overflow"></i></a>
            </div>
            <!--/ social nav -->
          </div>
        </div>
        <div class="page-footer-section">
          <div class="grid-row">
            <!-- copyrights -->
            <div class="copyrights">@ Copyright 2014, All Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a></div>
            <!--/ copyrights -->

            <!-- secondary nav -->
            <div class="secondary-nav">
              <a href="#">Home</a> &nbsp;|&nbsp;
              <a href="#">Pages</a> &nbsp;|&nbsp;
              <a href="#">Portfolio</a> &nbsp;|&nbsp;
              <a href="#">Blog</a> &nbsp;|&nbsp;
              <a href="#">Shop</a> &nbsp;|&nbsp;
              <a href="#">Contacts</a>
            </div>
            <!--/ secondary nav -->
          </div>
        </div>
      </footer>
      <!--/ page footer -->
    </div>


  <!-- scripts -->
  <!--[if lt IE 9]>
  {{ HTML::script('assets/bower/html5shiv-dist/html5shiv.js') }}
  <![endif]-->
  {{ HTML::script('assets/bower/html5shiv-dist/html5shiv.js') }}
  {{ HTML::script('assets/bower/jquery/dist/jquery.min.js') }}
  {{ HTML::script('assets/bower/jquery-ui/jquery-ui.min.js') }}
  {{ HTML::script('assets/bower/jquery.counter/src/jquery.counter.js') }}
  {{ HTML::script('assets/bower/jquery-knob/dist/jquery.knob.min.js') }}
  {{ HTML::script('assets/bower/jquery-form/jquery.form.js') }}
  {{ HTML::script('assets/bower/isotope/dist/isotope.pkgd.min.js') }}
  {{ HTML::script('assets/bower/jquery-validate/dist/jquery.validate.min.js') }}
  {{ HTML::script('assets/bower/jquery.countdown/dist/jquery.countdown.min.js') }}
  {{ HTML::script('assets/bower/fancybox/source/jquery.fancybox.pack.js') }}
  {{ HTML::script('assets/bower/fancybox/source/helpers/jquery.fancybox-media.js') }}
  {{ HTML::script('assets/bower/imagesloaded/imagesloaded.pkgd.min.js') }}
  {{ HTML::script('assets/bower/owlcarousel/owl-carousel/owl.carousel.min.js') }}
  {{ HTML::script('assets/bower/slider-revolution/src/js/jquery.themepunch.plugins.min.js') }}
  {{ HTML::script('assets/bower/slider-revolution/src/js/jquery.themepunch.revolution.min.js') }}
  <!--[if lt IE 10]>
  {{ HTML::script('assets/bower/jquery.placeholder/jquery.placeholder.min.js') }}
  <![endif]-->
  {{ HTML::script('assets/custom/js/main.js') }}
</body>
</html>