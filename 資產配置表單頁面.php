
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Freelancer - Start Bootstrap Theme</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">
          <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

        <!-- <link href="assets/css/lib/helper.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
  

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">樂活退休</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">圓夢計畫</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">智能投資</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="img/avataaars.svg" alt="">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">Start Bootstrap</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p>

    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">樂活退休</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <form action="退休_2.php" method="post" name="info" class="fullwidth" >

      <div class="row">

        <!-- Portfolio Item 1 -->
        <div class="col-md-6 col-lg-4">
<!-- <div class="card text-center"  style = "background: #ccdcde"> -->
<div class="card text-center" style = "background: #007bff">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <!-- <div class="card bg-retired"  style = "background: #dae8e8"> -->
                                            <div class="card bg-retired" style = "background: #c0defc">
                                                <h3 class="card-title">1. 您現在幾歲 </h3>
                                                <!-- <div class="row p-l-10 p-r-10"> -->
                                                    <div class="col-xs-9" >
                                                      <!-- <div class="input-group mb-3"> -->
                                                        <div class="input-group" >
                                                            <input boundaryMsg="建議現在的年齡為18至70歲" placeholder="您的年齡" class="form-control" id="age" max="70" min="18" name="age" type="number" value="" />
                                                            <span class="unitname">歲</span>

                                                        </div>
                                                        <!-- <div class="input-group-append">
                                                          <span class="input-group-text">歲</span>
                                                        </div> -->
                                                      <!-- </div> -->
                                                    </div>
                                                    
                                                <!-- </div> -->
                                                <p class="inputDesc">請設定您現在的年齡。<br><br></p>
                                                <div class="notification error closeable" id="ageMsg" style="display: none">
                                                    <p><span>Error!</span></p>
                                                    <a class="close"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        </div>

        <!-- Portfolio Item 2 -->
        <div class="col-md-6 col-lg-4">
        <div class="card text-center" style = "background: #007bff">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="card bg-retired" style = "background: #c0defc">
                                                <h3 class="card-title">2. 預計幾歲退休 </h3>
                                                <!-- <div class="row p-l-10 p-r-10"> -->
                                                    <div class="col-xs-9">
                                                        <div class="input-group">
                                                            <input boundaryMsg="建議退休的年齡為50至80歲" placeholder="退休年齡" class="form-control" id="retireAge" max="80" min="50" name="retireAge" type="number" value="" />
                                                            <span class="unitname">歲</span>
                                                        </div>
                                                    </div>
                                                <!-- </div> -->
                                                <p class="inputDesc">依行政院主計處統計顯示，國人近五年平均退休年齡約56.3歲</p>
                                                <div class="notification error closeable" id="retireAgeMsg" style="display: none">
                                                    <p><span>Error!</span></p>
                                                    <a class="close"></a>
                                                </div>
                                            </div>    

                                        </div>
                                        
                                    </div>
                                </div>
        </div>

        <!-- Portfolio Item 3 -->
        <div class="col-md-6 col-lg-4">
        <div class="card text-center" style = "background: #007bff">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="card bg-retired" style = "background: #c0defc">
                                                <h3 class="card-title">3. 預計規劃到幾歲 </h3>
                                                <!-- <div class="row p-l-10 p-r-10"> -->
                                                    <div class="col-xs-9">
                                                        <div class="input-group">
                                                            <input boundaryMsg="建議規劃的年齡為60至100歲" class="form-control" id="expectAge" max="100" min="60" name="expectAge" type="number" value="" />
                                                            <span class="unitname">歲</span>
                                                        </div>
                                                    </div>
                                                    
                                                <!-- </div> -->
                                                <p class="inputDesc">依經建會推計，台灣男性平均預期壽命將達82歲，女性則為88歲。</p>
                                                <div class="notification error closeable" id="expectAgeMsg" style="display: none">
                                                    <p><span>Error!</span></p>
                                                    <a class="close"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        </div>
        <!-- Portfolio Item 4 -->
        <div class="col-md-6 col-lg-4">
          <br>
        <div class="card text-center" style = "background: #007bff">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="card bg-retired" style = "background: #c0defc">
                                                <h3 class="card-title">4. 退休後預估每月花費 </h3>
                                                <!-- <div class="row p-l-10 p-r-10"> -->
                                                    <div class="col-xs-9">
                                                        <div class="input-group">
                                                            <input boundaryMsg="建議每月花費金額為1至100萬" class="form-control" id="expenses" max="100" min="1" name="expenses" type="number" value="" />
                                                            <span class="unitname">萬元</span>
                                                        </div>
                                                    </div>
                                                    
                                                <!-- </div> -->
                                                <p class="inputDesc">建議先了解需要多少退休金，扣除勞保年金及勞工退休金後再進行試算</p>
                                                <div class="notification error closeable" id="expensesMsg" style="display: none">
                                                    <p><span>Error!</span></p>
                                                    <a class="close"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        </div>

        <!-- Portfolio Item 5 -->
        <div class="col-md-6 col-lg-4">
        <br>
        <div class="card text-center" style = "background: #007bff">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="card bg-retired" style = "background: #c0defc">
                                                <h3 class="card-title">5. 每年投入金額</h3>
                                                <!-- <div class="row p-l-10 p-r-10"> -->
                                                    <div class="col-xs-9">
                                                        <div class="input-group">
                                                            <input boundaryMsg="建議每月花費金額為1至100萬" class="form-control" id="in_per_year" max="100" min="1" name="in_per_year" type="number" value="" />
                                                            <span class="unitname">萬元</span>
                                                        </div>
                                                    </div>
                                                    
                                                <!-- </div> -->
                                                <p class="inputDesc">建議評估您自身負擔能力進行試算。<br><br> </p>
                                                <div class="notification error closeable" id="expensesMsg" style="display: none">
                                                    <p><span>Error!</span></p>
                                                    <a class="close"></a>
                                                </div>
                                            </div>    

                                        </div>
                                        
                                    </div>
                                </div>
        </div>

        <!-- Portfolio Item 6 -->
        <div class="col-md-6 col-lg-4">
        <br>
        <div class="card text-center" style = "background: #007bff">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="card bg-retired" style = "background: #c0defc">
                                                <h3 class="card-title">6. 歷史回測區間 </h3>
                                                <!-- <div class="row p-l-10 p-r-10"> -->
                                                    <div class="col-xs-9">
                                                      <!-- <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          Dropdown button
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                          <a class="dropdown-item" href="#">Action</a>
                                                          <a class="dropdown-item" href="#">Another action</a>
                                                          <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                      </div> -->
                                                      <div class="input-group">
                                                            <input boundaryMsg="風險分1~4級" class="form-control" id="ymdnum" name="ymdnum" type="number" value="" />
                                                            <span class="unitname">
                                                            <!-- <input  class="form-control" id="ymd" name="ymd" type="text" value="" /> -->
                                                              <input type="text" class="form-control" placeholder = '請輸入時間單位' id="ymd" name="ymd" list="category" value="">
                                                              <datalist id="category">  
                                                                   <option value="年">
                                                                   <option value="月">
                                                                   <option value="日">
                                                              </datalist>
                                                            </span>
                                                        </div>
                                                      
                                                        
                                                        
                                                    </div>
                                                    
                                                <!-- </div> -->
                                                <p class="inputDesc">
                                                <!-- <input class="risk-value" id="risk" name="risk" type="hidden" /> -->
                                                    請輸入想要歷史回測的時間長度與單位(年、月、日)
                                                    
                                                </p>
                                                <div class="notification error closeable" id="expectAgeMsg" style="display: none">
                                                    <p><span>Error!</span></p>
                                                    <a class="close"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <div class="text-center mt-4">
    <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
    </div>
    </form>
  </section>

  <!-- About Section -->
  <section class="page-section bg-primary mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase ">圓夢計畫</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <!-- <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p> -->
        </div>
        <div class="col-lg-4 mr-auto">
          <!-- <p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p> -->
        </div>
      </div>



       <!-- Contact Section Form -->
       <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form action="圓夢計算結果.php" method="post" name="info" class="fullwidth" >

