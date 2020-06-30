<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>火天方案官网 您的安心是我们的心愿！</title>
    <meta name="author" content="中山火天智能科技有限公司">
    <meta name="keywords" content="火天方案,电子,研发,开发,方案公司,硬件,软件,物联网,电子产品,智能穿戴,智能家居,智能硬件,解决方案,物联网软件,方案开发,控制板,APP,小程序,火天,中山火天智能科技有限公司">
    <meta name="description" content="中山火天智能科技有限公司是一家专业从事消费性电子产品设计和研发的高科技公司，主要提供软硬件技术、智能穿戴、智能家居、物联网、控制板等方案的研发，拥有超过10年电子产品开发经验">
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
            <li class="active"><a href="./index.php">首页</a></li>
            <li><a href="./services.html">合作模式</a></li>
            <li><a href="./products.php">成功案例</a></li>
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
  <?php  
    require_once './sql.php';
    $ret=get_tuijian();
  ?>

  <section id="next-section">
    <div class="container-fluid">
      <div class="row probootstrap-gutter0">
        <div class="col-md-4 col-sm-6">
          <a href="./detials.php?x=<?php echo $ret[0][0]; ?>" class="probootstrap-hover-overlay">
            <img src="<?php echo $ret[0][3]; ?>" alt="Free Bootstrap Template " class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3><?php echo $ret[0][1]; ?></h3>
              <p><?php  echo $ret[0][4]; ?></p>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="./detials.php?x=<?php echo $ret[1][0]; ?>" class="probootstrap-hover-overlay">
            <img src="<?php echo $ret[1][3]; ?>" alt="Free Bootstrap Template " class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3><?php echo $ret[1][1]; ?></h3>
              <p><?php  echo $ret[1][4]; ?></p>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="../detials.php?x=<?php echo $ret[2][0]; ?>" class="probootstrap-hover-overlay">
            <img src="<?php echo $ret[2][3]; ?>" alt="Free Bootstrap Template " class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3><?php echo $ret[2][1]; ?></h3>
              <p><?php echo $ret[2][4]; ?></p>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="./detials.php?x=<?php echo $ret[3][0]; ?>" class="probootstrap-hover-overlay">
            <img src="<?php echo $ret[3][3]; ?>" alt="Free Bootstrap Template " class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3><?php echo $ret[3][1]; ?></h3>
              <p><?php echo $ret[3][4]; ?></p>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="./detials.php?x=<?php echo $ret[4][0]; ?>" class="probootstrap-hover-overlay">
            <img src="<?php echo $ret[4][3]; ?>" alt="Free Bootstrap Template " class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3><?php echo $ret[4][1]; ?></h3>
              <p><?php echo $ret[4][4]; ?></p>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="./detials.php?x=<?php echo $ret[5][0]; ?>" class="probootstrap-hover-overlay">
            <img src="<?php echo $ret[5][3]; ?>" alt="Free Bootstrap Template " class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3><?php echo $ret[5][1]; ?></h3>
              <p><?php echo $ret[5][4]; ?></p>
            </div>
          </a>
        </div>
        
      </div>
    </div>
  </section>

  <!-- START: section -->
  <section class="probootstrap-section">
    <a name="Our-Services"></a>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate">
          <h2>合作模式</h2>
          <p class="lead">丰富的合作模式，针对不同用户采用不同的模式。专业的方案团队，对每一个用户，力求发掘更多的项目需求信息，制定和提供最优的解决方案。您的满意，是我们最大的心愿</p>
        </div>
      </div>
      <div class="row mb70">
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-box">
              <div class="icon text-center"><i class="icon-tools2"></i></div>
              <h3>公板直供PCBA模式</h3>
              <p>基于成熟方案，根据用户需求，做微小功能调整，如PCB尺寸、参数、体验等微调整，可迅速做出产品，抢占市场。电子物料采购、贴片、测试全包，直供PCBA</p>
              <ul class="text-left with-icon colored">
                <li><i class="icon-radio-checked"></i> <span>无研发费用</span></li>
                <li><i class="icon-radio-checked"></i> <span>开发周期短，急项目优选</span></li>
                <li><i class="icon-radio-checked"></i> <span>PCBA板直供，电子部分不操心</span></li>
              </ul>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-box">
              <div class="icon text-center"><i class="icon-desktop"></i></div>
              <h3>公板自生产模式</h3>
              <p>基于成熟方案，根据用户需求，做微小功能调整。电路原理图、PCB电路图、软件源代码、生产治具、生产资料等全打包提供，并现场指导电路部分生产和测试</p>
              <ul class="text-left with-icon colored">
                <li><i class="icon-radio-checked"></i> <span>少量研发服务费用</span></li>
                <li><i class="icon-radio-checked"></i> <span>开发周期短，急项目优先</span></li>
                <li><i class="icon-radio-checked"></i> <span>功能升级可控，生产成本可控</span></li>
              </ul>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-box">
              <div class="icon text-center"><i class="icon-lightbulb"></i></div>
              <h3>定制模式</h3>
              <p>全新产品或基于成熟方案，根据用户需求，做全功能定制。适用于创新产品，基于现有技术，组合、创新，研发全新产品，解决痛点，制造更好的用户体验</p>
              <ul class="text-left with-icon colored">
                <li><i class="icon-radio-checked"></i> <span>功能全新定制</span></li>
                <li><i class="icon-radio-checked"></i> <span>研发周期由定制功能复杂程度决定</span></li>
                <li><i class="icon-radio-checked"></i> <span>专享功能，创造属于自己的产品优势</span></li>
              </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4 probootstrap-animate">
          <p class="text-center">
            <a href="./services.html" class="btn btn-primary btn-lg btn-block" role="button">更多模式</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- END: section -->


  <!-- START: section -->
  <section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate">
          <h2>成功案例</h2>
          <p class="lead">累计开发了数百款成熟标准电子产品方案</p>
        </div>
      </div>
      <div class="row mb70">
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-block-image">
            <figure><a href="./detials.php?x=<?php echo $ret[0][0]; ?>"><img src="<?php echo $ret[0][3]; ?>" alt="Free Bootstrap Template "></a></figure>
            <div class="text">
              <h3 class="mb30"><a href="./detials.php?x=<?php echo $ret[0][0]; ?>"><?php echo $ret[0][1]; ?></a></h3>
              <p class="dark"> <?php echo $ret[0][2]; ?></p>
              <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
              <hr>
              <p class="clearfix like"><a class="pull-left" href="#"><i class="icon-thumbs-up"></i> 5,216</a> <a class="pull-right" href="#"><i class="icon-thumbs-down"></i> 32</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-block-image">
            <figure><a href="./detials.php?x=<?php echo $ret[1][0]; ?>"><img src="<?php echo $ret[1][3]; ?>" alt="Free Bootstrap Template "></a></figure>
            <div class="text">
              <h3 class="mb30"><a href="./detials.php?x=<?php echo $ret[1][0]; ?>"><?php echo $ret[1][1]; ?></a></h3>
              <p class="dark"><?php echo $ret[1][2]; ?></p>
              <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
              <hr>
              <p class="clearfix like"><a class="pull-left" href="#"><i class="icon-thumbs-up"></i> 4,923</a> <a class="pull-right" href="#"><i class="icon-thumbs-down"></i> 12</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-block-image">
            <figure><a href="./detials.php?x=<?php echo $ret[2][0]; ?>"><img src="<?php echo $ret[2][3]; ?>" alt="Free Bootstrap Template "></a></figure>
            <div class="text">
              <h3 class="mb30"><a href="./detials.php?x=<?php echo $ret[2][0]; ?>"><?php echo $ret[2][1]; ?></a></h3>
              <p class="dark"><?php echo $ret[2][2]; ?></p>
              <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
              <hr>
              <p class="clearfix like"><a class="pull-left" href="#"><i class="icon-thumbs-up"></i> 19,552</a> <a class="pull-right" href="#"><i class="icon-thumbs-down"></i> 7</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4 probootstrap-animate">
          <p class="text-center">
            <a href="./products.html" class="btn btn-ghost btn-ghost-white btn-lg btn-block" role="button">更多案例</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- END: section -->

   <!-- START: section -->
  <section class="probootstrap-section probootstrap-section-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 section-heading mb50 text-center probootstrap-animate">
          <h2>项目流程管理</h2>
          <p class="lead">严谨的项目流程和高效的执行，是每一个项目成功的关键。我们针对每一个项目，从立项到验收，全程高标准执行，并且定时汇报项目进度。您的安心，是我们最大心愿</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <h3 class="heading-with-icon"> <span>①产品概念(PC)</span></h3>
          <p>市场调研分析、立项需求申请、产品可行性分析与评审、立项输出审核，明确产品市场定位、销售预期、目标成本、功能/性能需求</p>
          <p><a href="https://wenku.baidu.com/view/d17101335afafab069dc5022aaea998fcc22409d" class="link-with-icon">了解更多 <i class=" icon-chevron-right"></i></a></p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <h3 class="heading-with-icon"><span>②立项(KO)</span></h3>
          <p>组织项目启动会、编制开发计划/任务书，根据综合方案评审的结果确认方案的操作性,可行性和完整性是否可以保证开发顺利进行，设计与开发输入评审，编制 开发计划和任务书，编制产品规格书</p>
          <p><a href="https://wenku.baidu.com/view/d17101335afafab069dc5022aaea998fcc22409d" class="link-with-icon">了解更多 <i class=" icon-chevron-right"></i></a></p>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <h3 class="heading-with-icon"><span>③工程验证测试(EVT)</span></h3>
          <p>概要设计、概要设计评审、详细设计、详细设计评审、EVT 样机装配、调 试与测试、EVT 样机评审，对产品手板的各功能领域设计规格的评审，重点关注产品各功能领域的设计是否满足产品需求</p>
          <p><a href="https://wenku.baidu.com/view/d17101335afafab069dc5022aaea998fcc22409d" class="link-with-icon">了解更多 <i class=" icon-chevron-right"></i></a></p>
        </div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <h3 class="heading-with-icon"><span>④设计验证测试(DVT)</span></h3>
          <p>设计验证完善、软件及电路功能评审、工程样机测试与完善、工程样机评审，电子原理图、 Layout 图、PCB 工艺评审报告，完善的软件流程图、源代码、设计流程图、评审报告、产品规格书</p>
          <p><a href="https://wenku.baidu.com/view/d17101335afafab069dc5022aaea998fcc22409d" class="link-with-icon">了解更多 <i class=" icon-chevron-right"></i></a></p>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <h3 class="heading-with-icon"><span>⑤试产验证(PVT)</span></h3>
          <p>试产申请、试产、试产评审、试产问题跟进 与关闭，产品规格书，BOM 表 SOP，工装治具试产前物料估价表，相关新零部件图纸和样品确认、DVT测试报告</p>
          <p><a href="https://wenku.baidu.com/view/d17101335afafab069dc5022aaea998fcc22409d" class="link-with-icon">了解更多 <i class=" icon-chevron-right"></i></a></p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <h3 class="heading-with-icon"><span>⑥量产(MP)</span></h3>
          <p>归档转产移交，产品规格书（外部版）设计变更需求通知单、技术规范，最终产品电子图纸，物料环保评估报告 产品拆解图和拆解步骤表,零部件、 材质、重量分类汇总表SOP，产品开发移交表</p>
          <p><a href="https://wenku.baidu.com/view/d17101335afafab069dc5022aaea998fcc22409d" class="link-with-icon">了解更多 <i class=" icon-chevron-right"></i></a></p>
        </div>
        <div class="clearfix visible-sm-block"></div>
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