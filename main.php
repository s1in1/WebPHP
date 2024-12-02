<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Landing</title>
</head>
<body>
    <div class="container">

        <header class="header">

            <img src="./assets/img/logo/long_mcquade_logo.png.png" alt="" class="logo">

            <div class="header__el">
                <ul class="header__ul">
                    <li class="header__ul_li">+1 234 566 78 90</li>
                    <li class="header__ul_li">+1 234 566 78 90</li>
                </ul>
            </div>
            
            <div class="header__el">
               <ul class="header__ul"> 
                   <li class="header__ul_li">
                        <p>longandmcsupport@mail.com</p>
                   </li>
                    <li class="header__ul_li">
                        <img src="./assets/img/icons/ic_baseline-telegram.png" alt="" class="header__ul_li_link">
                        <img src="./assets/img/icons/mingcute_whatsapp-fill.png" alt="" class="header__ul_li_link">
                        <img src="./assets/img/icons/ri_instagram-fill.png" alt="" class="header__ul_li_link">
                        <img src="./assets/img/icons/entypo-social_vk-with-circle.png" alt="" class="header__ul_li_link">
                    </li>
                </ul> 
            </div>
            
            <div class="header__el">
               <div class="header__login">
                    <p class="header__login_p">Вы вошли в </p>
                    <p class="header__login_acc"></p>
                </div>

                <div class="header__lang">
                    <p class="header__lang_p">Русский</p>
                    <div class="header__lang_btn"><a><img src="" alt=""></a></div>
                </div>  
            </div>
                   

        </header>

        <div class="secHeader">

            <nav class="secHeader__nav">
                <ul class="secHeader__nav_list">
                    <li class="secHeader__nav_list_link current">Главная</li>
                    <li class="secHeader__nav_list_link">Каталог</li>
                    <li class="secHeader__nav_list_link">О нас</li>
                    <li class="secHeader__nav_list_link">Бренды</li>
                    <li class="secHeader__nav__search"><input type="search" name="" id=""></li>
                    <li class="secHeader__nav_list_link">Войти</li>
                    <li class="secHeader__nav_list_link">Добавить товар</li>
                    <li class="secHeader__nav_list_cart"><img src="" alt=""></li>
                    <li class="secHeader__nav_list_fav"><img src="" alt=""></li>
                </ul>
            </nav>

        </div>

        <div class="content">

            <div class="content__sideBar">

                <div class="content__sideBar_categories">

                    <h1 class="content__sideBar_categories_title">Категории</h1>

                    <ul class="content__sideBar_categories_list">
                        <li class="content__sideBar_categories_list_catName">Гитары</li>
                        <li class="content__sideBar_categories_list_type"><a>Акустические гитары</a></li>
                        <li class="content__sideBar_categories_list_type"><a>Электро-гитары</a></li>
                        <li class="content__sideBar_categories_list_type"><a>Классические гитары</a></li>
                    </ul>

                    <ul class="content__sideBar_categories_list">
                        <li class="content__sideBar_categories_list_catName">Ударные инструменты</li>
                        <li class="content__sideBar_categories_list_type"><a>Акустические установки</a></li>
                        <li class="content__sideBar_categories_list_type"><a>Электронные установки</a></li>
                        <li class="content__sideBar_categories_list_type"><a>Палочки</a></li>
                    </ul>

                    <ul class="content__sideBar_categories_list">
                        <li class="content__sideBar_categories_list_catName">Микрофоны</li>
                        <li class="content__sideBar_categories_list_type"><a>Динамические</a></li>
                        <li class="content__sideBar_categories_list_type"><a>Конденсаторные</a></li>
                        <li class="content__sideBar_categories_list_type"><a>Инструментальные</a></li>
                    </ul>

                </div>

                <div class="content__sideBar_subscription">

                    <h1 class="content__sideBar_subscription_title">Подпишитесь на рассылку, чтобы узнавать о новых поступлениях</h1>

                    <input class="content__sideBar_subscription_email" type="email" name="" id="">
                    <input class="content__sideBar_subscription_btn" type="submit" name="" id="">

                    <p class="content__sideBar_subscription_notification">*нажимая, вы соглашаетесь с Пользовательским соглашением</p>

                </div>

            </div>

            <div class="content__main">

                <div class="content__main__sort">

                    <p class="content__main__sort_p">Сортировать:</p>
                    <a href="" class="content__main__sort_a">сначала недорогие</a>
                    <img src="" alt="" class="content__main__sort_btn">

                </div>

                <div class="content__main__products">

                    <div class="content__main__products_card">

                        <img class="content__main__products_card_img" src="" alt="">

                        <h1 class="content__main__products_card_title"></h1>

                        <div class="content__main__products_card_block">
                            <p class="content__main__products_card_price"></p>
                        </div>

                        <div class="content__main__products_card_block">
                            <img class="content__main__products_card_addToFav" src="" alt="">
                        </div>

                        <div class="content__main__products_card_cartBlock">
                            <img class="content__main__products_card_addToCart" src="" alt="">
                        </div>

                    </div>

                </div>

                <div class="content__main__downloadMore">
                    <a href="">Загрузить ещё</a>
                </div>

            </div>       

        </div>

        <footer class="footer">

            <div class="footer__nav">

                <div class="footer__nav__logo">
                    <img class="footer__nav__logo_img" src="" alt="">
                </div>

                <div class="footer__nav__pages">
                    <ul class="footer__nav__pages__list">
                        <li class="footer__nav__pages__list_el"><h1>Страницы</h1></li>
                        <li class="footer__nav__pages__list_el">Главная</li>
                        <li class="footer__nav__pages__list_el">Каталог</li>
                        <li class="footer__nav__pages__list_el">Войти</li>
                    </ul>
                </div>

                <div class="footer__nav__help">
                    <ul class="footer__nav__help__list">
                        <li class="footer__nav__pages__list_el"><h1>Помощь</h1></li>
                        <li class="footer__nav__pages__list_el">FAQ</li>
                        <li class="footer__nav__pages__list_el">Помощь</li>
                        <li class="footer__nav__pages__list_el">Пользовательское соглашение</li>
                    </ul>
                </div>

                <div class="footer__nav__company">
                    <ul class="footer__nav__company__list">
                        <li class="footer__nav__pages__list_el"><h1>Компнания</h1></li>
                        <li class="footer__nav__pages__list_el">О нас</li>
                        <li class="footer__nav__pages__list_el">Вакансии</li>
                        <li class="footer__nav__pages__list_el">Бренды</li>
                    </ul>
                </div>

                <div class="footer__nav__location">
                    <ul class="footer__nav__location__list">
                        <li class="footer__nav__pages__list_el"><h1>Страницы</h1></li>
                        <li class="footer__nav__pages__list_el"><img src="" alt=""></li>                      
                    </ul>
                </div>

            </div>

        </footer>

    </div>
</body>
</html>