<!-- Portfolio Item 1 -->
<div class="col-md-6 col-lg-12">
<!-- <div class="card text-center"  style = "background: #ccdcde"> -->
<div class="card text-center" style = "background: #007bff">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="card bg-retired" style = "background: #c0defc">
                                                <h3 class="card-title">1. 圓夢目標達成年限  </h3>
                                                <!-- <div class="row p-l-10 p-r-10"> -->
                                                    <div class="col-xs-9">
                                                        <div class="input-group">
                                                        <input boundaryMsg="建議投資期間為1至10年" class="form-control" id="period" max="10" min="1" name="period" type="number" value="" />
                                                        <span class="unitname">年</span>
                                                        </div>
                                                    </div>
                                                    
                                                <!-- </div> -->
                                                <p class="inputDesc">請輸入您想在幾年內達成目標。</p>
                                                <div class="notification error closeable" id="periodMsg" style="display: none">
                                                    <p><span>Error!</span></p>
                                                    <a class="close"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</div>
<br>
<!-- Portfolio Item 2 -->
<div class="col-md-6 col-lg-12">
<div class="card text-center" style = "background: #007bff">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="card bg-retired" style = "background: #c0defc">
                                                <h3 class="card-title">2. 設定圓夢目標金額  </h3>
                                                <!-- <div class="row p-l-10 p-r-10"> -->
                                                    <div class="col-xs-9">
                                                        <div class="input-group">
                                                        <input boundaryMsg="建議目標金額為1萬元至500萬元" class="form-control" id="totalAmt" max="501" min="1" name="totalAmt" type="number" value="" />
                                                        <span class="unitname">萬元</span>
                                                        </div>
                                                    </div>
                                                    
                                                <!-- </div> -->
                                                <p class="inputDesc">請輸入想要達成的目標金額。</p>
                                                <div class="notification error closeable" id="totalAmtMsg" style="display: none">
                                                    <p><span>Error!</span></p>
                                                    <a class="close"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</div>
