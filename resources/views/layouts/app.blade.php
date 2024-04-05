<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ __('app.title') }}</title>
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
    <meta property="og:title" content="Virtual reality Porto parque com movimento livre"/>
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Virtual reality Porto parque com movimento livre"/>
    <meta property="og:image" content="https://vr-arena.pt/img/poster.jpg?v=2"/>
    <meta property="og:image:secure_url" content="https://vr-arena.pt/" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:url" content="https://vr-arena.pt/"/>
    <meta name="twitter:title" content="ANOTHER WORLD" />
    <meta name="twitter:image" content="https://vr-arena.pt/img/poster.jpg?v=2" />
    <meta name="twitter:url" content="https://vr-arena.pt/" />
    <meta name="twitter:card" content="ANANOTHER WORLD" />
    <link rel="image_src" href="https://vr-arena.pt/img/poster.jpg?v=2" />


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
    <script type="text/javascript" src="{{ mix('js/core.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/core.swiper.js') }}"></script>

</head>
<body>

<div class="c-site" id="app">


    <aside class="c-bar">
        <div class="c-bar__overlay js-bar-close"></div>
        <button class="c-bar__close js-bar-close"></button>
        <div class="c-bar__main">
            <div class="c-bar__content">
                <ul>
                    <li><a href="{{route('games')}}">{!! __('app.adventures') !!}</a></li>
                    <li><a href="#">{{ __('app.reserve_experience') }}</a></li>
                    <li><a href="{{route('about')}}">{{ __('app.about_us') }}</a></li>
                    <li><a href="{{route('contacts')}}">{{ __('app.contacts') }}</a></li>
                    <li><a href="https://another-world.com/" target="_blank">{{ __('app.franchise') }}</a></li>
                </ul>
            </div>
        </div>
    </aside>
    @php
        $currentUrl = url()->current();
        $selectedLang = LaravelLocalization::getCurrentLocale();
    @endphp


    <ul class="c-languages">
        <li><a href="{{ LaravelLocalization::getLocalizedURL('pt', $currentUrl) }}" class="{{ $selectedLang === 'pt' ? 'is-active' : '' }}">PT</a></li>
        <li><a href="{{ LaravelLocalization::getLocalizedURL('en', $currentUrl) }}" class="{{ $selectedLang === 'en' ? 'is-active' : '' }}">EN</a></li>
    </ul>


    <header class="c-header">
        <div class="c-layout">
            <div class="c-header__container">
                <div class="c-header__nav">
                    <ul>
                        <li><a href="{{route('games')}}">{!! __('app.adventures') !!}</a></li>
                        <li><a href="#">{{ __('app.reserve_experience') }}</a></li>
                        <li><a href="{{route('about')}}">{{ __('app.about_us') }}</a></li>
                    </ul>
                    <a href="#" class="c-header__logo"></a>
                    <ul>
                        <li><a href="{{route('contacts')}}">{{ __('app.contacts') }}</a></li>
                        <li><a href="https://another-world.com/" target="_blank">{{ __('app.franchise') }}</a></li>
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
    <main class="c-main">
        @yield('page')
    </main>
    <footer class="c-footer">
        <div class="c-layout">
            <div class="c-footer__container">
                <a href="#" class="c-footer__logo"></a>
                <nav class="c-footer__nav">
                    <ul>
                        <li><a href="{{route('games')}}">{{ __('app.adventure') }}</a></li>
                        <li><a href="#">{{ __('app.reserve_experience') }}</a></li>
                        <li><a href="{{route('about')}}">{{ __('app.about_us') }}</a></li>
                        <li><a href="{{route('contacts')}}">{{ __('app.contacts') }}</a></li>
                        <li><a href="https://another-world.com/" target="_blank">{{ __('app.franchise') }}</a></li>
                    </ul>
                </nav>
                <div class="c-footer__actions">
                    <a href="#" class="c-button c-button--alt">{{ __('app.reserve_experience') }}</a>
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
                    <li><a href="#">{{ __('app.company_information') }}</a></li>
                    <li><a href="#">{{ __('app.privacy_policy') }}</a></li>
                    <li><a href="#">{{ __('app.user_agreement') }}</a></li>
                </ul>
            </div>
            <div class="c-footer__copyright">
                {{ __('app.all_rights_reserved') }}
            </div>
        </div>
    </footer>
</div>
</body>
</html>
