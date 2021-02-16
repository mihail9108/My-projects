<?php include "feedback_form.php";?>
<!DOCTYPE html>
    <html lang="ru">
    <head itemscope="itemscope" itemtype="http://schema.org/WebSite">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta itemprop="name" content="Тестовое задание АБВ! СТУДИЯ">
        <meta itemprop="url" content="https://tz_abvstudio.ru/">
        <link rel="stylesheet" href="css/index/bootstrap-grid.css">
        <link rel="stylesheet" media="(max-width:768px)" href="css/index/320.css">
        <link rel="stylesheet" media="(min-width:768px) and (max-width:1200px)" href="css/index/768.css">
        <link rel="stylesheet" media="(min-width:1200px)" href="css/index/1200.css">
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/picturefill.js"></script>
        <script src="js/polyfill.js"></script>
        <script src="js/dropdown_menu.js" defer></script>
        <script src="js/menu.js" defer></script>
        <script src="js/slider_photos.js" defer></script>
        <script src="js/slider_catalog.js" defer></script>
        <script src="js/popup.js" defer></script>
        <title>Тестовое задание АБВ! СТУДИЯ</title>
    </head>
<body>
<header class="site_header">
    <div class="site_header_inner">
        <div class="header_row_1">
        <div class="container">
            <div class="row row_header">
                <div class="col-md-10 col-lg-10 col-xl-10">
                <ul class="nav_menu">
                    <li>
                        <a href="#" class="menu_item">
                            <span class="menu_item_underline">Главная</span>
                        </a>
                    </li>
                    <li>
                        <a href="#link_slider_photos" class="menu_item">
                            <span class="menu_item_underline">Слайдер</span>
                        </a>
                    </li>
                    <li>
                        <a href="#link_slider_catalog" class="menu_item">
                            <span class="menu_item_underline">Карточки</span>
                        </a>
                    </li>
                    <li>
                        <a href="#link_feedback_form" class="menu_item">
                            <span class="menu_item_underline">Форма</span>
                        </a>
                    </li>
                    <li>
                        <a href="#link_dropdown_menu" class="menu_item">
                            <span class="menu_item_underline">Список</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu_item popup-open">
                            <span class="menu_item_underline">Модалка</span>
                        </a>
                    </li>
                </ul>
                </div>

                <div class="col-12 col-sm-12">
                <div class="burger_menu">
                    <div class="menu">
                        <div class="icon-close">
                            <img src="img/320/close-btn.png">
                        </div>
                        <ul>
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">Слайдер</a></li>
                            <li><a href="#">Карточки</a></li>
                            <li><a href="#">Форма</a></li>
                            <li><a href="#">Список</a></li>
                            <li><a href="#">Модалка</a></li>
                        </ul>
                    </div>
                        <picture class="icon-menu">
                            <source class="icon-menu" media="(min-width:320px) and (max-width:768px)"
                                    srcset="img/320/menu-ham-icon-new.png">
                            <source class="icon-menu" media="(min-width:768px) and (max-width:1200px)"
                                    srcset="img/768/menu-ham-icon-new_tablet.png">
                            <source class="icon-menu" media="(min-width:1000px)"
                                    srcset="img/1200/menu-ham-icon-new_decstop.png">
                            <img class="icon-menu" srcset="img/320/menu-ham-icon-new.png" alt="">
                        </picture>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</header>
