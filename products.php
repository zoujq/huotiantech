<!DOCTYPE html>
<!-- saved from url=(0061)http://demo.qfpffmp.cn/cssthemes6/cpts_1807_cti/products.html -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>火天方案官网 您的安心是我们的心愿！</title>
    <meta name="author" content="中山火天智能科技有限公司">
    <meta name="keywords" content="方案,电子,研发,开发,方案公司,硬件,软件,物联网,电子产品,智能穿戴,智能家居,智能硬件,解决方案,物联网软件,方案开发,控制板,APP,小程序,火天,中山火天智能科技有限公司">
    <meta name="description" content="山火天智能科技有限公司是一家专业从事消费性电子产品设计和研发的高科技公司，主要提供软硬件技术、智能穿戴、智能家居、物联网、控制板等方案的研发，拥有超过10年电子产品开发经验">
    <link rel="shortcut icon" href="img/icon/favicon.ico" type="image/x-icon">
    <link href="./js_css/css" rel="stylesheet"> 
    <link rel="stylesheet" href="./js_css/styles-merged.css">
    <link rel="stylesheet" href="./js_css/style.min.css">
    <link rel="stylesheet" href="./js_css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body>

  <!-- START: header -->
  <header role="banner" class="probootstrap-header">
    <div class="container-fluid">
        <a href="" class="probootstrap-logo"> 
          <img src="./img/info/logo.png" alt="Free Bootstrap Template " class="img-responsive"> 
          <span>火天方案</span></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs"><i>菜单</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li><a href="./index.php">首页</a></li>
            <li><a href="./services.html">合作模式</a></li>
            <li class="active"><a href="./products.php">成功案例</a></li>
            <li><a href="./about.html">关于我们</a></li>
            <li><a href="./contact.html">联系我们</a></li>
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>菜单</i></a>
            <h5>咨询电话</h5>
            <ul class="social-buttons">
              <li><a href="tel:18537988966"><i class="icon-phone2"> +86 18537988966</i></a></li>
            </ul>
            <p><small>© 2020 中山火天智能科技有限公司</small></p>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->
  
  <!-- START: section -->
  <section class="probootstrap-intro" style="background-image: url(./img/info/hero_bg_2.jpg); background-position: 0px -45px;" data-stellar-background-ratio="0.5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 probootstrap-intro-text">
          <h1 class="probootstrap-animate fadeInUp probootstrap-animated">您的安心是我们的心愿！</h1>
          <div class="probootstrap-subtitle probootstrap-animate fadeInUp probootstrap-animated">
            <h2>十年方案开发经验 数百成功案例 <a href="#" target="_blank">提供电子设计、硬件设计、软件设计、APP、微信小程序、物联网等全套电子方案，部分方案可直接供PCBA板，免开发费</a></h2>
          </div>
          <!-- vido:
          <p class="watch-intro probootstrap-animate fadeInUp probootstrap-animated"><a href="" class="popup-vimeo">观看视频 <i class="icon-play2"></i></a></p>
           vido -->
        </div>
      </div>
    </div>
    <a class="probootstrap-scroll-down js-next" href="#next-section">了解更多 <i class="icon-chevron-down"></i></a>
  </section>
  <!-- END: section -->
  

  <section id="next-section" class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate">
          <h2>成功案例</h2>
          <p class="lead">累计开发了数百款成熟标准电子产品方案</p>
        </div>
      </div>
      <div class="row">
        <?php  
          require_once './sql.php';          
        ?>
        <div class="col-md-4 col-sm-6 probootstrap-animate fadeInUp probootstrap-animated">
          <div class="probootstrap-block-image">
            <figure><a href="./detials.php?x=<?php echo $ret[0][0]; ?>"><img src="<?php echo $ret[0][3]; ?>" alt="Free Bootstrap Template "></a></figure>
            <div class="text">
              <h3 class="mb30"><a href="./detials.php?x=<?php echo $ret[0][0]; ?>"><?php echo $ret[0][1]; ?></a></h3>
              <p class="dark"><?php echo $ret[0][2]; ?></p>
              <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
              <hr>
              <p class="clearfix like"><a class="pull-left" href=""><i class="icon-thumbs-up"></i> 5,216</a> <a class="pull-right" href=""><i class="icon-thumbs-down"></i> 32</a></p>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6 probootstrap-animate fadeInUp probootstrap-animated">
          <div class="probootstrap-block-image">
            <figure><a href="./detials.php?x=<?php echo $ret[1][0]; ?>"><img src="<?php echo $ret[1][3]; ?>" alt="Free Bootstrap Template "></a></figure>
            <div class="text">
              <h3 class="mb30"><a href="./detials.php?x=<?php echo $ret[1][0]; ?>"><?php echo $ret[1][1]; ?></a></h3>
              <p class="dark"><?php echo $ret[1][2]; ?></p>
              <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
              <hr>
              <p class="clearfix like"><a class="pull-left" href=""><i class="icon-thumbs-up"></i> 4,923</a> <a class="pull-right" href=""><i class="icon-thumbs-down"></i> 12</a></p>
            </div>
          </div>
        </div>

        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6 probootstrap-animate fadeInUp probootstrap-animated">
          <div class="probootstrap-block-image">
            <figure><a href="./detials.php?x=<?php echo $ret[2][0]; ?>"><img src="<?php echo $ret[2][3]; ?>" alt="Free Bootstrap Template "></a></figure>
            <div class="text">
              <h3 class="mb30"><a href="./detials.php?x=<?php echo $ret[2][0]; ?>"><?php echo $ret[2][1]; ?></a></h3>
              <p class="dark"><?php echo $ret[2][2]; ?></p>
              <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
              <hr>
              <p class="clearfix like"><a class="pull-left" href="#"><i class="icon-thumbs-up"></i> 19,552</a> <a class="pull-right" href=""><i class="icon-thumbs-down"></i> 7</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 probootstrap-animate">
          <div class="probootstrap-block-image">
            <figure><a href="./detials.php?x=<?php echo $ret[3][0]; ?>"><img src="<?php echo $ret[3][3]; ?>" alt="Free Bootstrap Template "></a></figure>
            <div class="text">
              <h3 class="mb30"><a href="./detials.php?x=<?php echo $ret[3][0]; ?>"><?php echo $ret[3][1]; ?></a></h3>
              <p class="dark"><?php echo $ret[3][2]; ?></p>
              <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
              <hr>
              <p class="clearfix like"><a class="pull-left" href=""><i class="icon-thumbs-up"></i> 5,216</a> <a class="pull-right" href=""><i class="icon-thumbs-down"></i> 32</a></p>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6 probootstrap-animate">
          <div class="probootstrap-block-image">
            <figure><a href="./detials.php?x=<?php echo $ret[4][0]; ?>"><img src="<?php echo $ret[4][3]; ?>" alt="Free Bootstrap Template "></a></figure>
            <div class="text">
              <h3 class="mb30"><a href="<?php echo $ret[4][0]; ?>"><?php echo $ret[4][1]; ?></a></h3>
              <p class="dark"><?php echo $ret[4][2]; ?></p>
              <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
              <hr>
              <p class="clearfix like"><a class="pull-left" href=""><i class="icon-thumbs-up"></i> 4,923</a> <a class="pull-right" href=""><i class="icon-thumbs-down"></i> 12</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 probootstrap-animate">
          <div class="probootstrap-block-image">
            <figure><a href="./detials.php?x=<?php echo $ret[5][0]; ?>"><img src="<?php echo $ret[5][3]; ?>" alt="Free Bootstrap Template "></a></figure>
            <div class="text">
              <h3 class="mb30"><a href="./detials.php?x=<?php echo $ret[5][0]; ?>"><?php echo $ret[5][1]; ?></a></h3>
              <p class="dark"><?php echo $ret[5][2]; ?></p>
              <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
              <hr>
              <p class="clearfix like"><a class="pull-left" href=""><i class="icon-thumbs-up"></i> 19,552</a> <a class="pull-right" href=""><i class="icon-thumbs-down"></i> 7</a></p>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
      </div>
      <div class="row">
        
        <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate">
          <h2>1 智能家居方案</h2>
          <div class="list_fangan" >  
          <?php 
            $jiaju=get_fangan("智能家居方案");
            foreach ( $jiaju as $value)
            {
              echo '<a href="./detials.php?n='.$value.'" >'.$value.'</a>';
            }
          ?> 
          </div> 
          <h2 id="f2">2 智能穿戴方案</h2>
          <div class="list_fangan">    
            <?php 
              $jiaju=get_fangan("智能穿戴方案");

              foreach ( $jiaju as $value)
              {
                echo '<a href="./detials.php?n='.$value.'" >'.$value.'</a>';
              }
            ?>  
          </div>
          <h2 id="f3">3 智能医疗方案</h2>
          <div class="list_fangan">    
            <?php 
              $jiaju=get_fangan("智能医疗方案");

              foreach ( $jiaju as $value)
              {
                echo '<a href="./detials.php?n='.$value.'" >'.$value.'</a>';
              }
            ?>  
          </div>
          <h2 id="f4">4 智能母婴方案</h2>
          <div class="list_fangan">    
            <?php 
              $jiaju=get_fangan("智能母婴方案");

              foreach ( $jiaju as $value)
              {
                echo '<a href="./detials.php?n='.$value.'" >'.$value.'</a>';
              }
            ?>  
          </div>
          <h2 id="f5">5 智能共享设备方案</h2>
          <div class="list_fangan">    
            <?php 
              $jiaju=get_fangan("智能共享设备方案");

              foreach ( $jiaju as $value)
              {
                echo '<a href="./detials.php?n='.$value.'" >'.$value.'</a>';
              }
            ?>  
          </div>
        </div>
    </div>
  </section>

  

  <!-- START: section -->
  <section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-8 col-md-offset-2 mb30 section-heading probootstrap-animate">
          <h2>马上合作</h2>
          <p class="lead">产品越早做出来，成功的机会就越大。据统计，中国每天都有3000个新产品面市，加班加点尽早完成项目，才能抢得市场先机。</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4 probootstrap-animate">
          <p class="text-center">
            <a href="./contact.html" class="btn btn-ghost btn-ghost-white btn-lg btn-block" role="button">联系我们</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- END: section -->

  
  
  
  <!-- START: footer -->
  <footer role="contentinfo" class="probootstrap-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            <h3>关于我们</h3>
            <p>中山火天智能科技有限公司是一家提供定制型方案设计的供应商，致力于软、硬、云三种技术服务平台的方案开发与运维，成立至今，累计开发了数百款成熟标准电子产品方案...</p>
            <p><a href="./about.html" class="link-with-icon">了解更多 <i class=" icon-chevron-right"></i></a></p>
          </div>
          <!-- START: 
          <div class="probootstrap-footer-widget">
            <h3>联系我们</h3>
            <ul class="probootstrap-footer-social">
              <a href="./contact.html"> <img src="./img/info/wechat.png"></a>
            </ul>
          </div>
          section -->
        </div>
          
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            <h3>微信咨询</h3>
            <ul class="probootstrap-product-list">
              <a href="./contact.html"> <img src="./img/info/wechat.png"></a>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            <h3>联系我们</h3>
            <ul class="probootstrap-footer-contact">
                <li><i class="icon-location2"></i> <span>中山市东升镇同茂工业大道西7号</span></li>
                <li><i class="icon-mail"></i><span>zoujq@huotiantech.com</span></li>
                <li><i class="icon-phone2"></i><span><a href="tel:18537988966">+86 18537988966</a>  </span></li> 
           
              
            </ul>
          </div>
        </div>
      </div>
      <div class="row mt40">
        <div class="col-md-12 text-center">
          <p>
            <small>© 2020 HuotianTech.com 中山火天智能科技有限公司 版权所有 <a href="http://icp.chinaz.com/info?q=huotiantech.com">粤ICP备20042036号-1</a> </small><br>
            <a href="#" class="js-backtotop">返回顶部</a>
             
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- END: footer -->

  <script src="./js_css/scripts.min.js"></script>
  <script src="./js_css/main.min.js"></script>
  <script src="./js_css/custom.js"></script>

  
</body></html>