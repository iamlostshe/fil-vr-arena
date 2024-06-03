@php use Illuminate\Support\Facades\Route; @endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

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

</head>
@php
$current_route_name = Route::currentRouteName();
$about_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::ABOUT);
$contacts_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::CONTACTS);
$company_info_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::COMPANY_INFO);
$privacy_policy_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::PRIVACY_POLICY);
$user_agreement_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::USER_AGREEMENT);
$terms_and_conditions_route_name = \App\Services\StaticPageService::getRoute(\App\Constants\StaticPage::TERMS_AND_CONDITIONS);
@endphp
<body>

<div class="c-site" id="app">
    <aside class="c-bar">
        <div class="c-bar__overlay js-bar-close"></div>
        <div class="c-bar__main">
            <button class="c-bar__close js-bar-close"></button>
            <div class="c-bar__content">
                <ul>
                    <li><a href="{{route('games')}}" class="{{$current_route_name === 'games' ? 'is-active' : ''}}">{!! __('app.adventures') !!}</a></li>
                    <li><a href="{{__('contacts.reserve_link')}}" target="_blank">{{ __('app.reserve_experience') }}</a></li>
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
                        <li><a href="{{ __('contacts.reserve_link') }}" class="c-link--highlight" target="_blank">{{ __('app.reserve_experience') }}</a></li>

                    </ul>
                    <a href="{{ $selectedLang === 'pt' ? '/pt' : '/en' }}" class="c-header__logo"></a>
                    <ul>
                        <li><a href="{{route($about_route_name)}}" class="{{$current_route_name === $about_route_name ? 'is-active' : ''}}">{{ __('app.about_us') }}</a></li>
                        <li><a href="{{route($contacts_route_name)}}" class="{{$current_route_name === $contacts_route_name ? 'is-active' : ''}}">{{ __('app.contacts') }}</a></li>
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
                        <li><a href="{{route('games')}}" class="{{$current_route_name === 'games' ? 'is-active' : ''}}">{{ __('app.adventures') }}</a></li>
                        <li><a href="{{route($about_route_name)}}" class="{{$current_route_name === $about_route_name ? 'is-active' : ''}}">{{ __('app.about_us') }}</a></li>
                        <li><a href="{{route($contacts_route_name)}}" class="{{$current_route_name === $contacts_route_name ? 'is-active' : ''}}">{{ __('app.contacts') }}</a></li>
                        <li>
                            <a href="https://www.google.com/maps/place/Another+World+Parking/@38.750559,-9.1047117,19z/data=!3m1!4b1!4m6!3m5!1s0xd19330018a0c101:0x176e741ebce86d37!8m2!3d38.750558!4d-9.104068!16s%2Fg%2F11vxqtxll6?entry=tts&g_ep=EgoyMDI0MDUyMi4wKgBIAVAD" target="_blank">
                                {{ __('app.parking') }}
                            </a>
                        </li>
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
</body>
</html>
