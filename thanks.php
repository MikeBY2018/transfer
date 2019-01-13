<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <title>Ваш заказ оформлен!</title>
    <!-- Short description of the page (limit to 150 characters) -->
    <!-- In *some* situations this description is used as a part of the snippet shown in the search results. -->
    <meta name="description" content="Интеллектуальный трансфер в любую точку Беларуси. Интеллектуальный сервис. Аренда автомобилей с водителем. Трансфер">
    
    <!-- Control the behavior of search engine crawling and indexing -->
    <meta name="robots" content="index,follow,noodp"><!-- All Search Engines -->
    <meta name="googlebot" content="index,follow"><!-- Google Specific -->
    
    <!-- Tells Google not to show the sitelinks search box -->
    <meta name="google" content="nositelinkssearchbox">
    
    <!-- Tells Google not to provide a translation for this page -->
    <meta name="google" content="notranslate">
    
    <!-- Verify ownership for Google Search Console -->
    <meta name="google-site-verification" content="verification_token">
    
    <!-- Used to name software used to build the website (i.e. - Wordpress, Dreamweaver) -->
    <meta name="generator" content="program">
    
    <!-- Short description of your site's subject -->
    <meta name="subject" content="transfer auto">
     
    <!-- Describes the topic of the website -->
    <meta name="topic" content="Предоставление автомобилей в аренду">
    
    <!-- Brief summary of the company or purpose of the website -->
    <meta name="summary" content="">
    
    
    <!-- Full domain name or web address -->
    <meta name="url" content="http://rvgroup.by/">
    
    <meta name="directory" content="submission">
    
    <!-- Does the same function as the keywords tag -->
    <meta name="category" content="">
    
    <!-- Makes sure your website shows up in all countries and languages -->
    <meta name="coverage" content="Worldwide">
    
    <!-- Does the same as the coverage tag -->
    <meta name="distribution" content="Global">
    
    <!-- Gives a general age rating based on sites content -->
    <meta name="rating" content="General">
    
    <!-- Allows control over how referrer information is passed -->
    <meta name="referrer" content="never">
    
    <!-- Disable automatic detection and formatting of possible phone numbers -->
    <meta name="format-detection" content="telephone=no">
    
    <!-- Geo tags -->
    <meta name="ICBM" content="latitude, longitude">
    <meta name="geo.position" content="latitude;longitude">
    <meta name="geo.region" content="Minsk"><!-- Country code (ISO 3166-1): mandatory, state code (ISO 3166-2): optional; eg. content="US" / content="US-NY" -->
    <meta name="geo.placename" content="Minsk"><!-- eg. content="New York City" -->
</head>
<body>
    <header>
        <div class="wrapper w3-row">
            <nav class="w3-col l9">
                <div id="menu_toggle">
                    <input type="checkbox" id="checkbox3" class="checkbox3 visuallyHidden">
                    <label for="checkbox3">
                        <span class="hamburger hamburger3">
                            <span class="bar bar1"></span>
                            <span class="bar bar2"></span>
                            <span class="bar bar3"></span>
                            <span class="bar bar4"></span>
                        </span>
                    </label>    
                </div>
                <div class="w3-bar">
                    <a href="index.php" class="w3-bar-item w3-mobile">Главная</a>
                    <a href="index.php#tourism" class="w3-bar-item w3-mobile">Туристическим агентам</a>
                    <a href="index.php#rewiev" class="w3-bar-item w3-mobile">Отзывы</a>
                    <a href="index.php#contacts" class="w3-bar-item w3-mobile">Контакты</a>
                </div>
            </nav>
            <div class="calling w3-col l3 w3-padding-16">
                <a href="tel:+375296098260">+375(29)609-82-60</a><br>
                <b>
                    <a title="Viber" href="viber://add?number=375296098260">
                        <img src="img/viber.svg" alt="Viber">Viber</a>
                    <a title="WhatsApp" href="whatsapp://send?phone=+375296098260">
                        <img src="img/whatsapp.svg" alt="WhatsApp">WhatsApp</a> 
                    <a title="Telegram" href="tg://resolve?domain=nikname">
                        <img src="img/telegram.svg" alt="Telegram">Telegram</a>
                </b>            
            </div>      
        </div>
    </header>
    <main>
        <div class="intellectual_transfer">
            <div class="wrapper">
                <div class="cheked_thanks">
                    <img src="img/checked.png" alt="Отметка Выбрано">
                    <p>Ваш заказ &lt;номер заказа&gt; зарегистрирован.<br>
                    Спасибо, что выбрали нашу компанию!</p>
                </div>                
            </div>
        </div>
    </main>
    <footer id="contacts">
        <strong class="notes">Мы формируем новую культуру перемещения</strong>
        <div class="wrapper">            
            <section>
                <div class="info">
                    <div class="site_logo_f"> 
                        <a href=""><img src="img/logotransfer.svg" alt="Логотип RVG" width="260"></a>
                    </div>
                    <h3>RVGroup</h3>
                    <p>
                        <span>г. Минск, ул. З. Бядули, 11, офис 816</span><br>
                        <a href="tel:+375296098260">+375(29)609-82-60</a><br>
                        <a href="mailto:rvgroup98@gmail" target="_blank">rvgroup98@gmail.com</a><br>
                        <span>Время работы: 24/7</span>
                    </p>
                </div>
                <div class="form">
                    <p>Здесь вы можете cделать заказ</p>
                    <form action="mail1.php" method="POST" id="form-order2">
                        <input type="text" name = "name" placeholder="Введите имя" class="w3-input w3-border w3-round-large w3-margin-bottom" required>
                        <input type="tel" name = "phone" placeholder="Введите номер телефона" class="w3-input w3-border w3-round-large w3-margin-bottom" title="В формате +375 xx xxx xx xx" required  pattern="[\+]?(375)[\s]?[\(?|\s|\-]?(25|29|33|44)[\s]?[\(?|\s|\-]?\d{3}[\s|\-]?\d{2}[\s|\-]?\d{2}">
                        <textarea name="review" cols="30" rows="10" placeholder="Сообщение" class="w3-input w3-border w3-round-large w3-margin-bottom"></textarea>
                        <button type="submit" class="btn">Заказать</button>
                    </form>
                </div>
            </section>            
        </div>
        <div class="copyright gray">
            <span>&copy;&nbsp;Copyright Qlab&nbsp;&nbsp;</span><?php echo date('Y')?>
        </div>
    </footer>
    <script src="script/jquery-3.2.1.min.js"></script>
    <script src="script/toggle.js"></script>
</body>
</html>