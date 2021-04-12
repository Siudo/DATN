@extends('layout')
@section('content')
<section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
            aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <!-- Text based logo -->
          <a class="navbar-brand aa-logo" href="index.html"> UTC2 <span>WORK</span></a>
          <!-- Image based logo -->
          <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li><a href="index.html">TRANG CHỦ</a></li>
            <!-- <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">PROPERTIES <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="properties.html">PROPERTIES</a></li>
                <li><a href="properties-detail.html">PROPERTIES DETAIL</a></li>                                            
              </ul>
            </li> -->
            <li class="active"><a href="gallery.html">VIỆC LÀM</a></li>
            <li><a href="gallery.html">THÔNG TIN VỀ UTC2</a></li>
   
            <li><a href="gallery.html">NHÀ TUYỂN DỤNG</a></li>

        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
  </section>
  <!-- End menu section -->

  <!-- Start Proerty header  -->

  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Thông tin việc làm</h2>
            <ol class="breadcrumb">
              <li><a href="#">Trang chủ</a></li>
              <li class="active">Chi tiết công việc</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Proerty header  -->

  <!-- Start Properties  -->
  <section id="aa-properties">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="aa-properties-content">
            <!-- Start properties content body -->
            <div class="aa-properties-details">
              <div class="aa-properties-details-img">
                <img src="img/slider/1.jpg" alt="img">
                <img src="img/slider/2.jpg" alt="img">
                <img src="img/slider/3.jpg" alt="img">
              </div>
              <div class="aa-properties-info">
                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, alias!</h2>
                <span class="aa-price">$65000</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae voluptatibus veniam non voluptate,
                  ipsa eius magni aliquid ratione sit, odio reprehenderit in quis repudiandae dolor.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequatur, veritatis, ducimus in
                  aliquam magnam voluptatibus ullam libero fugiat temporibus at, aliquid explicabo placeat eligendi,
                  assumenda magni saepe eius consequuntur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dicta aliquid, autem, cum,
                  impedit nostrum, rem molestias quisquam ab iure enim totam? Itaque esse ut adipisci officiis nulla
                  repellendus ratione dolore, iste ex doloribus tenetur eos provident quam quasi maxime.</p>
                <h4>Propery Features</h4>
                <ul>
                  <li>4 Bedroom</li>
                  <li>3 Baths</li>
                  <li>Kitchen</li>
                  <li>Air Condition</li>
                  <li>Belcony</li>
                  <li>Gym</li>
                  <li>Garden</li>
                  <li>CCTV</li>
                  <li>Children Play Ground</li>
                  <li>Comunity Center</li>
                  <li>Security System</li>
                </ul>
                <!-- <h4>Property Video</h4>
                <iframe width="100%" height="480" src="https://www.youtube.com/embed/CegXQps0In4" frameborder="0"
                  allowfullscreen></iframe>
                <h4>Property Map</h4>
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6851.201919469417!2d-86.11773906635584!3d33.47324776828677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888bdb60cc49c571%3A0x40451ca6baf275c7!2s36008+AL-77%2C+Talladega%2C+AL+35160%2C+USA!5e0!3m2!1sbn!2sbd!4v1460452919256"
                  width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
              </div>
              <!-- Properties social share -->
              <div class="aa-properties-social">
                <ul>
                  <li>Share</li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
              </div>
              <!-- Nearby properties -->
              <!-- <div class="aa-nearby-properties">
                <div class="aa-title">
                  <h2>Nearby Properties</h2>
                  <span></span>
                </div>
                <div class="aa-nearby-properties-area">
                  <div class="row">
                    <div class="col-md-6">
                      <article class="aa-properties-item">
                        <a class="aa-properties-item-img" href="#">
                          <img alt="img" src="img/item/1.jpg">
                        </a>
                        <div class="aa-tag for-sale">
                          For Sale
                        </div>
                        <div class="aa-properties-item-content">
                          <div class="aa-properties-info">
                            <span>5 Rooms</span>
                            <span>2 Beds</span>
                            <span>3 Baths</span>
                            <span>1100 SQ FT</span>
                          </div>
                          <div class="aa-properties-about">
                            <h3><a href="#">Appartment Title</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus
                              quibusdam odit vitae.</p>
                          </div>
                          <div class="aa-properties-detial">
                            <span class="aa-price">
                              $35000
                            </span>
                            <a class="aa-secondary-btn" href="#">View Details</a>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-6">
                      <article class="aa-properties-item">
                        <a class="aa-properties-item-img" href="#">
                          <img alt="img" src="img/item/2.jpg">
                        </a>
                        <div class="aa-tag for-sale">
                          For Sale
                        </div>
                        <div class="aa-properties-item-content">
                          <div class="aa-properties-info">
                            <span>5 Rooms</span>
                            <span>2 Beds</span>
                            <span>3 Baths</span>
                            <span>1100 SQ FT</span>
                          </div>
                          <div class="aa-properties-about">
                            <h3><a href="#">Appartment Title</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus
                              quibusdam odit vitae.</p>
                          </div>
                          <div class="aa-properties-detial">
                            <span class="aa-price">
                              $35000
                            </span>
                            <a class="aa-secondary-btn" href="#">View Details</a>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>

              </div> -->

            </div>
          </div>
        </div>
        <!-- Start properties sidebar -->
        <div class="col-md-4">
          <aside class="aa-properties-sidebar" style="border-bottom: 1px solid;">
            <!-- Start Single properties sidebar -->
            <div class="aa-properties-single-sidebar">
              <h3 style="text-align: center;font-weight: bold;">Thông tin thêm</h3>

              <div class="aa-single-advance-search">
                <!-- <input type="text" placeholder="Type Your Location">
                   -->
                <p class="navbar-brand aa-logo">Ngày đăng:</p> <span class="navbar-brand aa-logo"
                  style="float: right; font-weight: bold;">30/04/2021</span>
              </div>
              <div class="aa-single-advance-search">
                <p class="navbar-brand aa-logo">Hạn nộp:</p> <span class="navbar-brand aa-logo"
                style="float: right; font-weight: bold;">30/04/2021</span>
              </div>
              <div class="aa-single-advance-search">
                <p class="navbar-brand aa-logo">Ngành nghề:</p> <span class="navbar-brand aa-logo"
                    style="float: right; font-weight: bold;">IT</span>
              </div>
              <!-- <div class="aa-single-advance-search">
                <a class="aa-secondary-btn" href="properties-detail.html">Ứng tuyển ngay</a>
              </div> -->
             
              <div class="aa-single-advance-search">
                <a href="#" value="" class="aa-search-btn col-md-12" style="padding: 10px; text-align: center; ">Ứng tuyển ngay</a>
                <a href="#" value="" class="aa-search-btn col-md-12" style="padding: 10px; text-align: center; ">Lưu lại công việc này</a>

              </div>
            <!-- Start Single properties sidebar -->

          </aside>
          
          <aside class="aa-properties-sidebar">
            <div class="aa-properties-single-sidebar">
              <h3 style="text-align: center;font-weight: bold;">Công việc liên quan</h3>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/item/1.jpg" alt="img">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">This is Title</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <span>$65000</span>
                </div>
              </div>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/item/1.jpg" alt="img">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">This is Title</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <span>$65000</span>
                </div>
              </div>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/item/1.jpg" alt="img">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">This is Title</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <span>$65000</span>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
@endsection
