<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf8">

  <title>Dormitory of Suleyman Demirel University</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/css.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">



</head>

<body>

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style="height:600px;">
    <div class="item active">
      <div class="carousel-caption car">
        <h1 class="car" style="margin-bottom: 500px;">WELCOME TO <span class="sh">STUDENT HOUSE</span></h1>
      </div>
      <img src="images/slider/sdu.jpg" style="width:1351px; height:760px;opacity:0.8">
    </div>
    <div class="item">
      <div class="carousel-caption car">
        <h1 class="car" style="margin-bottom:37px; padding-bottom:100px">WELCOME TO STUDENT HOUSE</h1>
      </div>
      <img src="images/slider/sdu1.jpg" style="width:1351px; height:760px; ">
    </div>
    <div class="item">
      <div class="carousel-caption car">
        <h1 class="car"style="margin-bottom:37px; padding-bottom:585px"><span class="sh">WELCOME TO STUDENT HOUSE</span></h1>
      </div>
      <img src="images/slider/sdu3.jpg" style="width:1351px; height:760px;">

    </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
</div>

      <div class="main-nav navbar-fixed-bottom">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
              <img class="img-responsive" src="images/logosdu.png" alt="logo">
            </a>
          </div>
          <div class="collapse navbar-collapse ">
            <ul class="nav navbar-nav navbar-right">
              <li class="scroll active"><a href="#home">Домой</a></li>
              <li class="scroll"><a href="#services" class="anchorlink">Сервисы</a></li>
              <li class="scroll"><a href="#about-us" class="anchorlink">О нас</a></li>
              <li class="scroll"><a href="#pricing" class="anchorlink">Прайс-лист</a></li>
              <li class="scroll"><a href="#contact" class="anchorlink">Заявки</a></li>
              <?php if (!empty($_SESSION['login'])) {
                echo '<li style=""><a href="" style="color:white;" id="naved">'.$_SESSION['login'].'</a></li><li style="float:right;"><a href="logout.php" style="color:white;" id="naved">LOG OUT</a></li>';}
                else {?> 
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;" id="naved">LOG IN</a>
                <ul class="dropdown-menu" id="xxx" style="width:250px;">
                  <form action="log.php" method="post" >
                    <div class="form-group" style="width:90%; padding-left:30px; padding-top:10px;">
                      <input name="login" type="text" class="form-control" id="exampleInputEmail1" placeholder="Login">
                    </div>
                    <div class="form-group" style="width:90%; padding-left:30px;">
                      <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <?php
                      if(isset($_GET['error'])==true){
                        echo '<div class="form-group" style="width:90%; padding-left:30px;">
                                <p align="center"style="color:red;">Incorrect Login/Password</p>
                              </div>';
                      }
                    ?>
                    <p><button class="btn btn-success" type="submit" style="height:32px;float:left;margin-left:30px; display:inline-block;font-size:14px;background-color:#002248;">Log in</button>
                        <a class="btn btn-success" data-toggle="modal" data-target="#myModal"  style="padding:6px;height:32px;float:right;margin-right:25px;display:inline-block;font-size:14px;background-color:#002248;">New user</a>
                    </p>
                  </form>
                </ul>
              </li>
              <?php } ?>
            
            </ul>
          </div>
        </div>
      </div><!--/#main-nav-->
      <div class="modal fade" id="myModal" role="dialog" style="margin-top:20px; ">
        <form action="reg.php" data-toggle="validator" method="post" >
          <div class="modal-dialog" id="xxx">

            <div class="modal-content" id="xxx" style="background-color:rgba(128,128,128,0.7)">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="color:white;font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;">Registration</h4>
              </div>
              <div class="modal-body">
                    <div class="container">
                      <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1" style="color:white;">Name:</label>
                          <input style="color:white;" name="name" type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" required>
                        </div>
                      </div>
                    </div>
                    <div class="container">
                      <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1" style="color:white;">Surname:</label>
                          <input  style="color:white;" name="surname" type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter surname" required>
                        </div>
                      </div>
                    </div>
                    <div class="container">
                      <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1" style="color:white;">E-mail:</label>
                          <input style="color:white;" name="email" type="emaiL" class="form-control" id="exampleInputEmail1" placeholder="Enter e-mail" required>
                        </div>
                      </div>
                    </div>
                    <div class="container">
                      <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1" style="color:white;">Login:</label>
                          <input style="color:white;" name="login" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter new login" required>
                        </div>
                      </div>
                    </div>
                    <div class="container">
                      <div class="col-sm-6 col-xs-12">
                        <div class="form-group" style="color:white;>
                          <label for="exampleInputEmail1" class="control-label" style="color:white;">Password:</label>
                          <input style="color:white;"  name="password" data-minlength="6" type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter new password" required>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-success" type="submit" style="height:32px;flot:left;margin-left:0px; display:inline-block;font-size:14px;background-color:#002248;">Sign up</button>
                <a class="btn btn-success"  data-dismiss="modal"style="height:32px;float:right;margin-right:25px;display:inline-block;font-size:14px;background-color:#002248;">Close</a>
              </div>
            </div>
          </div>
        </form>
      </div>

      </header><!--/#home-->
      <section id="services">
      <div class="container">
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="row">
            <div class="text-center col-sm-8 col-sm-offset-2">
              <h2>Наши Сервисы</h2>
              <p>Наш сайт предоставляет спектр возможностей, которые облегчат жизнь в общежитии</p>
            </div>
          </div>
        </div>
        <div class="text-center our-services">
          <div class="row">
            <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="service-icon">
                <i class="fa fa-soccer-ball-o"></i>
              </div>
              <div class="service-info">
                <h3>Футбольное поле</h3>
                <p>Мы предоставляем онлайн-резервацию футбольного поля для всех желающих</p>
              </div>
            </div>
            <div class="col-sm-4 wow fadeInDown services-pos" data-wow-duration="1000ms" data-wow-delay="450ms">
              <div class="service-icon">
                <i class="fa fa-users"></i>
              </div>
              <div class="service-info">
                <h3>Тренажерный зал</h3>
                <p>Онлайн-резервация мест и покупка абонемента в тренажерный зал</p>
              </div>
            </div>
            <div class="col-sm-4 wow fadeInDown services-pos" data-wow-duration="1000ms" data-wow-delay="550ms">
              <div class="service-icon">
                <i class="fa fa-magic"></i>
              </div>
              <div class="service-info">
                <h3>Бильярд</h3>
                <p>Резервация бильярдных столов в общежитии</p>
              </div>
            </div>
          </div>
          <div class="row" style="margin-top:20px;">
            <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
              <div class="service-icon">
                <i class="fa fa-desktop"></i>
              </div>
              <div class="service-info">
                <h3>Кинотеатр</h3>
                <p>Просмотр кино в кинотеатре</p>
              </div>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
              <div class="service-icon">
                <i class="fa fa-gamepad"></i>
              </div>
              <div class="service-info">
                <h3>Игровые приставки</h3>
                <p>Аренда игровых приставок в мужском общежитии</p>
              </div>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
              <div class="service-icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="service-info">
                <h3>Аэробика</h3>
                <p>Онлайн-резервация места в фитнес-зале для занятий аэробикой в женском общежитии</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </section><!--/#services-->


  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>О Нас</h2>
            <p>
              Студенческий дом университета имени Сулеймана Демиреля предлагает студентам не только проживание и питание на территории Смарт-Кампуса во время учебы, но и возможность развиваться и укреплять свои социальные позиции. Администрация общежития совместно со студентами проводят познавательные беседы друг с другом, тем самым повышая свои личные качества. Отношения администрации и студентов строятся на взаимопонимании, дружбе и согласии. Нашим главным приоритетом является – студент. В наши обязанности входит создание оптимально комфортных условий для проживания наших студентов, правильное ежедневное питание, постоянная психологическая поддержка, а также пропаганда спорта и активного отдыха.

