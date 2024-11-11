@php use Illuminate\Support\Facades\Route; @endphp
@php
    $current_route_name = Route::currentRouteName();
    $about_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::ABOUT);
    $contacts_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::CONTACTS);
    $company_info_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::COMPANY_INFO);
    $privacy_policy_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::PRIVACY_POLICY);
    $user_agreement_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::USER_AGREEMENT);
    $terms_and_conditions_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::TERMS_AND_CONDITIONS);
    $cookiebot_pages = [ \App\Constants\RouteNames::HOME, \App\Constants\RouteNames::ONLINE_BOOK, \App\Constants\RouteNames::GAMES];
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script>
        // Define dataLayer and the gtag function.
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}

        // Set default consent to 'denied' as a placeholder
        // Determine actual values based on your own requirements
        gtag('consent', 'default', {
            'ad_storage': 'granted',
            'ad_user_data': 'granted',
            'ad_personalization': 'granted',
            'analytics_storage': 'granted'
        });
    </script>
    @if (app()->isProduction())
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-PH3FC62K');</script>
        <!-- End Google Tag Manager -->
{{--        <!-- Start cookieyes banner --> --}}
{{--        <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/b40c9464bc56035fe92622e4/script.js"></script>--}}
{{--        <!-- End cookieyes banner -->--}}
    @endif
        
    <meta name="google-site-verification" content="gEKmlymokKoICuFnqkpb20c3NAbFXxCgckDkrZbUUSA" />
    <meta name="language" content="{{app()->getLocale() == 'pt' ? 'Portugues' : 'English'}}">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta name='viewport' id='viewport' content='user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height'/>
    <meta http-equiv="Cache-Control" content="max-age=0"/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/img/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/img/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/img/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/img/icons/site.webmanifest')}}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    @php
        $title = !empty($__env->yieldContent('title')) ? trim($__env->yieldContent('title')) : __('app.meta_default.title');
        $description = __('app.meta_default.description');
        $keywords = __('app.meta_default.keywords');
        $metatag = \App\Services\MetatagService::getCurrent();
        $image = !empty($__env->yieldContent('image')) ? trim($__env->yieldContent('image')) : asset("/img/poster.jpg?v=2");
        if($metatag){
            $title = $metatag->title;
            $description = $metatag->description;
            $keywords = $metatag->keywords;
        }

    @endphp
    <title>{{ $title }}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}">
    <meta name="author" content="Another World Lisboa">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="PT-11">
    <meta name="geo.placename" content="Lisboa">
    <meta name="geo.position" content="38.7223;-9.1393">
    <meta name="ICBM" content="38.7223, -9.1393">

    <meta property="og:title" content="{{$title}}">
    <meta property="og:description" content="{{$description}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://vr-arena.pt">
    <meta property="og:image" content="{{$image}}">
    <meta property="og:site_name" content="Another World Lisboa">
    <meta property="og:locale" content="{{app()->getLocale() == 'pt' ? 'pt_PT' : 'en_US'}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{$title}}">
    <meta name="twitter:description" content="{{$description}}">
    <meta name="twitter:image" content="{{$image}}">
    <meta name="twitter:site" content="https://vr-arena.pt">

    <link rel="image_src" href="{{$image}}" />

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
        @if (app()->isProduction())
            <!-- Meta Pixel Code -->
            <script>
                !function(f,b,e,v,n,t,s)
                {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                    n.queue=[];t=b.createElement(e);t.async=!0;
                    t.src=v;s=b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t,s)}(window, document,'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '2438271943229556');
                fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none"
                           src="https://www.facebook.com/tr?id=2438271943229556&ev=PageView&noscript=1"
                /></noscript>
            <!-- End Meta Pixel Code -->
        @endif
</head>
<body>
@if (app()->isProduction())
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PH3FC62K" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
@endif
<div class="c-site" id="app">
    <aside class="c-bar">
        <div class="c-bar__overlay js-bar-close"></div>
        <div class="c-bar__main">
            <button class="c-bar__close js-bar-close"></button>
            <div class="c-bar__content">
                <ul>
                    <li><a href="{{route('games')}}" class="{{$current_route_name === 'games' ? 'is-active' : ''}}">{!! __('app.adventures') !!}</a></li>
                    <li><a href="{{route(\App\Constants\RouteNames::ONLINE_BOOK)}}" target="_blank">{{ __('app.reserve_experience') }}</a></li>
                    <li>
                        <a href="{{route($about_route_name)}}" class="{{$current_route_name === $about_route_name ? 'is-active' : ''}}">{{ __('app.about_us') }}</a>
                    </li>
                    <li>
                        <a href="{{route($contacts_route_name)}}" class="{{$current_route_name === $contacts_route_name ? 'is-active' : ''}}">{{ __('app.contacts') }}</a>
                    </li>
                    <li>
                        <a href="https://www.google.com/maps/place/Another+World+Parking/@38.750559,-9.1047117,19z/data=!3m1!4b1!4m6!3m5!1s0xd19330018a0c101:0x176e741ebce86d37!8m2!3d38.750558!4d-9.104068!16s%2Fg%2F11vxqtxll6?entry=tts&g_ep=EgoyMDI0MDUyMi4wKgBIAVAD" target="_blank">
                            {{ __('app.parking') }}
                        </a>
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
                        <li><a href="{{route('games')}}" class="{{$current_route_name === 'games' ? 'is-active' : ''}}">{!! __('app.adventures') !!}</a></li>
                        <li><a href="{{route(\App\Constants\RouteNames::ONLINE_BOOK)}}" class="c-link--highlight" target="_blank">{{ __('app.reserve_experience') }}</a></li>

                    </ul>
                    <a href="{{ $selectedLang === 'pt' ? '/pt' : '/en' }}" class="c-header__logo"></a>
                    <ul>
                        <li><a href="{{route($about_route_name)}}" class="{{$current_route_name === $about_route_name ? 'is-active' : ''}}">{{ __('app.about_us') }}</a></li>
                        <li><a href="{{route($contacts_route_name)}}" class="{{$current_route_name === $contacts_route_name ? 'is-active' : ''}}">{{ __('app.contacts') }}</a></li>
                    </ul>
                </div>
                <div class="c-header__contacts">
                    <div class="c-header__contacts__desktop">
                        <a href="{{route(\App\Constants\RouteNames::ONLINE_BOOK)}}">{{__('contacts.phone_number')}}</a>
                        <a target="_blank" class="c-social-item"
                           href="{{__('contacts.instagram_link')}}"></a>
                    </div>
                    <a href="{{route(\App\Constants\RouteNames::ONLINE_BOOK)}}" class="c-header__contacts__booking" target="_blank">{{ __('app.reserve_experience') }}</a>
                    <div class="c-header__contacts__mobile">
                        <a href="{{ __('contacts.tel_link') }}" class="c-social-item"><span>{{ __('contacts.phone_number') }}</span></a>
                    </div>
                    <!-- <a target="_blank" class="c-social-item" href="{{--route(\App\Constants\RouteNames::ONLINE_BOOK)--}}"></a> -->
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
                        <li><a href="{{route('games')}}" class="{{$current_route_name === 'games' ? 'is-active' : ''}}">{{ __('app.adventures') }}</a></li>
                        <li><a href="{{route($about_route_name)}}" class="{{$current_route_name === $about_route_name ? 'is-active' : ''}}">{{ __('app.about_us') }}</a></li>
                        <li><a href="{{route($contacts_route_name)}}" class="{{$current_route_name === $contacts_route_name ? 'is-active' : ''}}">{{ __('app.contacts') }}</a></li>
                    </ul>
                </nav>
                <div class="c-footer__actions">
                    <a href="{{route(\App\Constants\RouteNames::ONLINE_BOOK)}}" class="c-button c-button--alt" target="_blank">{{ __('app.reserve_experience') }}</a>
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
                        <!--<a target="_blank" href="{{-- route(\App\Constants\RouteNames::ONLINE_BOOK) --}}"></a>-->
                        <a target="_blank" href="{{ __('contacts.instagram_link') }}"><span>instagram</span></a>
                    </div>
                </div>
            </div>
            <div class="c-footer__legal">
                <ul>
                    <li>
                        <a href="{{route($company_info_route_name)}}" class="{{$current_route_name === $company_info_route_name ? 'is-active' : ''}}">{{ __('app.company_information') }}</a>
                    </li>
                    <li>
                        <a href="{{route($privacy_policy_route_name)}}" class="{{$current_route_name === $privacy_policy_route_name ? 'is-active' : ''}}">{{ __('app.privacy_policy') }}</a>
                    </li>
                    <li>
                        <a href="{{route($terms_and_conditions_route_name)}}" class="{{$current_route_name === $terms_and_conditions_route_name ? 'is-active' : ''}}">{{ __('app.term_and_conditions') }}</a>
                    </li>
                </ul>
            </div>
            <div class="c-footer__copyright">
                {{ __('app.all_rights_reserved') }}
            </div>
        </div>
    </footer>
</div>
@if (app()->isProduction())
    <script>(function(a,m,o,c,r,m){a[m]={id:"1019157",hash:"f8c17e1f791354f242139edcb1087f1894a5651a79ed45febc06df6f9fc7a8ba",locale:"en",setMeta:function(p){this.params=(this.params||[]).concat([p])}};a[o]=a[o]||function(){(a[o].q=a[o].q||[]).push(arguments)};var d=a.document,s=d.createElement('script');s.async=true;s.id=m+'_script';s.src='https://gso.kommo.com/js/button.js';d.head&&d.head.appendChild(s)}(window,0,'crmPlugin',0,0,'crm_plugin'));</script>
@endif
</body>
</html>