<br>
<!-- Portfolio Item 3 -->
<div class="col-md-6 col-lg-12">
<div class="card text-center" style = "background: #007bff">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="card bg-retired" style = "background: #c0defc">
                                                <h3 class="card-title">3. 每年投入金額 </h3>
                                                <!-- <div class="row p-l-10 p-r-10"> -->
                                                    <div class="col-xs-9">
                                                        <div class="input-group">
                                                            <input boundaryMsg="建議每月花費金額為1至100萬" class="form-control" id="in_per_year" max="100" min="1" name="in_per_year" type="number" value="" />
                                                            <span class="unitname">萬元</span>
                                                        </div>
                                                    </div>
                                                    
                                                <!-- </div> -->
                                                <p class="inputDesc">建議評估您自身負擔能力進行試算。</p>
                                                <div class="notification error closeable" id="expensesMsg" style="display: none">
                                                    <p><span>Error!</span></p>
                                                    <a class="close"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</div>
<br>
<!-- Portfolio Item 6 -->
<div class="col-md-6 col-lg-12">
<div class="card text-center" style = "background: #007bff">
                            <div class="stat-widget-two">
                                <div class="stat-content">
                                    <div class="card bg-retired" style = "background: #c0defc">
                                        <h3 class="card-title">4. 設定可承受之投資風險 </h3>
                                        <!-- <div class="row p-l-10 p-r-10"> -->
                                            <div class="col-xs-9">
                                                <div class="input-group">
                                                    <input boundaryMsg="風險分1~4級" class="form-control" id="risk" max="4" min="1" name="risk" type="number" value="" />
                                                    <span class="unitname">級</span>
                                                </div>
                                            </div>
                                            
                                        <!-- </div> -->
                                        <p class="inputDesc">
                                        <!-- <input class="risk-value" id="risk" name="risk" type="hidden" /> -->
                                            保守型->1級, 穩健型->2級, 成長型->3級, 積極型->4級
                                            
                                        </p>
                                        <div class="notification error closeable" id="expectAgeMsg" style="display: none">
                                            <p><span>Error!</span></p>
                                            <a class="close"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>

</div>
<!-- /.row -->

</div>
<div class="text-center mt-4">
<button type="submit" class="btn btn-xl btn-outline-light" id="sendMessageButton">Send</button>
</div>
</form>

    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">智能投資</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form action="投資計算結果.php" method="post" name="info" class="fullwidth" >

<!-- Portfolio Item 1 -->
<div class="col-md-6 col-lg-12">
<!-- <div class="card text-center"  style = "background: #ccdcde"> -->
<div class="card text-center" style = "background: #007bff">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="card bg-retired" style = "background: #c0defc">
                                                <h3 class="card-title">1. 想要規劃投資的金額 </h3>
                                                <!-- <div class="row p-l-10 p-r-10"> -->
                                                    <div class="col-xs-9">
                                                        <div class="input-group">
                                                          <input boundaryMsg="建議投資金額為1萬元至1000萬元" class="form-control" id="lumpsumAmt" max="1001" min="1" name="lumpsumAmt" type="number" value="" />
                                                          <span class="unitname">萬元</span>
                                                        </div>
                                                    </div>
                                                    
                                                <!-- </div> -->
                                                <p class="inputDesc">請輸入想要投入的資金金額。</p>
                                                <div class="notification error closeable" id="lumpsumAmtMsg" style="display: none">
                                                    <p><span>Error!</span></p>
                                                    <a class="close"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</div>
