
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
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="generator" content="GitBook 3.2.2">
    <meta name="author" content="chartjs">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.chartjs.org/docs/latest/gitbook/style.css">             
    <link rel="stylesheet" href="https://www.chartjs.org/docs/latest/gitbook/gitbook-plugin-search-plus/search.css">        
    <link rel="stylesheet" href="https://www.chartjs.org/docs/latest/gitbook/gitbook-plugin-highlight/website.css">           
    <link rel="stylesheet" href="https://www.chartjs.org/docs/latest/gitbook/gitbook-plugin-fontsettings/website.css">        
    <link rel="stylesheet" href="https://www.chartjs.org/docs/latest/style.css"> -->
      
    <meta name="HandheldFriendly" content="true"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://www.chartjs.org/docs/latest/gitbook/images/apple-touch-icon-precomposed-152.png">
    <link rel="shortcut icon" href="https://www.chartjs.org/docs/latest/gitbook/images/favicon.ico" type="image/x-icon">  
    <link rel="next" href="https://www.chartjs.org/docs/latest/charts/polar.html" />      
    <link rel="prev" href="https://www.chartjs.org/docs/latest/charts/radar.html" />
    <link rel="stylesheet" href="https://www.chartjs.org/docs/latest/gitbook/gitbook-plugin-chartjs/style.css">
    <script src="https://www.chartjs.org/docs/latest/gitbook/gitbook-plugin-chartjs/Chart.bundle.js"></script>
    <script src="https://www.chartjs.org/docs/latest/gitbook/gitbook-plugin-chartjs/chartjs-plugin-deferred.js"></script>
    

</head>

<body id="page-top">
<?php
$_SESSION["risk"] = $_POST["risk"];
$_SESSION["period"] = $_POST["period"];
$_SESSION["lumpsumAmt"] = $_POST["lumpsumAmt"];
$_SESSION["goal"] = $_POST["goal"];

        $servername = "localhost";
        $username = "root";
        $password = "esfortest";
        $dbname = "test";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // $sql = "SELECT id , port, distance  FROM test_table  WHERE id='1234'";
        $e = $_POST["risk"];
        $f = $_POST["period"];
        $h = $_POST["lumpsumAmt"];
        $z = $_POST["goal"];
        $sql = "INSERT INTO test_table1 ( `period`,`lumpsumAmt`,`goal`,`risk`) VALUES ($f,$h,$z,$e)";
        $result = $conn->query($sql);
        $conn->close();
    ?>
        
        <?php
//投入金額
$input_money = $_POST["lumpsumAmt"]*10000;
// $y_in_money = 60000;

//投入年份數
$years = $_SESSION["period"]+1;
$yyyy = $years-1;

//目標金額
$need_pension = $_POST["goal"]*10000;

unset($out);
$var = 6;
$var1 = 12;
$mode = 1;
//選股 C:/Users/User/Anaconda3/python.exe
// exec("C:/Users/Alia/AppData/Local/Programs/Python/Python37/python.exe testsig1.py 2>error.txt {$yyyy} {$need_pension} {$y_in_money}",$out,$ret);
// exec("C:/Users/Alia/AppData/Local/Programs/Python/Python37/python.exe new_choose6.py 2>error.txt {$yyyy} {$need_pension} {$input_money} {$mode}",$out,$ret);
exec("C:/Users/Alia/AppData/Local/Programs/Python/Python37/python.exe choose.py 2>error.txt {$yyyy} {$need_pension} {$input_money} {$mode}",$out,$ret);
// exec("C:/Users/User/Anaconda3/python.exe new_choose5.py 2>error.txt {$yyyy} {$need_pension} {$y_in_money}",$out,$ret);

$var=explode(" ",$out[0]);//選股結果

// $var = $out[0];//選股結果
$n = count($var);//選出幾個

//各股比例
$weight = explode(" ",$out[1]);

$reward = $out[2];

$std_dev = $out[3];



//一次投入金額
// $one_in_money = $need_pension / pow((double)$reward/100+1,$years-1);
// $one_in_money = ceil($one_in_money);


//年齡陣列
$y = array(0=>0);
for ( $i=1 ; $i<$years ; $i++ ){
    $y[$i] = $i;
}
$y1 = implode(",",$y);

//累計投入金額陣列
$in_money = array(0=>$input_money);
for ( $i=1 ; $i<$years ; $i++ ){
    $in_money[$i] = $input_money;
}
$in_money1 = implode(",",$in_money);

//資產總額陣列
$total_money = array(0=>$input_money);
//$total_money[1] = $in_money[1];
for ( $i=1 ; $i<$years ; $i++ ){
    // $total_money[$i] = (pow((double)$reward/100+1,$i)-1) * $y_in_money / ((double)$reward/100);
    $total_money[$i] = $total_money[$i-1] * ((double)$reward/100+1);
    $total_money[$i] = round($total_money[$i]);
    //$total_money[$i] = $total_money[$i-1]*((double)$reward/100+1) + $y_in_money;
}
$total_money1 = implode(",",$total_money);

