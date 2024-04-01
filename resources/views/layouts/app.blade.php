<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Another World</title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta name='viewport' id='viewport'
          content='user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height'/>
    <meta http-equiv="Cache-Control" content="max-age=0"/><!--31536000-->
    <meta charset="UTF-8" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/img/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/img/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/img/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/img/icons/site.webmanifest')}}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Facebook and Twitter integration -->
    <meta property="og:site_name" content="ANANOTHER WORLD"/>
    <meta property="og:title" content="Парк виртуальных миров Another World. VR аттракцион виртуальной реальности в разных городах по всему"/>
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Another World – это многоуровневые арены с полным погружением в виртуальную реальность. У нас Вы найдете: передовую систему трекинга, просторные помещения, опытных инструкторов и новейшее оборудование. Реалистичные спецэффекты максимально погружают наших гостей в виртуальный мир. Приходите за красочными спецэффектами и невероятными эмоциями в нашу арену"/>
    <meta property="og:image" content="https://vr-arena.com/img/poster.jpg?v=2"/>
    <meta property="og:image:secure_url" content="https://vr-arena.com/" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:url" content="https://vr-arena.com/"/><meta name="twitter:title" content="ANOTHER WORLD" />
    <meta name="twitter:image" content="https://vr-arena.com/img/poster.jpg?v=2" />
    <meta name="twitter:url" content="https://vr-arena.com/" />
    <meta name="twitter:card" content="ANANOTHER WORLD" />
    <link rel="image_src" href="https://vr-arena.com/img/poster.jpg?v=2" />


    <link rel="stylesheet" href="{{ mix('css/plugins/aos/aos.css') }}"/>
    <link rel="stylesheet" href="{{ mix('css/plugins/fancybox/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ mix('css/plugins/select2/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ mix('css/plugins/swiper10/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" media="all" href="{{ mix('css/karma.css') }}" />

    <script type="text/javascript" src="{{ mix('js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/device.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/jquery.mask.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/plugins/swiper10/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/core.swiper.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/core.js') }}"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Lora:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="c-site" id="app">


    <aside class="c-bar">
        <div class="c-bar__overlay js-bar-close"></div>
        <button class="c-bar__close js-bar-close"></button>
        <div class="c-bar__main">
            <div class="c-bar__content">
                <ul>
                    <li><a href="{{route('games')}}">Aventura</a></li>
                    <li><a href="#">Reserve uma experiência</a></li>
                    <li><a href="{{route('about')}}">Sobre nós</a></li>
                    <li><a href="{{route('contacts')}}">Contatos</a></li>
                    <li><a href="https://another-world.com/" target="_blank">Franquia</a></li>
                </ul>
            </div>
        </div>
    </aside>

    <ul class="c-languages">
        <li><a href="#" class="is-active">PT</a></li>
        <li><a href="#">EN</a></li>
    </ul>

    <header class="c-header">
        <div class="c-layout">
            <div class="c-header__container">
                <div class="c-header__nav">
                    <ul>
                        <li><a href="{{route('games')}}">Aventura</a></li>
                        <li><a href="#">Reserve uma experiência</a></li>
                        <li><a href="{{route('about')}}">Sobre nós</a></li>
                    </ul>
                    <a href="#" class="c-header__logo"></a>
                    <ul>
                        <li><a href="{{route('contacts')}}">Contatos</a></li>
                        <li><a href="https://another-world.com/" target="_blank">Franquia</a></li>
                    </ul>
                </div>
                <div class="c-header__contacts">
                    <a href="tel:+351965914900">+351965914900</a>
                    <a target="_blank" class="c-social-item" href="https://www.instagram.com/anotherworld.porto/"></a>
                </div>
                <button class="c-header__hamburger js-bar-trigger"></button>
            </div>
        </div>
    </header>
    @yield('page')
    <footer class="c-footer">
        <div class="c-layout">
            <div class="c-footer__container">
                <a href="#" class="c-footer__logo"></a>
                <nav class="c-footer__nav">
                    <ul>
                        <li><a href="{{route('games')}}">Aventura</a></li>
                        <li><a href="#">Reserve uma experiência</a></li>
                        <li><a href="{{route('about')}}">Sobre nós</a></li>
                        <li><a href="{{route('contacts')}}">Contatos</a></li>
                        <li><a href="https://another-world.com/" target="_blank">Franquia</a></li>
                    </ul>
                </nav>
                <div class="c-footer__actions">
                    <a href="#" class="c-button c-button--alt">Reserva a tua experiência</a>
                </div>
            </div>
            <div class="c-footer__container">
                <div class="c-footer__contacts">
                    LLC "ANOTHER WORLD"<br/>
                    <a href="tel:+351965914900">+351965914900</a><br/>
                    <a href="mailto:anotherworld.porto@gmail.com">anotherworld.porto@gmail.com</a><br/>
                    R. Dr. Joaquim Pires de Lima 119, 4200-347 Porto
                </div>
                <div class="c-footer__social">
                    <div class="c-social">
                        <a target="_blank" href="https://www.instagram.com/anotherworld.porto/">instagram</a>
                    </div>
                </div>
            </div>
            <div class="c-footer__legal">
                <ul>
                    <li><a href="#">Informação da companhia</a></li>
                    <li><a href="#">Política de Confidencialidade</a></li>
                    <li><a href="#">Acordo do usuário</a></li>
                </ul>
            </div>
            <div class="c-footer__copyright">
                &copy; 2024 All right reserved
            </div>
        </div>
    </footer>
</div>
</body>
</html>
