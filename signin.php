<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">

    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Войти</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

        <!-- Font awesome -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">

    <!-- Main Css -->
    <link rel="stylesheet" href="assets/main/css/layout.css">
    <link rel="stylesheet" href="assets/main/css/violet.css">
</head>

</head>
    <div class="wrapper wide-wrapper">
        <div id="header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="header-top-left">
                                <li><a><i class="fa fa-phone"></i> <a href="tel:+7 951 275 04 29">Позвоните нам</a></a></li>
                        </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="account-top-menu">
                                <li><a href="signup.html">Регистрация</a></li>
                                <li class="signin-dropdown">
                                    <a href="#" data-toggle="dropdown">Войти</a>
                                    <div class="dropdown-menu dropdown-login" style="padding:15px;min-width:250px">
                                        <form>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon addon-login"><i
                                                            class="fa fa-user"></i></span>
                                                    <input type="text" placeholder="Username or email"
                                                        required="required" class="form-control input-login">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon addon-login"><i
                                                            class="addon fa fa-lock"></i></span>
                                                    <input type="password" placeholder="Password" required="required"
                                                        class="form-control input-login">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label class="string optional" for="user_remember_me">
                                                        <input type="checkbox" id="user_remember_me" style="">
                                                        Запомнить
                                                    </label>
                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-custom btn-block" value="Sign In">
                                            <a href="forgot_password.html" class="btn-block text-center">Забыли
                                                пароль?</a>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-navbar">
                <div class="navbar main-navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-responsive-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.html">
                                <div class="logo">
                                    <br>
                                    <img src="img/223.png" width="250" vertical-align  class="img-responsive hidden-xs">
                                    <img src="assets/main/img/general/small-logo.png" alt=""
                                        class="img-responsive mini-logo hidden-lg hidden-sm hidden-md">
                                </div>
                            </a>
                        </div>
                        <div class="navbar-collapse collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="index.html">Главная</a></li>
                                <li>
                                    <a href="#">Приём детей <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="room_list.html">Архив приказов</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Безопасность <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="book_new.html">Дорожная безопасность</a></li>
                                        <li><a href="book_new.html">Информационная безопасность</a></li>
                                        <li><a href="book_new.html">Пожарная безопасность</a></li>
                                        <li><a href="book_confirmation.html">Безопасность на воде</a></l>
                                        <li><a href="book_new.html">Экологическая безопасность</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="404.html">Охрана труда </a>
                                
                                </li>
                                <li>
                                    <a href="#">Обратная связь <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="post_list.html">Личный прием граждан</a></li>
                                        <li><a href="post_grid.html">Обратная связь</a></li>
                                        <li><a href="post_single.html">Отзывы</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">О Нас <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gallery.html">Основные сведения</a></li>
                                        <li><a href="gallery_detail.html">Видео</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-wrapper account-wrapper">
            <div class="content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 account-form">
                            <div class="panel panel-default">
                                <div class="panel-intro text-center">
                                    <div class="logo-wrapper text-center">
                                        <?php
                                            if($_COOKIE['user'] == ''):
                                        ?>
                                           <div class="container mt-4">
                                        <h1>Форма регистрации</h1>
                                        <form action="validation/auth.php" method="post">
                                        <input type="login" class="form-control" name="login"
                                        id="login" placeholder="Введите логин"><br>
                                        <input type="password" class="form-control" name="pass"
                                        id="pass" placeholder="Введите пароль"><br>
                                        <button class="btn btn-success"
                                        type="submit">Войти</button>
                                        </form>
                                    </div>
                                    <?php else: ?>
                                    <p>Привет, <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="validation/exit.php">здесь</a>.</p>
                                    <?php endif;?>
                            <p class="text-center after-footer">Нет учетной записи? <a
                                    href="signup.html"><strong>Регистрация</strong></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<br><br><br><br><br><br>
        <section id="footer">
            <div class="main-footer">
                <div class="container">
                    <div class="main-footer-inner">
                        <div class="copyright">
                          bfclay  © 2020 
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <a id="toTop" href="#" class="btn-back-top btn-custom" data-toggle="tooltip" data-placement="top" title="Вверх"><i
            class="fa fa-angle-up"></i></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/plugins/jquery/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugins -->
    <script src="assets/plugins/flexslider/jquery.flexslider.js"></script>
    <!-- Owl Carousel -->
    <script src="assets/plugins/owl-carousel/owl.carousel.js"></script>
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="assets/plugins/smartmenus/jquery.smartmenus.js"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="assets/plugins/smartmenus/addons/bootstrap/jquery.smartmenus.bootstrap.js">
    </script>
    <!-- Shuffle Plugin-->
    <script src="assets/plugins/shuffle/jquery.shuffle.min.js"></script>
    <script src="assets/main/js/shuffle_init.js"></script>
    <!-- CountDown -->
    <script src="assets/plugins/countdown/jquery.countdown.js"></script>

    <!-- Bootstrap Select -->
    <script src="assets/plugins/bootstrap-select/dist/js/bootstrap-select.js"></script>

   
</body>
</html>