//計算歷史回測報酬率

// $o0 = implode(",",$var);
// $o1 = implode(",",$weight);
// unset($out);
// exec("C:/Users/Alia/AppData/Local/Programs/Python/Python37/python.exe historical.py 2>error.txt {$o0} {$o1} ",$out,$ret);
// $his_reward = explode(" ",$out[0]);//歷年報酬率
$his_reward = explode(" ",$out[4]);//歷年報酬率
$his_y = count($his_reward)+1;

//年份陣列
$now_y = date("Y");
$yy = array(0=>($now_y-$his_y));
for ( $i=1 ; $i<$his_y ; $i++ ){
    $yy[$i] = $yy[$i-1]+1;
}
$yy1 = implode(",",$yy);
$his_reward1 = implode(",",$his_reward);

//累計投入金額陣列
$in_money2 = array(0=>$input_money);
for ( $i=1 ; $i<$his_y ; $i++ ){
    $in_money2[$i] = $input_money;
}
$in_money3 = implode(",",$in_money2);

//資產總額2陣列
$his_total_money = array(0=>$input_money);
//$total_money[1] = $in_money[1];
for ( $i=1 ; $i<$his_y ; $i++ ){
    // $his_total_money[$i] = (pow((double)$reward/100+1,$i)-1) * $y_in_money / ((double)$reward/100);
    $his_total_money[$i] = $his_total_money[$i-1]*((double)$his_reward[$i-1]+1);
    // $his_total_money[$i] = $his_total_money[$i-1]*((double)$his_reward[$i-1]+1) + $y_in_money;
    $his_total_money[$i] = round($his_total_money[$i]);
}
$his_total_money1 = implode(",",$his_total_money);



$servername = "localhost";
$username = "root";
$password = "esfortest";
$dbname = "etf";
$usertable="性質表";

// $conn->close();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ccc=1;
for ($i=0;$i<count($weight)-1;$i++){

  $weight[$i] = round($weight[$i],5);
  $ccc=$ccc-$weight[$i];
}
$weight[count($weight)-1]=$ccc;

$count_percent_stock = 0;
$stock = array(0=>0);
$stock_name = array(0=>0);
$count_stock = 0;
$stock_percent = array(0=>0);
for ( $i=0 ; $i<$n ; $i++ ){
    // $sql = "select * from `性質表` where name = '"+$var[$i] +"'";
    $sql = "SELECT * FROM $usertable where name = '".$var[$i] ."'";
    // echo $sql;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if($row[3]=='股票型'){
        // $weight[$i] = round($weight[$i],5);
        $wght = $weight[$i]*100;
        $count_percent_stock += $wght;
        $stock[$count_stock] = $row[0];
        $stock_percent[$count_stock] = $wght;
        $stock_name[$count_stock++] = $row[1];
        //echo ("$row[0] \t\t $row[1] <div style='float:right;'> $wght %</div><br>");
    }

}


