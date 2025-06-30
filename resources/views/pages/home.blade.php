@extends('layouts.app')
@section('page')

    @php
        $selectedLang = LaravelLocalization::getCurrentLocale();
    @endphp

    <section class="c-hero" id="section-hero">
        <div class="c-hero__media">
            <div class="c-hero__video">
                <video
                    id="js-hero-video"
                    width="1920" height="1080" autoplay loop muted frameborder="0" allowfullscreen playsinline
                    poster="{{asset("/media/video/img/hero.jpg")}}">
                <source
                    src="https://arena.fhtagn.studio/media/video/hero.mp4"
{{--                        src="{{asset("/media/video/hero-mobile.mp4")}}"--}}
                    data-video="https://arena.fhtagn.studio/media/video/hero.mp4" type="video/mp4"
                />
                </video>
            </div>
        </div>
        <div class="c-hero__meta">
            <div class="c-layout">
                <div class="c-hero__logo">
                    <img src="{{asset("/img/logo-text.svg")}}" alt="ANOTHER WORLD"/>
                </div>

                <div class="c-hero__content">
                    <div class="c-hero__title">{!! __('home.block_1_title') !!}</div>
                    <ul class="c-hero__options">
                        <li>{!! __('home.block_1_list.item_1') !!}</li>
                        <li>{!! __('home.block_1_list.item_2') !!}</li>
                        <li>{!! __('home.block_1_list.item_3') !!}</li>
                    </ul>
                    <div class="c-hero__actions">
                        <a href="{{route(\App\Constants\RouteNames::ONLINE_BOOK)}}" class="c-button" target="_blank">{!! __('home.book_button') !!}</a>
                    </div>
                </div>

                <div class="c-promo">
                    <div class="c-promo__title">{!! __('home.block_2_title') !!}</div>
                    <div class="c-promo__list">
                        <article class="c-promo-item">
                            <div class="c-promo-item__media">
                                <img src="{{asset('/img/promo-1.png')}}" alt=""/>
                            </div>
                            <div class="c-promo-item__meta">
                                {!! __('home.block_2_list.item_1') !!}
                            </div>
                        </article>
                        <article class="c-promo-item">
                            <div class="c-promo-item__media">
                                <img src="{{asset('/img/promo-2.png')}}" alt=""/>
                            </div>
                            <div class="c-promo-item__meta">
                                {!! __('home.block_2_list.item_2') !!}
                            </div>
                        </article>
                        <article class="c-promo-item">
                            <div class="c-promo-item__media">
                                <img src="{{asset('/img/promo-3.png')}}" alt=""/>
                            </div>
                            <div class="c-promo-item__meta">
                                {!! __('home.block_2_list.item_3') !!}
                            </div>
                        </article>
                    </div><!--/c-promo__list-->
                </div><!--/c-promo-->
            </div>
        </div>
    </section>

   @include('widgets.games', ['games' => $games])

    <section class="c-section" id="events">
        <div class="c-layout c-layout--wide">
            <div class="c-event-block">
                <button class="js-custom-popup-book-trigger">
                    <picture>
                        <source
                            srcset="{{ asset('/img/events/event-' . $selectedLang . '-mobile.png') }} 1x,
                                    {{ asset('/img/events/event-' . $selectedLang . '-mobile@2x.png') }} 2x"
                            media="(max-width: 767px)">
                        <source
                            srcset="{{ asset('/img/events/event-' . $selectedLang . '.png') }} 1x,
                                    {{ asset('/img/events/event-' . $selectedLang . '@2x.png') }} 2x">
                        <img
                            src="{{ asset('/img/events/event-' . $selectedLang . '.png') }}"
                            alt="Events {{ strtoupper($selectedLang) }}">
                    </picture>

                </button>
            </div>
        </div>
    </section>

    <section class="c-section" id="price">
        <div class="c-layout c-layout--wide">
            <div class="swiper js-swiper-price c-price-list">
                <div class="swiper-wrapper">
                    <div class="swiper-slide c-price-item">
                        <div class="c-price-item-hover"></div>
                        <div class="c-price-item__title">
                            <img src="{{ asset('/img/price/price-name-6.png') }}"
                                 srcset="{{ asset('/img/price/price-name-6@2x.png') }} 2x" alt="Festa Ate 6">
                        </div>
                        <div class="c-price-item__main">
                            <div class="c-price-item__main__text">
                                {!! __('home.price_title_1') !!}
                            </div>
                            <div class="c-price-item__main__price">
                                240€
                            </div>
                        </div>
                        <div class="c-price-item__info">
                            <div class="c-price-item__info__extra">
                                {!! __('home.price_extra_title') !!}
                            </div>
                            <div class="c-price-item__info__name">
                                {!! __('home.price_extra_25_min') !!}
                            </div>
                            <div class="c-price-item__info__price">
                                +150€
                            </div>
                            <div class="c-price-item__info__name">
                                {!! __('home.price_extra_50_min') !!}
                            </div>
                            <div class="c-price-item__info__price">
                                +170€
                            </div>

                        </div>
                        <div class="c-price-item__action">
                            <button class="js-custom-popup-book-trigger">{!! __('home.book_now') !!}</button>
                        </div>
                    </div>
                    <div class="swiper-slide c-price-item">
                        <div class="c-price-item-hover"></div>
                        <div class="c-price-item__title">
                            <img src="{{ asset('/img/price/price-name-12.png') }}"
                                 srcset="{{ asset('/img/price/price-name-12@2x.png') }} 2x" alt="Festa Ate 12">
                        </div>
                        <div class="c-price-item__main">
                            <div class="c-price-item__main__text">
                                {!! __('home.price_title_1') !!}
                            </div>
                            <div class="c-price-item__main__price">
                                360€
                            </div>
                        </div>
                        <div class="c-price-item__info">
                            <div class="c-price-item__info__extra">
                                {!! __('home.price_extra_title') !!}
                            </div>
                            <div class="c-price-item__info__name">
                                {!! __('home.price_extra_25_min') !!}
                            </div>
                            <div class="c-price-item__info__price">
                                +240€
                            </div>
                            <div class="c-price-item__info__name">
                                {!! __('home.price_extra_50_min') !!}
                            </div>
                            <div class="c-price-item__info__price">
                                +290€
                            </div>
                        </div>
                        <div class="c-price-item__action">
                            <button class="js-custom-popup-book-trigger">{!! __('home.book_now') !!}</button>
                        </div>
                    </div>
                    <div class="swiper-slide c-price-item">
                        <div class="c-price-item-hover"></div>
                        <div class="c-price-item__title">
                            <img src="{{ asset('/img/price/price-name-18.png') }}"
                                 srcset="{{ asset('/img/price/price-name-18@2x.png') }} 2x" alt="Festa Ate 18">
                        </div>
                        <div class="c-price-item__main">
                            <div class="c-price-item__main__text">
                                {!! __('home.price_title_1') !!}
                            </div>
                            <div class="c-price-item__main__price">
                                540€
                            </div>
                        </div>
                        <div class="c-price-item__info">
                            <div class="c-price-item__info__extra">
                                {!! __('home.price_extra_title') !!}
                            </div>
                            <div class="c-price-item__info__name">
                                {!! __('home.price_extra_25_min') !!}
                            </div>
                            <div class="c-price-item__info__price">
                                +360€
                            </div>
                            <div class="c-price-item__info__name">
                                {!! __('home.price_extra_50_min') !!}
                            </div>
                            <div class="c-price-item__info__price">
                                +430€
                            </div>
                        </div>
                        <div class="c-price-item__action">
                            <button class="js-custom-popup-book-trigger">{!! __('home.book_now') !!}</button>
                        </div>
                    </div>
                    <div class="swiper-slide c-price-item">
                        <div class="c-price-item-hover"></div>
                        <div class="c-price-item__title">
                            <img src="{{ asset('/img/price/price-name-24.png') }}"
                                 srcset="{{ asset('/img/price/price-name-24@2x.png') }} 2x" alt="Festa Ate 24">
                        </div>
                        <div class="c-price-item__main">
                            <div class="c-price-item__main__text">
                                {!! __('home.price_title_1') !!}
                            </div>
                            <div class="c-price-item__main__price">
                                720€
                            </div>
                        </div>
                        <div class="c-price-item__info">
                            <div class="c-price-item__info__extra">
                                {!! __('home.price_extra_title') !!}
                            </div>
                            <div class="c-price-item__info__name">
                                {!! __('home.price_extra_25_min') !!}
                            </div>
                            <div class="c-price-item__info__price">
                                +480€
                            </div>
                            <div class="c-price-item__info__name">
                                {!! __('home.price_extra_50_min') !!}
                            </div>
                            <div class="c-price-item__info__price">
                                +580€
                            </div>
                        </div>
                        <div class="c-price-item__action">
                            <button class="js-custom-popup-book-trigger">{!! __('home.book_now') !!}</button>
                        </div>
                    </div>
                </div>
                <button class="swiper-button-prev js-swiper-price-prev"></button>
                <button class="swiper-button-next js-swiper-price-next"></button>
            </div>
        </div>
    </section>

    <section class="c-section" id="gifts_cards">
        <div class="c-layout c-layout--wide">
            <div class="c-gift-block">
                <button class="js_iframe_widget" type="button">
                    <picture>
                        <source
                            srcset="{{ asset('/img/gift/e-gift-' . $selectedLang . '-mobile.png') }} 1x,
                                    {{ asset('/img/gift/e-gift-' . $selectedLang . '-mobile@2x.png') }} 2x"
                            media="(max-width: 767px)">
                        <source
                            srcset="{{ asset('/img/gift/e-gift-' . $selectedLang . '.png') }} 1x,
                                    {{ asset('/img/gift/e-gift-' . $selectedLang . '@2x.png') }} 2x">
                        <img
                            src="{{ asset('/img/gift/e-gift-' . $selectedLang . '.png') }}"
                            alt="E-Gift {{ strtoupper($selectedLang) }}">
                    </picture>

                </button>
            </div>
        </div>
    </section>

    <script>!function(a,m,o,c,r,m){a[o+c]=a[o+c]||{setMeta:function(p){this.params=(this.params||[]).concat([p])}},a[o+r]=a[o+r]||function(f){a[o+r].f=(a[o+r].f||[]).concat([f])},a[o+r]({id:"1526776",hash:"f59971a8250737c4833e24feff7f703d",locale:"en"}),a[o+m]=a[o+m]||function(f,k){a[o+m].f=(a[o+m].f||[]).concat([[f,k]])}}(window,0,"amo_forms_","params","load","loaded");</script>
    <div class="c-custom-popup js-custom-popup-book">
        <div class="c-custom-popup__overlay js-custom-popup-book-close"></div>
        <div class="c-custom-popup__wrapper">
            <script id="amoforms_script_1526776" async="async" charset="utf-8" src="https://forms.kommo.com/forms/assets/js/amoforms.js?1749683180"></script>
        </div>
    </div>

    <section class="c-section" id="section-price">
        <div class="c-layout">
            <div class="c-section__title">
                {!! __('home.prices_block_title') !!}
                <div class="c-section__title-description">{!! __('home.prices_per_person') !!}</div>
            </div>

            <div class="c-section__text">
                <table>
                    <tbody>
                        <tr>
                            <td class="o-highlight">{!! __('home.prices_block_multy') !!}</td>
                            <td>25 MIN</td>
                            <td>50 MIN</td>
                        </tr>
                        <tr>
                            <td>2 {!! __('home.prices_block_players') !!}</td>
                            <td>30€</td>
                            <td>35€</td>
                        </tr>
                        <tr>
                            <td>3 {!! __('home.prices_block_players') !!}</td>
                            <td>29€</td>
                            <td>34€</td>
                        </tr>
                        <tr>
                            <td>4 {!! __('home.prices_block_players') !!}</td>
                            <td>28€</td>
                            <td>33€</td>
                        </tr>
                        <tr>
                            <td>5 {!! __('home.prices_block_players') !!}</td>
                            <td>27€</td>
                            <td>32€</td>
                        </tr>
                        <tr>
                            <td>6 {!! __('home.prices_block_players') !!}</td>
                            <td>26€</td>
                            <td>31€</td>
                        </tr>
                        <tr>
                            <td>7 {!! __('home.prices_block_players') !!}</td>
                            <td>25€</td>
                            <td>30€</td>
                        </tr>
                        <tr>
                            <td>8 {!! __('home.prices_block_players') !!}</td>
                            <td>24€</td>
                            <td>29€</td>
                        </tr>
                        <tr>
                            <td>9 {!! __('home.prices_block_players') !!}</td>
                            <td>23€</td>
                            <td>28€</td>
                        </tr>
                        <tr>
                            <td>10 {!! __('home.prices_block_players') !!}</td>
                            <td>22€</td>
                            <td>27€</td>
                        </tr>
                        <tr>
                            <td>11 {!! __('home.prices_block_players') !!}</td>
                            <td>21€</td>
                            <td>26€</td>
                        </tr>
                        <tr>
                            <td>12 {!! __('home.prices_block_players') !!} <span class="o-highlight">+</span></td>
                            <td>20€</td>
                            <td>25€</td>
                        </tr>
                        <tr class="o-footer">
                            <td class="o-highlight">{!! __('home.prices_block_single') !!}</td>
                            <td><strong>20€</strong></td>
                            <td><strong>25€</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="c-section__actions">
                @include('partials.reserve_button')
            </div>

        </div>
    </section>

    @include('widgets.faq', ['faqs' => $faqs])

    {{--        @include('widgets.map')--}}

@endsection