<br>
<!-- Portfolio Item 2 -->
<div class="col-md-6 col-lg-12">
<div class="card text-center" style = "background: #007bff">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="card bg-retired" style = "background: #c0defc">
                                                <h3 class="card-title">2. 設定投資期間 </h3>
                                                <!-- <div class="row p-l-10 p-r-10"> -->
                                                    <div class="col-xs-9">
                                                        <div class="input-group">
                                                        <input boundaryMsg="建議投資期間為1至10年" class="form-control" id="period" max="10" min="1" name="period" type="number" value="" />
                                                        <span class="unitname">年</span>
                                                        </div>
                                                    </div>
                                                    
                                                <!-- </div> -->
                                                <p class="inputDesc">請輸入想要投資幾年。</p>
                                                <div class="notification error closeable" id="periodMsg" style="display: none">
                                                    <p><span>Error!</span></p>
                                                    <a class="close"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</div>
<br>
<!-- Portfolio Item 3 -->
<div class="col-md-6 col-lg-12">
<div class="card text-center" style = "background: #007bff">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="card bg-retired" style = "background: #c0defc">
                                                <h3 class="card-title">3. 目標金額 </h3>
                                                <!-- <div class="row p-l-10 p-r-10"> -->
                                                    <div class="col-xs-9">
                                                        <div class="input-group">
                                                            <input boundaryMsg="建議每月花費金額為1至100萬" class="form-control" id="goal" max="100" min="1" name="goal" type="number" value="" />
                                                            <span class="unitname">萬元</span>
                                                        </div>
                                                    </div>
                                                    
                                                <!-- </div> -->
                                                <p class="inputDesc">請輸入預期收回的目標金額。</p>
                                                <div class="notification error closeable" id="expensesMsg" style="display: none">
                                                    <p><span>Error!</span></p>
                                                    <a class="close"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</div>
<br>
<!-- Portfolio Item 6 -->
<div class="col-md-6 col-lg-12">
<div class="card text-center" style = "background: #007bff">
                            <div class="stat-widget-two">
                                <div class="stat-content">
                                    <div class="card bg-retired" style = "background: #c0defc">
                                        <h3 class="card-title">4. 設定可承受之投資風險 </h3>
                                        <!-- <div class="row p-l-10 p-r-10"> -->
                                            <div class="col-xs-9">
                                                <div class="input-group">
                                                    <input boundaryMsg="風險分1~4級" class="form-control" id="risk" max="4" min="1" name="risk" type="number" value="" />
                                                    <span class="unitname">級</span>
                                                </div>
                                            </div>
                                            
                                        <!-- </div> -->
                                        <p class="inputDesc">
                                        <!-- <input class="risk-value" id="risk" name="risk" type="hidden" /> -->
                                            保守型->1級, 穩健型->2級, 成長型->3級, 積極型->4級
                                            
                                        </p>
                                        <div class="notification error closeable" id="expectAgeMsg" style="display: none">
                                            <p><span>Error!</span></p>
                                            <a class="close"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>

</div>
<!-- /.row -->

</div>
<div class="text-center mt-4">
<button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
</div>
</form>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Location</h4>
          <p class="lead mb-0">2215 John Daniel Drive
            <br>Clark, MO 65243</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Around the Web</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">About Freelancer</h4>
          <p class="lead mb-0">Freelance is a free to use, MIT licensed Bootstrap theme created by
            <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Your Website 2019</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/cabin.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/cake.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/circus.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/game.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/safe.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/submarine.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>
          <!-- jquery vendor -->
          <script src="assets/js/lib/jquery.min.js"></script>
        <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
        <!-- nano scroller -->
        <script src="assets/js/lib/menubar/sidebar.js"></script>
        <script src="assets/js/lib/preloader/pace.min.js"></script>
        <!-- sidebar -->
        <script src="assets/js/lib/bootstrap.min.js"></script>

        <!-- bootstrap -->

        <script src="assets/js/lib/circle-progress/circle-progress.min.js"></script>
        <script src="assets/js/lib/circle-progress/circle-progress-init.js"></script>

        <script src="assets/js/lib/morris-chart/raphael-min.js"></script>
        <script src="assets/js/lib/morris-chart/morris.js"></script>
        <script src="assets/js/lib/morris-chart/morris-init.js"></script>

        <!--  flot-chart js -->
        <script src="assets/js/lib/flot-chart/jquery.flot.js"></script>
        <script src="assets/js/lib/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/js/lib/flot-chart/flot-chart-init.js"></script>
        <!-- // flot-chart js -->


        <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.algeria.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.argentina.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.brazil.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.france.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.germany.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.greece.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.iran.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.iraq.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.russia.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.tunisia.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.europe.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.usa.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/vector.init.js"></script>

        <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
        <script src="assets/js/lib/weather/weather-init.js"></script>
        <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
        <script src="assets/js/scripts.js"></script>
        <!-- scripit init-->


</body>

</html>