<div class="content">
    <div class="content_row1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <picture class="background_content">
                            <source class="background_content" media="(min-width:320px) and (max-width:768px)"
                                    srcset="img/320/web-app1.png">
                            <source class="background_content" media="(min-width:768px) and (max-width:1000px)"
                                    srcset="img/768/web-app1.png">
                            <source class="background_content" media="(min-width:1200px)"
                                    srcset="img/1200/web-app1.png">
                            <img class="background_content" srcset="img/320/web-app1.png" alt="">
                        </picture>
                    <div class="background_section_content">
                        <div class="background_content_item">
                            <h2 class="background__content_title">ТЕСТОВОЕ ЗАДАНИЕ <br class="br_tablet_decstop"> АБВ! СТУДИЯ</h2>
                            <div class="modal_window_header_button">
                                <a href="#" class="modal_window_header_button popup-open">Модальное окно</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
    <div class="content_row2">
        <div class="container">
            <div class="row row_slider">
                <div class="col-10 col-sm-8 col-md-8 col-lg-8 col-xl-7">
                    <div id="link_slider_photos" class="slider_photos">
                    <div class="slider_header">СЛАЙДЕР</div>
                    <div class="slider_content">
                        <div class="slider__wrapper">
                            <div class="slider__photos_item">
                                            <picture class="slider__photos_img">
                                                <source class="slider__photos_img" media="(min-width:320px) and (max-width:768px)"
                                                        srcset="img/320/slide_one.png">
                                                <source class="slider__photos_img" media="(min-width:768px) and (max-width:1200px)"
                                                        srcset="img/768/slide_one.png">
                                                <source class="slider__photos_img" media="(min-width:1200px)"
                                                        srcset="img/1200/slide_one.png">
                                                <img class="slider__photos_img" srcset="img/320/slide_one.png" alt="">
                                            </picture>
                                <a class="slider__control slider__control_left" href="#" role="button"></a>
                                <a class="slider__control slider__control_right" href="#" role="button"></a>
                            </div>
                            <div class="slider__photos_item">
                                            <picture class="slider__photos_img">
                                                <source class="slider__photos_img" media="(min-width:320px) and (max-width:768px)"
                                                        srcset="img/320/slide_two.png">
                                                <source class="slider__photos_img" media="(min-width:760px) and (max-width:1200px)"
                                                        srcset="img/768/slide_two.png">
                                                <source class="slider__photos_img" media="(min-width:1200px)"
                                                        srcset="img/1200/slide_two.png">
                                                <img class="slider__photos_img" srcset="img/320/slide_two.png" alt="">
                                            </picture>
                                <a class="slider__control slider__control_left" href="#" role="button"></a>
                                <a class="slider__control slider__control_right" href="#" role="button"></a>
                            </div>
                            <div class="slider__photos_item">
                                            <picture class="slider__photos_img">
                                                <source class="slider__photos_img" media="(min-width:320px) and (max-width:768px)"
                                                        srcset="img/320/slide_three.png">
                                                <source class="slider__photos_img" media="(min-width:768px) and (max-width:1200px)"
                                                        srcset="img/768/slide_three.png">
                                                <source class="slider__photos_img" media="(min-width:1200px)"
                                                        srcset="img/1200/slide_three.png">
                                                <img class="slider__photos_img" srcset="img/320/slide_three.png" alt="">
                                            </picture>
                                <a class="slider__control slider__control_left" href="#" role="button"></a>
                                <a class="slider__control slider__control_right" href="#" role="button"></a>
                            </div>
                            <div class="slider__photos_item">
                                            <picture class="slider__photos_img">
                                                <source class="slider__photos_img" media="(min-width:320px) and (max-width:768px)"
                                                        srcset="img/320/slide_four.png">
                                                <source class="slider__photos_img" media="(min-width:768px) and (max-width:1200px)"
                                                        srcset="img/768/slide_four.png">
                                                <source class="slider__photos_img" media="(min-width:1200px)"
                                                        srcset="img/1200/slide_four.png">
                                                <img class="slider__photos_img" srcset="img/320/slide_four.png" alt="">
                                            </picture>
                                <a class="slider__control slider__control_left" href="#" role="button"></a>
                                <a class="slider__control slider__control_right" href="#" role="button"></a>
                            </div>
                            <div class="slider__photos_item">
                                            <picture class="slider__photos_img">
                                                <source class="slider__photos_img" media="(min-width:320px) and (max-width:768px)"
                                                        srcset="img/320/slide_five.png">
                                                <source class="slider__photos_img" media="(min-width:768px) and (max-width:1200px)"
                                                        srcset="img/768/slide_five.png">
                                                <source class="slider__photos_img" media="(min-width:1200px)"
                                                        srcset="img/1200/slide_five.png">
                                                <img class="slider__photos_img" srcset="img/320/slide_five.png" alt="">
                                            </picture>
                                <a class="slider__control slider__control_left" href="#" role="button"></a>
                                <a class="slider__control slider__control_right" href="#" role="button"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="content_row3">
        <div class="container">
            <div class="row row_slider">
                <div class="col-10 col-sm-8 col-md-8 col-lg-8 col-xl-7">
                    <div id="link_slider_catalog" class="slider_catalog">
                        <div class="slider_header">КАРТОЧКИ</div>
                        <div class="slider_content">
                            <a class="slider__control slider__control_left" href="#" role="button"></a>
                            <a class="slider__control slider__control_right" href="#" role="button"></a>
                                <div class="slider__wrapper">
                                <div class="slider__catalog_item">
                                    <div class="cards_item_section_content">
                                        <div class="cards_item_content_title">УСЛУГА 1 </div>
                                    </div>
                                    <a class="cards_item_img" href="">
                                        <picture class="slider__cards_img">
                                            <source class="slider__cards_img" media="(min-width:320px) and (max-width:768px)"
                                                    srcset="img/320/slide_uslugi_mobile.png">
                                            <source class="slider__cards_img" media="(min-width:768px) and (max-width:1200px)"
                                                    srcset="img/768/slide_uslugi_tablet.png">
                                            <source class="slider__cards_img" media="(min-width:1200px)"
                                                    srcset="img/1200/slide_uslugi_decstop.png">
                                            <img class="slider__cards_img" srcset="img/320/slide_uslugi_mobile.png" alt="">
                                        </picture>
                                    </a>
                                        <div class="modal_window_catalog_button">
                                            <a href="#" class="modal_window_catalog_button popup-open">Модальное окно</a>
                                        </div>
                                    </div>
                                <div class="slider__catalog_item">
                                    <div class="cards_item_section_content">
                                        <div class="cards_item_content_title">УСЛУГА 2</div>
                                    </div>
                                    <a class="cards_item_img" href="">
                                        <picture class="slider__cards_img">
                                            <source class="slider__cards_img" media="(min-width:320px) and (max-width:768px)"
                                                    srcset="img/320/slide_uslugi_mobile.png">
                                            <source class="slider__cards_img" media="(min-width:768px) and (max-width:1200px)"
                                                    srcset="img/768/slide_uslugi_tablet.png">
                                            <source class="slider__cards_img" media="(min-width:1200px)"
                                                    srcset="img/1200/slide_uslugi_decstop.png">
                                            <img class="slider__cards_img" srcset="img/320/slide_uslugi_mobile.png" alt="">
                                        </picture>
                                    </a>
                                    <div class="modal_window_catalog_button">
                                        <a href="#" class="modal_window_catalog_button popup-open">Модальное окно</a>
                                    </div>
                                </div>
                                <div class="slider__catalog_item">
                                    <div class="cards_item_section_content">
                                        <div class="cards_item_content_title">УСЛУГА 3</div>
                                    </div>
                                    <a class="cards_item_img" href="">
                                        <picture class="slider__cards_img">
                                            <source class="slider__cards_img" media="(min-width:320px) and (max-width:768px)"
                                                    srcset="img/320/slide_uslugi_mobile.png">
                                            <source class="slider__cards_img" media="(min-width:768px) and (max-width:1200px)"
                                                    srcset="img/768/slide_uslugi_tablet.png">
                                            <source class="slider__cards_img" media="(min-width:1200px)"
                                                    srcset="img/1200/slide_uslugi_decstop.png">
                                            <img class="slider__cards_img" srcset="img/320/slide_uslugi_mobile.png" alt="">
                                        </picture>
                                    </a>
                                    <div class="modal_window_catalog_button">
                                        <a href="#" class="modal_window_catalog_button popup-open">Модальное окно</a>
                                    </div>
                                </div>
                                <div class="slider__catalog_item">
                                    <div class="cards_item_section_content">
                                        <div class="cards_item_content_title">УСЛУГА 4</div>
                                    </div>
                                    <a class="cards_item_img" href="">
                                        <picture class="slider__cards_img">
                                            <source class="slider__cards_img" media="(min-width:320px) and (max-width:768px)"
                                                    srcset="img/320/slide_uslugi_mobile.png">
                                            <source class="slider__cards_img" media="(min-width:768px) and (max-width:1200px)"
                                                    srcset="img/768/slide_uslugi_tablet.png">
                                            <source class="slider__cards_img" media="(min-width:1200px)"
                                                    srcset="img/1200/slide_uslugi_decstop.png">
                                            <img class="slider__cards_img" srcset="img/320/slide_uslugi_mobile.png" alt="">
                                        </picture>
                                    </a>
                                    <div class="modal_window_catalog_button">
                                        <a href="#" class="modal_window_catalog_button popup-open">Модальное окно</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content_row4">
        <div class="container">
            <div id="link_feedback_form" class="feedback_form">
                <div class="row row_header_form">
                    <div class="col-10 col-sm-8 col-md-8 col-lg-8 col-xl-7">
                        <div class="feedback_form_header">ФОРМА</div>
                    </div>
                </div>
                <div class="row row_content_form">
                    <div class="col-10 col-sm-8 col-md-8 col-lg-8 col-xl-7">
                        <div class="form">
                            <div class="form_template">
                                <div class="form_content_header">Стандартная форма обратной связи</div>
                                <form class="form_fields" method="post">
                                    <input type="hidden" name="act" value="y" />
                                    <div class="user_data">
                                        <input name="posName" class="user_name" placeholder="Ваше имя*"/>
                                        <input name="posRegard" class="user_tel" placeholder="Ваш номер*"/>
                                    </div>
                                    <div class="user_data">
                                        <input class="user_mail" name="posEmail" placeholder="Ваш E-mail*"/>
                                    </div>
                                    <div class="user_message">
                                        <textarea name="posText" class="user_message form_message" placeholder="Сообщение"></textarea>
                                    </div>
                                    <div class="captcha">
                                        <input class="text_captcha" name="keystring" placeholder="Ввведите цифры"/>
                                        <a href='readme.html'><img src="kcaptcha?<?php echo session_name()?>=<?php echo session_id()?>" border=0></a>
                                    </div>
                                    <input class="submit_button" type="submit" name="selfCC" id="selfCC" value=" Отправить " />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content_row5">
        <div class="container">
            <div class="row row_dropdown_menu">
                <div class="col-10 col-sm-8 col-md-7 col-lg-7 col-xl-7">
                    <div id="link_dropdown_menu" class="dropdown_menu">
                        <div class="dropdown_menu_header">СПИСОК</div>
                        <div class="dropdown_menu_content">
                            <div class="dropdown">
                                <div class="select">
                                    <span class="description_dropdown">Список 1</span>
                                    <div class="icon">
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Описание</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <div class="select">
                                    <span class="description_dropdown">Список 2</span>
                                    <div class="icon">
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Описание</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <div class="select">
                                    <span class="description_dropdown">Список 3</span>
                                    <div class="icon">
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Описание</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <footer class="site_footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="row row_footer">
                        <div class="col-md-10 col-lg-10 col-xl-10">
                            <ul class="nav_menu">
                                <li>
                                    <a href="#" class="menu_item">
                                        <span class="menu_item_underline">Главная</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="menu_item">
                                        <span class="menu_item_underline">Слайдер</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="menu_item">
                                        <span class="menu_item_underline">Карточки</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="menu_item">
                                        <span class="menu_item_underline">Форма</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="menu_item">
                                        <span class="menu_item_underline">Список</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="menu_item popup-open">
                                        <span class="menu_item_underline">Модалка</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<div class="popup-fade">
    <div class="popup">
        <a class="popup-close" href="#"></a>
        <div class="popup-header">МОДАЛКА</div>
    </div>
</div>
</body>
</html>