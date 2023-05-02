<?php

if ($_POST['search'] == ''){
  header('Location: index.php');
}
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "search";

    $con = mysqli_connect($dbhost, $dbuser, $dbpass ,$dbname);

    if (!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)) {
      die("فشل في الاتصال");
    }

?>
<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="style/images/favicon.png" type="image/x-icon"> 
    <meta name="description" content="Courses is a platform that provides high-quality courses in areas that seek to raise the level of e-learning in the Arab world">
    <meta name="author" content="Mhmd Abd El-sallam Badr">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title> بحث  | موقع كورسات </title>

    <!-- Bootstrap core CSS -->
    <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="style/css/fontawesome.css">
    <link rel="stylesheet" href="style/css/main.css">
    <link rel="stylesheet" href="style/css/owl.css">
    <link rel="stylesheet" href="style/css/lightbox.css">
  <!--
    [[[[[[[[[[[[[[[      ]]]]]]]]]]]]]]]
    [::::::::::::::      ::::::::::::::]
    [::::::::::::::      ::::::::::::::]
    [::::::[[[[[[[:      :]]]]]]]::::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[  CODED & DESIGED BY: ]:::::]
    [:::::[      Mhmd Badr       ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [::::::[[[[[[[:      :]]]]]]]::::::]
    [::::::::::::::      ::::::::::::::]
    [::::::::::::::      ::::::::::::::]
    [[[[[[[[[[[[[[[      ]]]]]]]]]]]]]]]
-->
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
              <li><a href="login/index.php"><i class="fa fa-lock" aria-hidden="true"></i></a></li>
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
                      <a href="index.php" class="logo">
                          <img src="style/images/logo.png" alt="logo">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="index.php">الرئيسية </a></li>
                          <li><a href="courses.php">التصنيفات  </a></li>
                          <li><a href="index.php#apply"> من نحن  </a></li>
                          <li><a href="index.php#courses"> كورسات شائعة  </a></li> 
                          <li><a href="index.php#contact">تواصل معنا </a></li> 
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
                      <h2>أبحث عن موادك المفضلة </h2>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form method="POST" class="card card-sm" >
                                <div class="card-body row no-gutters align-items-center">
                                    <!--end of col-->
                                    <div class="col">
                                        <input name="search" class="form-control form-control-lg form-control-borderless" type="search" placeholder="أبحث عن ...">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button name="submit" class="btn btn-lg btn-warning" type="submit">بحث </button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
            <!--end of col-->
                    </div>
                  </section>

                  <!-- End Search Bar -->


      <section class="upcoming-meetings">

                 <?php

                  $sql = "SELECT * FROM result";
                  $result = mysqli_query($con, $sql);
                  $queryResults = mysqli_num_rows($result);

                  if($queryResults > 0){
                    while ($row = mysqli_fetch_assoc($result)) {

                    }
                  } 

                  if (isset($_POST['submit'])) {
                    $search = mysqli_real_escape_string($con, $_POST['search']);
                    $sql = "SELECT * FROM result WHERE name LIKE '%$search%' OR description LIKE '%$search%'";
                    $result = mysqli_query($con, $sql);
                    $queryResult = mysqli_num_rows($result);

                  if ($queryResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                                echo 
                                " <div> 
                                <h2> <a href='courses/" .$row['name'].".php'>" .$row['name']." </a></h2>
                                <h2>" .$row['description']. "</h2>
                                </div>";

                    }
                  } else {
                    echo " <h2>لا يوجد نتائج ! </h2>";
                  }
                 }

               ?>

      <div class="footer">
      <p>جميع الحقوق محفوظة ..  2022 ©
          <br>
          تم التصميم والتكويد : <a href="https://www.facebook.com/absallamm/" target="_parent" title="programer">MHMD ABD EL-SALLAM BADR</a>
          <br>
         <a href="" target="_blank" title="better edu">EL - Sherif Academy</a>
        </p>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="style/js/isotope.min.js"></script>
    <script src="style/js/owl-carousel.js"></script>
    <script src="style/js/lightbox.js"></script>
    <script src="style/js/tabs.js"></script>
    <script src="style/js/video.js"></script>
    <script src="style/js/slick-slider.js"></script>
    <script src="style/js/custom.js"></script>
    
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
</body>

</body>
</html>