В студенческом доме СДУ живут и развиваются студенты со всех уголков Казахстана, ближнего и дальнего Зарубежья. Это означает, что развитие патриотизма, а также повышение культурного осознания путем общения с представителями других стран, улучшают дружественные связи с другими народами.

Наша главная миссия – создание дружной, понимающей друг друга, живущей в единстве молодежи, которая будет тянутся к знаниям. Этот фактор сыграет определяющую роль в становлении людей, который будут развивать Казахстан на международном уровне во всех отраслях.

            </p>
          </div>
        </div>

      </div>
    </div>
  </section><!--/#about-us-->


  <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Прайс-лист</h2>
          <p>Здесь вы можете узнать цены на временные подписки</p>
        </div>
      </div>
      <div class="pricing-table">
        <div class="row" style="margin:auto">
          <div class="col-sm-4">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <h3>Футбольное поле</h3>
              <div class="price">
                3000KZT<span>/1 час</span>
              </div>
              <ul>
                <li>Искусственный газон</li>
                <li>Размер: 30м х 15</li>
                <li>Рядом с общежитией</li>
              </ul>
              <a href="#contact" class="btn btn-lg btn-primary">Оставить заявку</a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h3>Тренажерный зал</h3>
              <div class="price">
                3000 KZT<span>Месяц</span>
              </div>
              <ul>
                <li>Большой зал</li>
                <li>Полный комплекс услуг</li>
                <li>Персональные тренировки</li>
              </ul>
              <a href="#contact" class="btn btn-lg btn-primary">Оставить заявку</a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <h3>Кинотеатр</h3>
              <div class="price">
               500 KZT<span>/1 фильм</span>
              </div>
              <ul>
                <li>HD качество</li>
                <li>Удобные сидения</li>
                <li>Низкие цены</li>
              </ul>
              <a href="#contact" class="btn btn-lg btn-primary">Оставить заявку</a>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top:20px;">
          <div class="col-sm-4">
            <div class="single-table wow flipInY">
              <h3>Бильярд</h3>
              <div class="price">
                300KZT<span>/1 час</span>
              </div>
              <ul>
                <li>Удобно</li>
                <li>Качественно</li>
                <li>Два стола</li>
              </ul>
              <a href="#contact" class="btn btn-lg btn-primary">Оставить заявку</a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="single-table wow flipInY" >
              <h3>Игровые приставки</h3>
              <div class="price">
                300KZT<span>/1 час</span>
              </div>
              <ul>
                <li>Новые приставки</li>
                <li>Новые игры</li>
                <li>Удобные джойстики</li>
              </ul>
              <a href="#contact" class="btn btn-lg btn-primary">Оставить заявку</a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="single-table wow flipInY" >
              <h3>Фитнес</h3>
              <div class="price">
                3000KZT<span>/1 месяц</span>
              </div>
              <ul>
                <li>Онлайн тренировки</li>
                <li>Аэробика</li>
                <li>Танцы</li>
              </ul>
              <a href="#contact" class="btn btn-lg btn-primary">Оставить заявку</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#pricing-->



  <section id="contact">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 ">
            <h2>Заявки онлайн</h2>
            <p>Здесь вы можете оставить онлайн заявки на услуги общежития Сулейман Демирель Университета</p>
          </div>
        </div>
        <div class="contact-form  fadeIn" ">
          <div class="row">
            <div class="col-sm-6">
              <form action="zayavka.php" method="post" id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" >
                  <div class="col-sm-6">
                    <?php if (!empty($_SESSION['login'])) {
                      echo '<div class="form-group">
                      <label for="">Ник:</label>
                      <input type="text" name="name" value="'.$_SESSION['login'].'"class="form-control" placeholder="Имя" required="required" >
                            </div>
                  </div>
                </div>';}
                ?>
                <div class="form-group " >
                    <label for="">Категории:</label>
                      <select name="category" style="color:white;"class="form-control">
                        <option value="" disabled selected>Выберите...</option>
                        <option style="color:black;">SDU Arena</option>
                        <option style="color:black;">GYM</option>
                        <option style="color:black;">Aerobics</option>
                        <option style="color:black;">Pool</option>
                        <option style="color:black;">Cinema</option>
                        <option style="color:black;">PS4</option>
                      </select>
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Comment" required="required"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn-submit">Оставить заявку</button>
                </div>
              </form>
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" >
                <p></p>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Адрес:</span> г.Каскелен, пр.Абылай хана 1/1 </li>
                  <li><i class="fa fa-phone"></i> <span> Тел.:</span> +7701 1 000 000 </li>
                  <li><i class="fa fa-envelope"></i> <span> Почта:</span><a href="mailto:"> support@sdu.edu.kz</a></li>
                  <li><i class="fa fa-globe"></i> <span> Вебсайт:</span> <a href="#">sdu.dorm.kz</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" >
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="images/logosdu.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; Project work</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="">Abzal</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  
  <script type="text/javascript">
$('a').click(function () {
    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top
    }, 1500);
    return false;
});
  </script>
</body>
</html>
