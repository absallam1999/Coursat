<?php

session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../style/images/favicon.png" type="image/x-icon">
    <meta name="description" content="Courses is a platform that provides high-quality courses in areas that seek to raise the level of e-learning in the Arab world">
    <meta name="author" content="Mhmd Abd El-sallam Badr">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title> الصفحة الشخصية | موقع كورسات  </title>

    <!-- Bootstrap core CSS -->
    <link href="../style/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Filesphp -->
    <link rel="stylesheet" href="../style/css/fontawesome.css">
    <link rel="stylesheet" href="../style/css/main.css">
    <link rel="stylesheet" href="../style/css/owl.css">
    <link rel="stylesheet" href="../style/css/lightbox.css">
    <meta charset="utf-8">
    <title></title>
</head>
<body>
      <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>منصة عربية توفر كورسات  <em>عالية الجودة  </em>  في مختلف المجالات .</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="../index.php" class="logo">
                          <img src="../style/images/logo.png" alt="logo">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="../index.php">الرئيسية </a></li>
                          <li><a href="../courses.php">التصنيفات  </a></li>
                          <li><a href="logout.php"> تسجيل خروج  </a></li>

                      </ul>        
                      <a class='menu-trigger'>
                          <span>القائمة </span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <center>
          <h6> مرحبا .. <?php echo $user_data['user_name']; ?> </h6>
          <h2> الصفحة الشخصية | موقع كورسات   </h2>
        </center>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                  <a href="../course-details.php"><img src="../style/images/hmtl.png" alt=""></a>
                </div>
                <div class="down-content">
                  <h4>اهلا بك من جديد </h4>
                  <p> يمكنك الأن تصفح اقسام موقعنا ..  </p>
                  <p class="description">
                   التعليم عن بعد (بالإنجليزية: Distance Education)والمعروف أيضا بـ التعلم الإلكتروني (بالإنجليزية: Distance Learning)هو أحد طرق التعليم الحديثة نسبيًا. ويعتمد مفهومه الأساسي على وجود المتعلم في مكان يختلف عن مصدر التعليم l الذي قد يكون الكتاب أو المعلم أو حتى مجموعة الدارسين.

وهو نقل برنامج تعليمي من موضعه في حرم مؤسسة تعليمية ما إلى أماكن متفرقة جغرافيًا. ويهدف إلى جذب طلاب لا يستطيعون تحت الظروف العادية الاستمرار في برنامج تعليمي تقليدي.

                    
                        <br><br>
    وكان هذا عادة ما ينطوي على دورات بالمراسلة حيث يتراسل الطالب مع المدرسة عبر البريد، أما اليوم فيتضمن التعليم عبر الإنترنت، وكان هناك خطأ شائع في اعتبار أن التعليم عن بعد هو مرادف للتعليم عبر الإنترنت، وفي واقع الأمر فإن التعليم من خلال الإنترنت هو أحد وسائل التعليم عن بعد ولكن نظراً لانتشار الأول فإنه اعتبر في أحيان كثيرة مرادفا للتعلم عن بعد.
                  </p>
              </div>
          </div>
      </div>
  </div>

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>الكورسات  الشائعة </h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <div class="item">
              <img src="../style/images/php.png" alt="Course One">
              <div class="down-content">
               <a href="../courses/PHP.php"> <h4> PHP </h4> </a>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>درس   103</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="../style/images/html.png" alt="Course Two">
              <div class="down-content">
               <a href="../courses/HTML.php"> <h4> HTML</h4> </a>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>درس   37</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="../style/images/css.png" alt="">
              <div class="down-content">
               <a href="../courses/CSS.php"> <h4>CSS</h4> </a>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>درس   88</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="../style/images/sql.png" alt="">
              <div class="down-content">
               <a href="../courses/SQL.php"> <h4>SQL</h4> </a>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>درس   51</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="../style/images/javascript.png" alt="">
              <div class="down-content">
               <a href="../courses/javascript.php"> <h4>JAVA SCRIPT</h4> </a>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>درس   65</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="../style/images/sass.png" alt="">
              <div class="down-content">
               <a href="../courses/SASS.php"> <h4>SASS</h4> </a>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>درس   19</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="../style/images/ruby.png" alt="">
              <div class="down-content">
               <a href="../courses/RAILS.php"> <h4>RUBY</h4> </a>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>درس   44</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="../style/images/python.png" alt="">
              <div class="down-content">
               <a href="../courses/PYTHON.php"> <h4>PYTHON</h4> </a>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span> درس   152</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="col-lg-12">
              <div class="main-button-red">
                <a href="../courses/test.php"> الذهاب الى الاختبار! </a>
              </div>
    </div>
  </section>

      <div class="footer">
      <p>جميع الحقوق محفوظة ..  2022 ©
          <br>
          تم التصميم والتكويد : <a href="https://www.facebook.com/absallamm/" target="_parent" title="programer">MHMD ABD EL-SALLAM BADR</a>
          <br>
         <a href="" target="_blank" title="Sherif Academy">EL - Sherif Academy</a>
        </p>
    </div>
</section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="../style/jquery/jquery.min.js"></script>
    <script src="../style/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../style/js/isotope.min.js"></script>
    <script src="../style/js/owl-carousel.js"></script>
    <script src="../style/js/lightbox.js"></script>
    <script src="../style/js/tabs.js"></script>
    <script src="../style/js/video.js"></script>
    <script src="../style/js/slick-slider.js"></script>
    <script src="../style/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</body>
</html>