$count_percent_bond = 0;
$bond = array(0=>0);
$bond_name = array(0=>0);
$count_bond = 0;
$bond_percent = array(0=>0);
for ( $i=0 ; $i<$n ; $i++ ){
    $sql = "SELECT * FROM $usertable where name = '".$var[$i] ."'";
    // echo $sql;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    //if($row[3]=='債券型'){
    if(preg_match("/債券/",$row[3] )){
        // $weight[$i] = round($weight[$i],5);
        $wght = $weight[$i]*100;
        //echo ("$row[0] \t\t $row[1] <div style='float:right;'> $wght %</div><br>");
        $count_percent_bond += $wght;
        $bond[$count_bond] = $row[0];
        $bond_percent[$count_bond] = $wght;
        $bond_name[$count_bond++] = $row[1];
        
    }
    
}
?>

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
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">金流模擬</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">投資組合</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">歷史回測</a>
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
  <br><br>
  <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Input</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php echo number_format($input_money); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php echo number_format($one_in_money);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php echo number_format($need_pension);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">金流模擬</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <div class="row">
                            <!-- column -->
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">投資金流模擬<?php //print_r($ret);print_r($out);echo $yyyy; echo $need_pension; echo $input_money; echo $mode; ?></h4>
                                        <!-- <div id="morris-bar-chart"></div> -->
                                        <p><div class="chartjs-wrapper"><canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
                                            <script>new Chart(document.getElementById("chartjs-0"),
                                            {"type":"line",
                                            "data":{"labels":<?php echo "[ $y1 ]"; ?>,
                                            "datasets":[{"label":"資產總額","data": <?php echo "[ $total_money1 ]"; ?>,"fill":false,"borderColor":"rgb(75, 192, 192)","lineTension":0.1},
                                                        {"label":"累計投入本金","data": <?php echo "[ $in_money1 ]"; ?>,"fill":false,"borderColor":"rgb(255, 0, 0)","lineTension":0.1}]},"options":{}});
                                            </script>
                                        </div></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                            </div>
  </section>

  <!-- About Section -->
  <section class="page-section bg-primary mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase ">投資組合</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <div class="row">
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-3">
                                <div class="card text-center" height="100%">
                                    
                                    <!-- <div class="m-t-10">
                                        <p>Customer Feedback</p>
                                        <h5>385749</h5>
                                    </div> -->
                                    <!-- <div class="widget-card-circle pr m-t-20 m-b-20" id="info-circle-card"> -->
                                      
                                        <div id="pieChartdiv" style="width: 100%; height: 395px">
                                            <div class="chartjs-wrapper"><canvas id="chartjs-4" class="chartjs" width="100%" height="130px"></canvas>
                                            <script>new Chart(document.getElementById("chartjs-4"),
                                            {"type":"doughnut","data":{"labels":["股票型","債券型"],
                                            "datasets":[{"label":"My First Dataset","data":[<?php print_r($count_percent_stock);?>,<?php print_r($count_percent_bond);?>],
                                            "backgroundColor":["rgb(255, 99, 132)","rgb(54, 162, 235)"]}]}});</script></div>
                                        </div>
                                        <!-- <i class="ti-control-shuffle pa"></i> -->
                                    <!-- </div> -->
                                    <div>
                                    <ul class="widget-line-list m-b-15">
                                        <li class="border-right">年化報酬率 <br><span > <?php print_r($reward);?></span></li>
                                        <li>年化標準差 <br><span ><?php print_r($std_dev);?> </span></span></li>
                                        
                                    </ul>
                                    </div>
                                    
                                </div>
                                <!-- <div class="card nestable-cart">
                                    <div class="card-title">
                                        <h4>USA</h4>
                                        <div class="card-title-right-icon">
                                            <ul>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="Vector-map-js">
                                        <div id="vmap13" class="vmap"></div>
                                    </div>
                                </div> -->
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
                            <div class="col-lg-7">
                                <div class="card">
                                    <div class="card-title">
                                        <h3>選股結果 <br/></h3>
                                    </div>
                                    <p> </p>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <h4>股票型  <?php print_r($count_percent_stock); ?> %</h4>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2">ETF</th>
                                                        <th>比例</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <?php
                                                            $count_percent = 0;
                                                            for ( $i=0 ; $i<$count_stock ; $i++ ){
                                                                // echo ("$stock[$i] \t\t $stock_name[$i] <div style='float:right;'> $stock_percent[$i] %</div><br>");
                                                                echo("<tr> <td>$stock[$i]</td> <td> $stock_name[$i]</td> <td>$stock_percent[$i]%</td> </tr>");
                                                            }
                                                        ?>
                                                        <!-- <td><span>VTI</span></td>
                                                        <td><span>Vanguard整體股市ETF</span></td>
                                                        <td><span>25%</span></td> -->
                                                        
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                            <h4>債券型  <?php print_r($count_percent_bond); ?> %</h4>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2">ETF</th>
                                                        <th>比例</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <?php
                                                            // $count_percent = 0;
                                                            for ( $i=0 ; $i<$count_bond ; $i++ ){
                                                                // echo ("$stock[$i] \t\t $stock_name[$i] <div style='float:right;'> $stock_percent[$i] %</div><br>");
                                                                echo("<tr> <td>$bond[$i]</td> <td> $bond_name[$i]</td> <td>$bond_percent[$i]%</td> </tr>");
                                                            }
                                                        ?>
                                                        <!-- <td><span>VTI</span></td>
                                                        <td><span>Vanguard整體股市ETF</span></td>
                                                        <td><span>25%</span></td> -->
                                                        
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                            </div>
                        </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">歷史回測</h2>

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
      <div class="col-lg-1">
                            </div>
                            <div class="col-lg-10">
                                <div class="card alert">
                                    <div class="card-title">
                                        <h4>歷史回測</h4>
                                    </div>
                                    <div class="chartjs-wrapper"><canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                                        <script>new Chart(document.getElementById("chartjs-1"),
                                            {"type":"line",
                                            "data":{"labels":<?php echo "[ $yy1 ]"; ?>,
                                            "datasets":
                                            [{"label":"資產總額","data": <?php echo "[ $his_total_money1 ]"; ?>,"fill":false,"borderColor":"rgb(75, 192, 192)","lineTension":0.1},
                                                        {"label":"累計投入本金","data": <?php echo "[ $in_money3 ]"; ?>,"fill":false,"borderColor":"rgb(255, 0, 0)","lineTension":0.1}]},
                                                        "options":{}});
                                        </script>
                                    </div>
                                    <!-- <div class="cpu-load-chart">
                                        <div id="cpu-load" class="cpu-load"></div>
                                    </div> -->
                                </div>
                                <!-- /# card -->
                            </div>
                            <div class="col-lg-1">
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
