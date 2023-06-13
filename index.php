<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>DevTechnology</title>
        <link href="./style/_zeroing.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./style/style.css">
        <meta name='viewport' content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" href="css/cartonbox.css">
        <link rel="stylesheet" href="style/font-awesome.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        
    </head>
    <body class="body">
        <header class="header">
            <div class="container">
                <div class="header__logo">
                    <img src="/img/newLogo.png" alt="new_logo">
                </div>
                <h1 class="header__title">
                    say hello to <span class="back-color-texthead">dev technology!</span>
                    <br>
                    <span class="back-color-texthead">agency</span> corporate dt theme
                </h1>
                <div >
                    <button class="header__button" name="button" onclick="document.location='view/adminPanel.php'">Admin</button>
                </div>
                <div class="header__img">
                    <img src="/img/header_glass.png" alt="header_glass">
                </div>
            </div>
        </header>
        <main class="main">
            <div class="about__us">
                <h2 class="title__text">about us</h2>
                <h3 class="subtitle__text">lorem ipsum dolor sit amet event landing template</h3> 
                <div class="block-img-and-text">
                    <img class="img-about-us" src="/img/workspace.png" alt="workspace"> 
                    <div class="text-ab-us-more">
                        <h4 class="name-block-teme">we actually do amazing works</h4>
                        <p class="text-block-about-us"> 
                            A visual approach is an approach to a runway at an airport
                            conducted under instrument flight rules. The pilot must at all 
                            times have either the airport or the preceding aircraft in approach 
                            correct sight. Conducted under instrument flight rules. The pilot
                            must at all times.
                        </p>
                        <p class="text-block-about-us"> 
                            Preceding aircraft in approach correct sight. Conducted under
                            instrument flight rules.
                        </p>
                        <h4 class="name-block-teme">why we are the great?</h4>
                        <p class="text-block-about-us"> 
                            A visual approach is an approach to a runway at an airport 
                            conducted under instrument flight rules.<br>
                            The preceding aircraft in approach correct sight.
                        </p>
                    </div>
                </div>
            </div>
            <div class="featured__works">
                <h2 class="title__text">featured works</h2>
                <h3 class="subtitle__text">lorem ipsum dolor sit amet event landing template</h3>
                <div id="block-img" class="block-img photos">
                    <?php    
                        require_once('controller/showFeaturedWorks.php');
                    ?>
                </div>
            </div>
            <div class="small__team">
                <h2 class="title__text">small team</h2>
                <h3 class="subtitle__text">lorem ipsum dolor sit amet event landing template</h3>
                <div class="block-img">
                    <ul class="block-img-spisok">
                        <?php    
                            require_once('controller/showInfoPerson.php');
                        ?>
                    </ul>
                </div>
            </div>
            <div class="content-block">
                <div class="block-contact-map" id="block-contact">
                    <div class="contact-block">
                    <form id="mailForm" class="contacts-section__form">
                        <fieldset class="form-contact-block">
                            <input class="input-form-cont" type="text" name="name" id="name"
                                placeholder="Name*" autocomplete="on" required>
                            <input class="input-form-cont" type="tel" name="phone"
                                id="phone" placeholder="Phone: +375(xx)-xxx-xx-xx" autocomplete="on" required pattern="+375[0-9]{9}" minlength="13" maxlength="13">
                            <input class="input-form-cont" type="email" name="email" id="email"
                                placeholder="Email*" autocomplete="off" required>
                            <textarea class="input-form-cont" name="message"
                                id="message" placeholder="Message*" required minlength="10"></textarea>
                            <button class="btn-send-message" type="submit" name="submit"
                            id="submit">Send message</button>
                        </fieldset> 
                    </form>
                    <div id="errorMess"></div>
                </div>
                    <div class="block-map">
                        <ul class="spisok">
                            <li>Main office: Independence Avenue, 177 Minsk, Belarus</li>
                            <li>Office: Dzerzhinsky Avenue, 104k2 Minsk, Belarus</li>
                            <li>Phone: +37544XXXXXXX</li>
                            <li>Fax: +37544XXXXXXX</li><br>
                            <li>Web: https://github.com/RudnitSiarhei/DevTechnology</li>
                            <li>E-mail: siarhei.rudnitskiy@gmail.com</li>
                        </ul>
                        <div class="yandex-map">
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A57d525f57b82bdb83300bb8226bfb2769348d3db7d2d84a112310e6839b38743&amp;source=constructor" width="455" height="225" frameborder="0"></iframe>    
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <h3 class="footer__title">folow us</h3>
            <ul class="socials__list">
                <li class="socials__item">
                    <a class="socials__link ">
                        <svg class="socials__icon socials__icon--pinterest">
                            <use xlink:href="./img/socials-sprite.svg#pinterest"></use>
                        </svg>
                    </a>
                </li>
                <li class="socials__item">
                    <a class="socials__link">
                        <svg class="socials__icon socials__icon--twitter">
                            <use xlink:href="./img/socials-sprite.svg#twitter"></use>
                        </svg>
                    </a>
                </li>
                <li class="socials__item">
                    <a class="socials__link">
                        <svg class="socials__icon socials__icon--facebook">
                            <use xlink:href="./img/socials-sprite.svg#facebook"></use>
                        </svg>
                    </a>
                </li>
                <li class="socials__item">
                    <a class="socials__link">
                        <svg class="socials__icon socials__icon--dribble">
                            <use xlink:href="./img/socials-sprite.svg#dribble"></use>
                        </svg>
                    </a>
                </li>
            </ul> 
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="js/cartonbox.js"></script>
		<script src="js/app.js"></script>
        <script src="js/formProgressing.js"></script>
    </body>
</html>