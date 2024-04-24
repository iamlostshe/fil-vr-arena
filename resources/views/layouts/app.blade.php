@php use Illuminate\Support\Facades\Route; @endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta name="language" content="{{app()->getLocale() == 'pt' ? 'Portugues' : 'English'}}">
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
    @php
        $storedMetatags = \App\Services\MetatagService::getCurrentHtml();
    @endphp
    @if($storedMetatags==="")
        @if(!empty(trim($__env->yieldContent('title'))))
            <title>@yield('title')</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif
    @else
        {!! $storedMetatags !!}
    @endif

    {!! \App\Services\MetatagService::getCurrentHtml() !!}

    <meta name="description" content="Explore the ultimate virtual reality free roam arena experience in Lisbon, Portugal. Immerse yourself in thrilling VR adventures with friends and family. Book your session now!">
    <meta name="keywords" content="virtual reality Lisbon, vr arena lisboa, birthday party for kids, VR arena Portugal, free roam VR experience, VR gaming Lisbon, virtual reality adventures, vr experience, realidade virtual lisboa, ">
    <meta name="author" content="Another World Lisboa">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="PT-11">
    <meta name="geo.placename" content="Lisboa">
    <meta name="geo.position" content="38.7223;-9.1393">
    <meta name="ICBM" content="38.7223, -9.1393">

    <meta property="og:title" content="Virtual Reality Free Roam Arena in Lisbon, Portugal">
    <meta property="og:description" content="Explore the ultimate virtual reality free roam arena experience in Lisbon, Portugal. Immerse yourself in thrilling VR adventures with friends and family. Book your session now!">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://vr-arena.pt">
    <meta property="og:image" content="https://vr-arena.pt/img/poster.jpg?v=2">
    <meta property="og:site_name" content="Another World Lisboa">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Virtual Reality Free Roam Arena in Lisboa">
    <meta name="twitter:description" content="Explore the ultimate virtual reality free roam arena experience in Lisbon, Portugal. Immerse yourself in thrilling VR adventures with friends and family. Book your session now!">
    <meta name="twitter:image" content="https://vr-arena.pt/img/poster.jpg?v=2">
    <meta name="twitter:site" content="https://vr-arena.pt">

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

    <script type="text/javascript" src="{{ mix('js/core.swiper.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/core.js') }}"></script>

</head>
@php
$about_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::ABOUT);
$contacts_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::CONTACTS);
$company_info_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::COMPANY_INFO);
$privacy_policy_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::PRIVACY_POLICY);
$user_agreement_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::USER_AGREEMENT);
function isActive($page){

    return Route::currentRouteName() === $page ? 'is-active' : '';
}
@endphp
<body>

<div class="c-site" id="app">
    <aside class="c-bar">
        <div class="c-bar__overlay js-bar-close"></div>
        <button class="c-bar__close js-bar-close"></button>
        <div class="c-bar__main">
            <div class="c-bar__content">
                <ul>
                    <li><a href="{{route('games')}}" class="{{isActive('games')}}">{!! __('app.adventures') !!}</a></li>
                    <li><a href="{{__('contacts.reserve_link')}}" target="_blank">{{ __('app.reserve_experience') }}</a></li>
                    <li>
                        <a href="{{route($about_route_name)}}" class="{{isActive($about_route_name)}}">{{ __('app.about_us') }}</a>
                    </li>
                    <li>
                        <a href="{{route($contacts_route_name)}}"  class="{{isActive($contacts_route_name)}}">{{ __('app.contacts') }}</a>
                    </li>
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
                        <li><a href="{{route('games')}}" class="{{isActive('games')}}">{!! __('app.adventures') !!}</a></li>
                        <li><a href="{{ __('contacts.reserve_link') }}" class="c-link--highlight" target="_blank">{{ __('app.reserve_experience') }}</a></li>

                    </ul>
                    <a href="{{ $selectedLang === 'pt' ? '/pt' : '/en' }}" class="c-header__logo"></a>
                    <ul>
                        <li><a href="{{route($about_route_name)}}" class="{{isActive($about_route_name)}}">{{ __('app.about_us') }}</a></li>
                        <li><a href="{{route($contacts_route_name)}}" class="{{isActive($contacts_route_name)}}">{{ __('app.contacts') }}</a></li>
                    </ul>
                </div>
                <div class="c-header__contacts">
                    <div class="c-header__contacts__desktop">
                        <a href="{{__('contacts.reserve_link')}}">{{__('contacts.phone_number')}}</a>
                        <a target="_blank" class="c-social-item"
                           href="{{__('contacts.instagram_link')}}"></a>
                    </div>
                    <a href="{{ __('contacts.reserve_link') }}" class="c-header__contacts__booking" target="_blank">{{ __('app.reserve_experience') }}</a>
                    <div class="c-header__contacts__mobile">
                        <a href="{{ __('contacts.tel_link') }}" class="c-social-item"><span>{{ __('contacts.phone_number') }}</span></a>
                    </div>
                    <a target="_blank" class="c-social-item" href="{{ __('contacts.reserve_link') }}"></a>
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
                <a href="/" class="c-footer__logo"></a>
                <nav class="c-footer__nav">
                    <ul>
                        <li><a href="{{route('games')}}" class="{{isActive('games')}}">{{ __('app.adventure') }}</a></li>
                        <li><a href="{{route($about_route_name)}}" class="{{isActive($about_route_name)}}">{{ __('app.about_us') }}</a></li>
                        <li><a href="{{route($contacts_route_name)}}" class="{{isActive($contacts_route_name)}}">{{ __('app.contacts') }}</a></li>
                    </ul>
                </nav>
                <div class="c-footer__actions">
                    <a href="{{ __('contacts.reserve_link') }}" class="c-button c-button--alt" target="_blank">{{ __('app.reserve_experience') }}</a>
                </div>
            </div>
            <div class="c-footer__container">
                <div class="c-footer__contacts">
                    MOMENTO FORMOSO UNIPESSOAL LDA<br/>
                    <a href="{{ __('contacts.tel_link') }}">{{ __('contacts.phone_number') }}</a><br/>
                    <a href="mailto:{{ __('contacts.email') }}">{{ __('contacts.email') }}</a><br/>
                </div>
                <div class="c-footer__social">
                    <div class="c-social">
                        <a href="{{ __('contacts.tel_link') }}"><span>{{ __('contacts.phone_nuber') }}</span></a>
                        <a target="_blank" href="{{ __('contacts.reserve_link') }}"></a>
                        <a target="_blank" href="{{ __('contacts.instagram_link') }}"><span>instagram</span></a>
                    </div>
                </div>
            </div>
            <div class="c-footer__legal">
                <ul>
                    <li>
                        <a href="{{route($company_info_route_name)}}" class="{{isActive($company_info_route_name)}}">{{ __('app.company_information') }}</a>
                    </li>
                    <li>
                        <a href="{{route($privacy_policy_route_name)}}" class="{{isActive($privacy_policy_route_name)}}">{{ __('app.privacy_policy') }}</a>
                    </li>
                    <li>
                        <a href="{{route($user_agreement_route_name)}}" class="{{isActive($user_agreement_route_name)}}">{{ __('app.user_agreement') }}</a>
                    </li>
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
